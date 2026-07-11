<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

Route::prefix('/products')->name('products.')->controller(ProductController::class)->group(function(){
    Route::get('/', 'getAllProducts')->name('all');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

});

Route::prefix('categories')
    ->controller(CategoryController::class)
    ->name('categories.')
    ->group(function () {

        Route::get('/', 'categories')->name('index');

        Route::post('/store', 'store')->name('store');

        Route::get('/{id}/edit', 'edit')->name('edit');

        Route::put('/{id}', 'update')->name('update');

        Route::delete('/{id}', 'destroy')->name('destroy');

    });
