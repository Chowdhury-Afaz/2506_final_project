<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

Route::prefix('/products')->name('products.')->controller(ProductController::class)->group(function(){
    Route::get('/', 'getAllProducts')->name('all');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::delete('/{id}', 'destroy')->name('destroy');

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

 Route::prefix('/reviews')
    ->name('reviews.')
    ->controller(ReviewController::class)
    ->group(function () {

        Route::get('/', 'index')->name('index');

        Route::get('/{id}/approve', 'approve')->name('approve');

        Route::get('/{id}/delete', 'destroy')->name('delete');

    });

Route::prefix('/orders')
    ->controller(OrderController::class)
    ->group(function () {

        Route::get('/', 'index')->name('orders');

        Route::get('/show', 'show')
        ->name('orders.show');

        Route::put('/{id}/status', 'updateStatus')
            ->name('orders.status.update');

        Route::delete('/{id}', 'destroy')
            ->name('orders.destroy');

    });