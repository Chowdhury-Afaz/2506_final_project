<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\HelpController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/help', [HelpController::class, 'index'])->name('help');
