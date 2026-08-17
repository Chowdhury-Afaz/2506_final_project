<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addToCart(Request $request, $id)
    {
        $qty = $request->qty ?? 1;
        
        $customerId  = auth('customer')->id();
        if (Cart::where('customer_id', $customerId)->where('product_id', $id)->exists()) {
            Cart::where('customer_id', $customerId)->where('product_id', $id)->increment('qty', $qty);
        } else {
            Cart::create([
                'customer_id' => auth('customer')->id(),
                'product_id' => $id,
                'qty' => 1,
            ]);
        }


        return back();
    }
}
