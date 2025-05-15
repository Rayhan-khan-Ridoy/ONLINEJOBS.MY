<?php

namespace App\Traits;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\OtpMail; // Ensure you have an OtpMail mailable for sending OTP

trait OtpTrait
{
    // Generate, store, and send OTP in one method
    public function processOtpSending($email)
    {
        // Step 1: Generate a 6-digit OTP
        $otp = rand(100000, 999999); // Generate a random 6-digit OTP

        // Step 2: Store the OTP in session for later verification
        session(['otp' => $otp]);

        // Step 3: Send the OTP email
        Mail::to($email)->send(new OtpMail($otp)); // Send OTP via the OtpMail mailable

        Log::info('OTP verification code sent__Rayhan', [
            'OTP' => $otp,
        ]);
       
    }

   
}
