<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class FrontendController extends Controller
{
    public function homepage()
    {
        $categories = Category::where('status', 1)->take(10)->latest()->get(); 
        $products = Product::latest()->take(25)->get();
        
        return view('frontend.index', compact('categories', 'products'));
    }

    function shop(Request $request){
        
        $categories = Category::where('status', 1)->get();
        // has Category
        $query = Product::query();
        if($request->category){
            $query->whereHas('category', function($q) use ($request){
                $q->where('slug', $request->category);
            });
        }


        $products = $query->latest()->paginate(9);
        
       
        return view('frontend.shop', compact( 'products','categories'));
    }

    function contact(){
        return view('frontend.contact');
    }

    function singleProduct ($slug){
        $product = Product::with('category')->where('slug', $slug)->first();
        
        return view('frontend.iteminfo', compact('product'));
    }

}
