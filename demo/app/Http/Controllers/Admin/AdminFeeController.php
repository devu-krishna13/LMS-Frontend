<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fee;

class AdminFeeController extends Controller
{
    public function index()
    {
        $fees = Fee::with(['user.admissions.batch', 'course', 'payments' => function($q) {
                $q->where('status', 'success')->latest();
            }])
            ->latest()
            ->paginate(20);

        $stats = [
            'total_due'       => Fee::where('status', 'pending')->sum('total_amount'),
            'total_collected' => Fee::where('status', 'paid')->sum('paid_amount'),
            'total_discounts' => Fee::sum(\DB::raw('original_amount - total_amount')),
            'overdue_count'   => Fee::where('status', 'pending')
                                  ->where('due_date', '<', now())
                                  ->count(),
            'active_students' => Fee::where('status', 'paid')->distinct('user_id')->count(),
        ];

        return view('admin.fees.index', compact('fees', 'stats'));
    }

    public function markPaid(Fee $fee)
    {
        $fee->update([
            'paid_amount' => $fee->total_amount,
            'status'      => 'paid',
        ]);

        // BUG FIX: Synchronize Admission Status & Enrollment
        $admission = \App\Models\Admission::where('user_id', $fee->user_id)
            ->where(function($q) use ($fee) {
                if ($fee->batch_id) $q->where('batch_id', $fee->batch_id);
                else $q->where('course_id', $fee->course_id);
            })
            ->where('status', '!=', 'approved')
            ->first();

        if ($admission) {
            $admission->update(['status' => 'approved']);

            // Sync to library (Enrollment table)
            if ($admission->course_id) {
                \App\Models\Enrollment::updateOrCreate(
                    ['user_id' => $admission->user_id, 'course_id' => $admission->course_id],
                    ['batch_id' => $admission->batch_id, 'status' => 'active', 'progress' => 0]
                );
            }
        }

        return back()->with('success', 'Fee marked as paid and course access granted.');
    }
}
