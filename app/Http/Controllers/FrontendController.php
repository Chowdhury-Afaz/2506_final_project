<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class FrontendController extends Controller
{
    public function homepage()
    {
        $categories = Category::where('status', 1)->get();
        $products = Product::latest()->get();

        return view('frontend.index', compact('categories', 'products'));
    }

    function shop(){
        return view('frontend.shop');
    }

    function contact(){
        return view('frontend.contact');
    }

}
