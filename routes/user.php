<?php

use App\Http\Controllers\Auth\CustomerAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/sign-in', [CustomerAuthController::class, 'showLoginForm'])->name('customer.login');
Route::post('/sign-in', [CustomerAuthController::class, 'login'])->name('customer.login.store');
Route::get('/sign-up', [CustomerAuthController::class, 'showRegistrationForm'])->name('customer.register');
Route::post('/sign-up', [CustomerAuthController::class, 'register'])->name('customer.register.store');