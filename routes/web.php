<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');
Route::get('/contact-us', [FrontendController::class,'shop'])->name('contact');
Route::get('/shop', [FrontendController::class,'shop'])->name('shop');

Auth::routes();





