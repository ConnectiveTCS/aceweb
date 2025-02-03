@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Create New Review</h1>
@endsection

@section('content')
<div class="container mx-auto p-6">
    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="project_id" class="block text-gray-700">Project</label>
            <select name="project_id" id="project_id" class="w-full border-gray-300 rounded mt-1" required>
                <option value="">-- Select Project --</option>
                @foreach($projects as $project)
                    <option value="{{ $project->id }}" {{ old('project_id') == $project->id ? 'selected' : '' }}>
                        {{ $project->company_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="reviewer_name" class="block text-gray-700">Reviewer Name</label>
            <input type="text" name="reviewer_name" id="reviewer_name" class="w-full border-gray-300 rounded mt-1" value="{{ old('reviewer_name') }}" required>
        </div>
        <div class="mb-4">
            <label for="review_message" class="block text-gray-700">Review Message</label>
            <textarea name="review_message" id="review_message" class="w-full border-gray-300 rounded mt-1" required>{{ old('review_message') }}</textarea>
        </div>
        <div class="mb-4">
            <label for="rating" class="block text-gray-700">Rating (1-5)</label>
            <input type="number" name="rating" id="rating" class="w-full border-gray-300 rounded mt-1" value="{{ old('rating') }}" min="1" max="5" required>
        </div>
        <div class="mb-4">
            <label for="google_review_link" class="block text-gray-700">Google Review Link</label>
            <input type="url" name="google_review_link" id="google_review_link" class="w-full border-gray-300 rounded mt-1" value="{{ old('google_review_link') }}">
        </div>
        <div class="mb-4">
            <label for="profile_picture" class="block text-gray-700">Profile Picture</label>
            <input type="file" name="profile_picture" id="profile_picture" class="w-full border-gray-300 rounded mt-1">
        </div>
        <div class="mb-4">
            <button type="submit" class="px-4 py-2 bg-primary text-white rounded">Create Review</button>
        </div>
    </form>
</div>
@endsection
