<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dipty');
});

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');

    return 'Application cache cleared successfully.';
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');