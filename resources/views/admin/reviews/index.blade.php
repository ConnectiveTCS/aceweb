@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Manage Reviews</h1>
@endsection

@section('content')
<div class="container mx-auto p-6">
    <div class="mb-4">
        <a href="{{ route('reviews.create') }}" class="px-4 py-2 bg-primary text-white rounded">Create New Review</a>
    </div>
    <table class="min-w-full bg-white shadow rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Project</th>
                <th class="py-2 px-4 border-b">Reviewer Name</th>
                <th class="py-2 px-4 border-b">Rating</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reviews as $review)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $review->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $review->project->company_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $review->reviewer_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $review->rating }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('reviews.show', $review->id) }}" class="text-blue-500 mr-2">View</a>
                        <a href="{{ route('reviews.edit', $review->id) }}" class="text-green-500 mr-2">Edit</a>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="py-4 text-center">No reviews found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
