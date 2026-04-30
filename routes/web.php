<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile/create', [App\Http\Controllers\ProfileCreationController::class, 'create'])
        ->name('profile.create');
    Route::post('/profile/store', [App\Http\Controllers\ProfileCreationController::class, 'store'])
        ->name('profile.store');
});

// Override Fortify's email verification route to redirect to login
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerifyEmailController::class, '__invoke'])
    ->middleware(['throttle:6,1'])
    ->name('verification.verify');

