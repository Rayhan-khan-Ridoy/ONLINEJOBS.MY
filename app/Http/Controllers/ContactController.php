<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        //  dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => htmlspecialchars($request->name, ENT_QUOTES, 'UTF-8'),
            'email' => htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8'),
            'phone' => htmlspecialchars($request->phone, ENT_QUOTES, 'UTF-8'),
            'subject' => htmlspecialchars($request->subject, ENT_QUOTES, 'UTF-8'),
            'message' => htmlspecialchars($request->message, ENT_QUOTES, 'UTF-8'),
        ];

        try {
            Mail::to('enquiry@onlinejobs.my')->send(new ContactMail($details));
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to send your message. Please try again later.');
        }

    }
}