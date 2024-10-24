<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
  public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:1000',
            'product_id' => 'required|integer', // Make sure you validate the product ID if applicable
        ]);

        // Create new review
        Review::create([
            'product_id' => $request->product_id,
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }


 public function index()
    {
        // Fetch paginated reviews, showing 5 reviews per page
        $reviews = Review::orderBy('created_at', 'desc')->paginate(5);

        return view('review', compact('reviews'));
    }

   
}