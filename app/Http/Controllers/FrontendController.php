<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function homepage(){
        return view('frontend.index');
    }


    function contact(){
        return view('frontend.contact');
    }

    function shop(){
        return view('frontend.shop');
    }
}
