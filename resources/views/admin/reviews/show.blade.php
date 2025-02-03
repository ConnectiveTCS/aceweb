@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Review Details</h1>
@endsection

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Review for: {{ $review->project->company_name }}</h2>
        <p><strong>Reviewer Name:</strong> {{ $review->reviewer_name }}</p>
        <p><strong>Review Message:</strong> {{ $review->review_message }}</p>
        <p><strong>Rating:</strong> {{ $review->rating }}</p>
        @if($review->google_review_link)
            <p><strong>Google Review:</strong> <a href="{{ $review->google_review_link }}" target="_blank" class="text-secondary">{{ $review->google_review_link }}</a></p>
        @endif
        @if($review->profile_picture)
            <div class="mt-4">
                <strong>Profile Picture:</strong>
                <img src="{{ asset('storage/' . $review->profile_picture) }}" alt="Profile Picture" class="h-16">
            </div>
        @endif
    </div>
    <div class="mt-4">
        <a href="{{ route('reviews.index') }}" class="px-4 py-2 bg-secondary text-white rounded">Back to Reviews</a>
    </div>
</div>
@endsection
