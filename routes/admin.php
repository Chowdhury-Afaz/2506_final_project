<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/products', [AdminDashboardController::class, 'products'])->name('products');
Route::get('/categories', [AdminDashboardController::class, 'categories'])->name('categories');
