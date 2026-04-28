<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Admission;
use App\Models\Fee;
use App\Services\PhonePeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    private $phonePeService;

    public function __construct(PhonePeService $phonePeService)
    {
        $this->phonePeService = $phonePeService;
    }

    public function create()
    {
        $fees = Fee::with('course')
            ->where('user_id', auth()->id())
            ->where('status', '!=', 'paid')
            ->get();
            
        if ($fees->isEmpty()) {
            return redirect()->route('fees.index')->with('info', 'You have no pending fees.');
        }

        return view('payments.create', compact('fees'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fee_id' => 'required|exists:fees,id',
            'amount' => 'required|numeric|min:1',
        ]);

        $fee = Fee::findOrFail($data['fee_id']);
        
        if ($fee->user_id !== auth()->id()) {
            abort(403);
        }

        $merchantTransactionId = 'MT' . time() . rand(1000, 9999);

        // Initiate PhonePe payment
        $response = $this->phonePeService->initiatePayment(
            $data['amount'], 
            $merchantTransactionId, 
            auth()->id(), 
            route('payments.callback')
        );

        if ($response['success']) {
            // Create pending payment record
            Payment::create([
                'user_id' => auth()->id(),
                'fee_id' => $fee->id,
                'amount' => $data['amount'],
                'merchant_transaction_id' => $merchantTransactionId,
                'status' => 'pending',
                'type' => 'course_fee',
            ]);

            return redirect()->away($response['redirect_url']);
        }

        return redirect()->back()->with('error', $response['message']);
    }

    /**
     * Handle PhonePe Callback/Redirect
     */
    public function callback(Request $request)
    {
        Log::info('PhonePe Callback received', $request->all());

        // Handling both POST (Redirect) and eventual GET
        $merchantTransactionId = $request->input('merchantTransactionId') ?? $request->input('transactionId');
        
        if (!$merchantTransactionId && $request->has('response')) {
            $decodedResponse = json_decode(base64_decode($request->input('response')), true);
            $merchantTransactionId = $decodedResponse['data']['merchantTransactionId'] ?? null;
        }

        if (!$merchantTransactionId) {
            return redirect()->route('fees.index')->with('error', 'Invalid transaction reference.');
        }

        // Verify status with PhonePe API for security
        $verification = $this->phonePeService->verifyStatus($merchantTransactionId);

        if (!$verification || !isset($verification['code'])) {
            return redirect()->route('fees.index')->with('error', 'Could not verify payment status.');
        }

        $payment = Payment::where('merchant_transaction_id', $merchantTransactionId)->firstOrFail();
        
        // Prevent duplicate processing
        if ($payment->status === 'success') {
            return redirect()->route('fees.index')->with('success', 'Payment already processed.');
        }

        $payment->response_data = $verification;
        $payment->payment_id = $verification['data']['transactionId'] ?? null;

        if ($verification['code'] === 'PAYMENT_SUCCESS') {
            $payment->status = 'success';
            $payment->save();

            // Update Fee
            $fee = Fee::findOrFail($payment->fee_id);
            $fee->paid_amount += $payment->amount;
            if ($fee->paid_amount >= $fee->total_amount) {
                $fee->status = 'paid';
            } else {
                $fee->status = 'partially_paid';
            }
            $fee->save();

            // Sync Admission
            if ($fee->status === 'paid') {
                Admission::where('user_id', $payment->user_id)
                    ->where(function($q) use ($fee) {
                        if ($fee->batch_id) $q->where('batch_id', $fee->batch_id);
                        else $q->where('course_id', $fee->course_id);
                    })
                    ->update(['status' => 'approved']);
            }

            return redirect()->route('fees.index')->with('success', 'Payment successful! Your course access is updated.');
        } else {
            $payment->status = 'failed';
            $payment->save();
            return redirect()->route('fees.index')->with('error', 'Payment failed or was declined: ' . ($verification['message'] ?? 'Unknown error'));
        }
    }
}
