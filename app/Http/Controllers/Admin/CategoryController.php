<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function categories(){
        return view('backend.categories');
    }

    function categoryStore(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'slug' => 'required|max:255',
        'description' => 'nullable',
        'parent' => 'nullable',
    ]);

    // Save data here
}

}
