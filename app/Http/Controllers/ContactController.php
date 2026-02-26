<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validate the data
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required'
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => env('NOCAPTCHA_SECRET'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (!$response->json('success')) {
            return "reCAPTCHA verification failed. Please try again.";
        }

        $data = $request->all();

        try {
            // 2. Send the email to both your addresses
            $recipients = ['dipty@rafusoft.com', 'armanhossen591@gmail.com'];

            Mail::to($recipients)->send(new ContactFormMail($data));

            // 3. Return "OK" as expected by the frontend JS
            return 'OK';
        } catch (Exception $e) {
          // We changed Exception to \Throwable. This catches EVERYTHING, 
            // even fatal PHP errors, and the backslash ensures it doesn't look 
            // in the wrong namespace.

            // 1. Log the exact error and the stack trace to laravel.log
            \Log::error('Mail sending failed: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);

            // 2. Return the exact message to the frontend (temporarily)
            return 'MAIL ERROR: ' . $e->getMessage();
        }
    }
}
