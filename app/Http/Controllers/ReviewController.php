<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // List all reviews
    public function index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }

    // Store a new review
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_id'        => 'required|exists:projects,id',
            'reviewer_name'     => 'required|string|max:255',
            'review_message'    => 'required|string',
            'rating'            => 'required|integer|min:1|max:5',
            'google_review_link' => 'nullable|url',
            'profile_picture'   => 'nullable|string|max:255'
        ]);

        $review = Review::create($validated);
        return response()->json($review, 201);
    }

    // Show a specific review
    public function show($id)
    {
        $review = Review::findOrFail($id);
        return response()->json($review);
    }

    // Update an existing review
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());
        return response()->json($review);
    }

    // Delete a review
    public function destroy($id)
    {
        Review::destroy($id);
        return response()->json(null, 204);
    }
}
