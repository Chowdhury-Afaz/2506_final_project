<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Store Review
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'title' => 'required|max:255',
            'comment' => 'required',
        ]);

        Review::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'title' => $request->title,
            'comment' => $request->comment,
            'status' => 0,
        ]);

        return back()->with('success', 'Review submitted successfully. Waiting for approval.');
    }

    // Admin Review List
    public function index()
    {
        $reviews = Review::with('product', 'user')->latest()->get();

        return view('admin.reviews.index', compact('reviews'));
    }

    // Approve Review
    public function approve($id)
    {
        $review = Review::findOrFail($id);

        $review->status = 'approved';
        $review->save();

        return back()->with('success', 'Review approved successfully.');
    }

    // Delete Review
    public function destroy($id)
    {
        Review::findOrFail($id)->delete();

        return back()->with('success', 'Review deleted successfully.');
    }
}