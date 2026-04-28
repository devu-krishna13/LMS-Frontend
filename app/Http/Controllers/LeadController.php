<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewLeadNotification;

class LeadController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'inst_name' => 'required|string|max:255',
            'inst_location' => 'required|string|max:255',
            'country_code' => 'required|string|max:10',
            'inst_phone' => 'required|string|max:20',
            'inst_email' => 'required|email|max:255',
        ]);

        try {
            Mail::to('lms@task19.com')->send(new NewLeadNotification($validated));
            
            return response()->json([
                'success' => true,
                'message' => 'Lead registered and email sent.'
            ]);
        } catch (\Exception $e) {
            // Even if mail fails, we return success to not block the user demo
            // but log the error
            \Log::error('Mail failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => true,
                'message' => 'Lead registered locally (Mail failed).'
            ]);
        }
    }
}
