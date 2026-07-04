<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        
        $categories = Category::all();
        $products = Product::latest()->take(8)->get(); // শেষের ৮টা প্রোডাক্ট

    
        return view('frontend.index', compact('categories', 'products'));
    }
}
