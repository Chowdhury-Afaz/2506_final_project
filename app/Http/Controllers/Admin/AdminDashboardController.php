<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    function dashboard(){
        return view('backend.index');
    }

    function products(){
        return view('backend.products');
    }

    function categories(){
        return view('backend.categories');
    }
}
