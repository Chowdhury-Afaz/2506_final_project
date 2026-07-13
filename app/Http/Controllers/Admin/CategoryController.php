<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::latest()->paginate(15);
        
        return view('backend.categories', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|unique:categories,name',
            'slug'  => 'required|unique:categories,slug',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

$imageName = null;

if ($request->hasFile('image')) {

    $imageName = $request->file('image')
        ->store('categories', 'public');
}

        Category::create([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
            'image' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        $categories = Category::latest()->get();

        return view('backend.category.index', compact('category', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

$imageName = $category->image;

if ($request->hasFile('image')) {

    if ($category->image && Storage::disk('public')->exists($category->image)) {
        Storage::disk('public')->delete($category->image);
    }

    $imageName = $request->file('image')
        ->store('categories', 'public');
}

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imageName,
        ]);

return redirect()
    ->route('admin.categories.index')
    ->with('success', 'Category Updated Successfully!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image && Storage::disk('public')->exists($category->image)) {
    Storage::disk('public')->delete($category->image);
}
        // Database Delete
        $category->delete();

        return redirect()
    ->route('admin.categories.index')
    ->with('success', 'Category Deleted Successfully!');
    }
    
    
}
