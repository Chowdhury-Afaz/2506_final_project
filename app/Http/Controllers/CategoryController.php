<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function dashboard(){
        return view('backend.category');
    }
}
