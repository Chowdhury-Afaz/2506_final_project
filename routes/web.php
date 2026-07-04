<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');
Route::get('/contact-us', [FrontendController::class,'contact'])->name('contact');
Auth::routes();


Route::get('/products', [FrontendController::class, 'products'])->name('products');



