<?php

namespace App;

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Requests\EmailVerificationUpdateRequest;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// =====================================================================
// =============================Authentication Routes===================
// ======================================================================
if (! app()->runningInConsole()) {
    Auth::routes(['verify' => setting('email_verification')]);
} else {
    Auth::routes(['verify' => false]);
}

// Email Verification
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    if (authUser()->role == 'company') {
        return redirect()->route('company.dashboard', ['verified' => true]);
    } else {
        return redirect()->route('candidate.dashboard', ['verified' => true]);
    }
})->middleware(['auth', 'signed'])->name('verification.verify');

// Email Verification Update
Route::get('/email/verify/update/{id}/{newEmail}', function (EmailVerificationUpdateRequest $request, $id, $newEmail) {
    if (! $request->hasValidSignature()) {
        abort(401);
    }
    $request->fulfill($newEmail);

    if (authUser()->role == 'company') {
        return redirect()->route('company.dashboard', ['verified' => true]);
    } else {
        return redirect()->route('candidate.dashboard', ['verified' => true]);
    }
})->middleware(['auth', 'signed'])->name('email.verification.update.verify');

// Social Authentication
Route::controller(SocialLoginController::class)->group(function () {
    Route::post('/auth/social/register', 'register')->name('social.register');
    Route::get('/auth/{provider}/redirect', 'redirect')->name('social.login');
    Route::get('/auth/{provider}/callback', 'callback');
});

// Auth Pages
// Route::view('/register', 'frontend.auth.register');
// Route::view('/login', 'frontend.auth.login')->name('login');

Route::view('/verify', 'frontend.auth.verify');
Route::view('/forget-password', 'frontend.auth.forget-password');
