<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');

Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');

Route::get('/product/{slug}', [FrontendController::class, 'singleProduct'])->name('shop.product');

Route::get('/product-search', [FrontendController::class, 'liveSearch'])->name('shop.product.live');

Route::get('/cart/{id}', [CartController::class, 'addToCart'])->name('product.cart');

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




// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


require __DIR__ . '/User.php';
