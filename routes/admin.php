<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
Route::controller(CategoryController::class)->name('category.')->group(function () {
    Route::get('/category', 'dashboard')->name('index');
});
