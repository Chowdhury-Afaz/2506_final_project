<?php

use App\Http\Controllers\Auth\CustomerAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserDashboardController;


// Customer Auth Routes

Route::get('/sign-in', [CustomerAuthController::class, 'showLoginForm'])->name('customer.login');
Route::post('/sign-in', [CustomerAuthController::class, 'login'])->name('customer.login.store');
Route::get('/sign-up', [CustomerAuthController::class, 'showRegistrationForm'])->name('customer.register');
Route::post('/sign-up', [CustomerAuthController::class, 'register'])->name('customer.register.store');




/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
|
| Routes related to authenticated customers.
|
*/


Route::prefix('user')
    ->name('user.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Customer Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])
            ->name('dashboard');

        /*
        |--------------------------------------------------------------------------
        | Orders
        |--------------------------------------------------------------------------
        */

        Route::get('/orders', [UserDashboardController::class, 'orders'])
            ->name('orders');    

    });

    
