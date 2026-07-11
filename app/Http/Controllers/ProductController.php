<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getAllProducts(){
        return view('backend.products');
    }

    function create(){
        return view('backend.products.create');
    }


    function store(StoreProduct $request){
        // image
        // Store
        $featureImage = $request->hasFile('image') ? $request->image->store('products', 'public') : null;
        dd($featureImage);


        // Product::create($request->all());
        return back();
    }
}
