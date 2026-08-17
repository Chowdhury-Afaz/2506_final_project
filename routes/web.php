<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\ReviewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');

Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');

Route::get('/product/{slug}', [FrontendController::class, 'singleProduct'])->name('shop.product');

Route::get('/product-search', [FrontendController::class, 'liveSearch'])->name('shop.product.live');

Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');

Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');

Auth::routes();

// Product Edit
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');

// Review Store
Route::post('/review/store', [ReviewController::class, 'store'])
    ->middleware('auth')
    ->name('review.store');


require __DIR__.'/User.php';