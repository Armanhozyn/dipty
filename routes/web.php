<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('dipty');
});

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');

    return 'Application cache cleared successfully.';
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::get('/test-smtp', function () {
    try {
        // 1. Print the EXACT credentials Laravel is about to use
        dump('Host: ' . config('mail.mailers.smtp.host'));
        dump('Port: ' . config('mail.mailers.smtp.port'));
        dump('Username: ' . config('mail.mailers.smtp.username'));

        // 2. Send a basic raw email (Bypasses your Mailable class entirely)
        Mail::raw('This is a raw SMTP test email from Laravel.', function ($message) {
            $message->to('armanhossen591@gmail.com')
                    ->subject('Absolute Raw SMTP Test');
        });

        return 'Test complete: No errors were thrown by Laravel.';
    } catch (\Throwable $e) {
        return 'Test failed with error: ' . $e->getMessage();
    }
});