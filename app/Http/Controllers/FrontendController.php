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

        // search
        if($request->search){
            $query->whereLike('title', "%$request->search%");
        }


        $products = $query->latest()->paginate(9);
        
       
        return view('frontend.shop', compact( 'products','categories'));
    }

    function contact(){
        return view('frontend.contact');
    }

    public function singleProduct($slug)
{
    $product = Product::where('slug', $slug)->firstOrFail();

    $reviews = $product->reviews()
        ->where('status', 'approved')
        ->latest()
        ->get();

    $averageRating = round($reviews->avg('rating'), 1);

    $totalReviews = $reviews->count();

    return view('frontend.iteminfo', compact(
        'product',
        'reviews',
        'averageRating',
        'totalReviews'
    ));
}

    function liveSearch(Request $request){
        // return dd($request->userInput);
        try {
            $products = Product::whereLike('title', "%$request->userInput%")->select('id','title', 'slug', 'image')->take(8)->latest()->get();
            return response()->json([
                'status' => true,
                'products' => $products,
                'message' => 'Products has been fetched'
            ]);
        } catch (\Throwable $th) {
             return response()->json([
                'status' => false,
                'products' => [],
                'message' => 'Something went wrong in the server, try again later!'
            ]);
        }
    }
    function checkout()
    {
        return view('frontend.checkout');
    }

}
