<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProduct;
use App\Models\Category;
use App\Traits\Slugable;
use App\Traits\Traits\MediaUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    use Slugable, MediaUploader;

    public function getAllProducts()
    {
        $products = Product::latest()->paginate(15);
        $totalProducts = Product::count();

        return view('backend.products', compact(
            'products',
            'totalProducts'
        ));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();

        return view('backend.products.create', compact('categories'));
    }

    public function store(StoreProduct $request)
    {
        // Featured Image Upload
        $featureImage = $this->uploadImage($request->image, 'products');
        $gallery_images = $this->uploadImage($request->gallery, 'products');

        // Generate Unique Slug
        $slug = $this->uniqueSlug($request->title, Product::class);

        // Save Product
        Product::create([
            'category_id'       => $request->category_id,
            'title'             => $request->title,
            'slug'              => $slug,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'price'             => $request->price,
            'selling_price'     => $request->selling_price,
            'gallery_image'     => json_encode($gallery_images),
            'image'             => $featureImage,
            'meta_title'        => $request->meta_title,
            'meta_keywords'     => $request->meta_keywords,
            'meta_description'  => $request->meta_description,
        ]);

        return redirect()
            ->route('admin.products.all')
            ->with('success', 'Product added successfully.');
    }

    // ==================== EDIT METHOD ====================
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('status', 1)->get();

        return view('backend.products.edit', compact('product', 'categories'));
    }

    // ==================== UPDATE METHOD ====================
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Featured Image Handle
        $featureImage = $product->image;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $featureImage = $this->uploadImage($request->image, 'products');
        }

        // Gallery Images Handle
        $gallery_images = $product->gallery_image;
        if ($request->hasFile('gallery')) {
            $gallery_images = json_encode($this->uploadImage($request->gallery, 'products'));
        }

        // Slug Handle (Check if title changed)
        $slug = $product->slug;
        if ($product->title !== $request->title) {
            $slug = $this->uniqueSlug($request->title, Product::class);
        }

        // Update Product
        $product->update([
            'category_id'       => $request->category_id,
            'title'             => $request->title,
            'slug'              => $slug,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'price'             => $request->price,
            'selling_price'     => $request->selling_price,
            'gallery_image'     => $gallery_images,
            'image'             => $featureImage,
            'meta_title'        => $request->meta_title,
            'meta_keywords'     => $request->meta_keywords,
            'meta_description'  => $request->meta_description,
        ]);

        return redirect()
            ->route('admin.products.all')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete image from storage
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        // Delete product
        $product->delete();

        return redirect()
            ->route('admin.products.all')
            ->with('success', 'Product deleted successfully.');
    }
}