<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\OtpTrait;

class OtpController extends Controller
{
    use OtpTrait;

    public function getEmail()
    {
        $previousUrl = url()->previous(); // e.g., https://example.com/a
        $path = parse_url($previousUrl, PHP_URL_PATH); // get path: /a

        // Optional: Normalize the path to remove trailing slashes
        $path = rtrim($path, '/');
        session(['previousUrl'=>$path]);

        return view('getEmail');
    }

    public function sendEmail(Request $request)
    {
        session(['requestEmail'=>$request->email]);

        $this->processOtpSending($request->email);
        session()->flash('success','OTP sent successfully!');
        return redirect('/otpSubmitPage');
    }

    public function showOtpSubmitPage()
    {
        return view('otpSubmitPage');
    }

    
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $enteredOtp = $request->input('otp');

        if ($enteredOtp == session('otp')) {
           
            session(['otp_verified' => true]); //for later use in register controller

            // Check and redirect
            $previousUrl = session('previousUrl'); // ✅ Store the previous url to determine which login page (employer, partner, jobseeker, etc.) the request originated from
        

            if ($previousUrl == '/employer/login') {
                return redirect('/employer/create');
            } elseif ($previousUrl == '/login') {
                return redirect('/professional/create');
            } elseif ($previousUrl == '/partner/login') {
                return redirect('/agent/create');
            } elseif ($previousUrl == '/retired/login') {
                return redirect('/retiredPersonnel/create');
            }

        }else {
            session()->forget('previousUrl'); 
            session(['otp_verified' => false]);
            return redirect()->route('getEmail')->with('error', 'Invalid OTP');
        }

        // Flash error message if OTP does not match
         // OTP does not match, return fals
    }
}
