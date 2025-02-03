@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Admin Dashboard</h1>
@endsection

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Admin Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Manage Projects -->
        <div class="p-6 border rounded shadow hover:shadow-lg">
            <a href="{{ route('projects.index') }}" class="text-xl font-semibold" style="color: #ff3b1d;">
                Manage Projects
            </a>
            <p class="mt-2 text-sm text-gray-600">Add, update, or delete projects and view details.</p>
        </div>
        <!-- Manage Reviews -->
        <div class="p-6 border rounded shadow hover:shadow-lg">
            <a href="{{ route('reviews.index') }}" class="text-xl font-semibold" style="color: #ff3b1d;">
                Manage Reviews
            </a>
            <p class="mt-2 text-sm text-gray-600">View and moderate reviews associated with projects.</p>
        </div>
        <!-- Manage Profile -->
        <div class="p-6 border rounded shadow hover:shadow-lg">
            <a href="{{ route('profile.edit') }}" class="text-xl font-semibold" style="color: #ff3b1d;">
                Edit Profile
            </a>
            <p class="mt-2 text-sm text-gray-600">Update your profile details.</p>
        </div>
    </div>
</div>
@endsection
