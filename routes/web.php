<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');
Route::get('/shop', [FrontendController::class,'shop'])->name('shop');
Route::get('/product/{slug}', [FrontendController::class, 'singleProduct'])->name('shop.product');
Route::get('/contact-us', [FrontendController::class,'contact'])->name('contact');

Auth::routes();

Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');




