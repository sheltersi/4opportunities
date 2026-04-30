<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

// Override Fortify's registration routes to prevent auto-login
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');



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

