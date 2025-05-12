<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;


Route::get('/index', function () {
    return view('index'); 
})->name('index');

Route::get('/about-country', function () {
    return view('about-country'); 
})->name('about-country');

Route::get('/about-university', function () {
    return view('about-university'); 
})->name('about-university');

Route::get('/gallery', function () {
    return view('gallery'); 
})->name('gallery');

Route::get('/subjects', function () {
    return view('subjects'); 
})->name('subjects');


Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->name('auth.login');

Route::post('/', [AuthenticatedSessionController::class, 'store']);

Route::get('/edit', function () {
    return view('profile.edit'); 
})->name('profile.edit');


// Route to view profile content
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/auth/password', [PasswordController::class, 'showChangePasswordForm'])
    ->name('auth.update-password');

Route::post('/auth/password', [PasswordController::class, 'updatePassword'])->name('updatePassword');


Route::get('/auth/register', [RegisteredUserController::class, 'showRegistrationForm'])->name('auth.register');
Route::post('/auth/register', [RegisteredUserController::class, 'store'])->name('store');


require __DIR__.'/auth.php';
