<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/product', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

// Category Routes
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');

Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');