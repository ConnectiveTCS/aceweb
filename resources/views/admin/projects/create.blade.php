@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Create New Project</h1>
@endsection

@section('content')
<div class="container mx-auto p-6">
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="company_name" class="block text-gray-700">Company/Individual Name</label>
            <input type="text" name="company_name" id="company_name" class="w-full border-gray-300 rounded mt-1" value="{{ old('company_name') }}" required>
        </div>
        <div class="mb-4">
            <label for="industry" class="block text-gray-700">Industry</label>
            <input type="text" name="industry" id="industry" class="w-full border-gray-300 rounded mt-1" value="{{ old('industry') }}" required>
        </div>
        <div class="mb-4">
            <label for="brief_description" class="block text-gray-700">Brief Description</label>
            <textarea name="brief_description" id="brief_description" class="w-full border-gray-300 rounded mt-1" required>{{ old('brief_description') }}</textarea>
        </div>
        <div class="mb-4">
            <label for="key_objectives" class="block text-gray-700">Key Objectives</label>
            <textarea name="key_objectives" id="key_objectives" class="w-full border-gray-300 rounded mt-1" required>{{ old('key_objectives') }}</textarea>
        </div>
        <div class="mb-4">
            <label for="logo" class="block text-gray-700">Logo (Image)</label>
            <input type="file" name="logo" id="logo" class="w-full border-gray-300 rounded mt-1">
        </div>
        <div class="mb-4">
            <label for="images" class="block text-gray-700">Project Images (select multiple)</label>
            <input type="file" name="images[]" id="images" class="w-full border-gray-300 rounded mt-1" multiple>
        </div>
        <div class="mb-4">
            <label for="website_url" class="block text-gray-700">Website URL</label>
            <input type="url" name="website_url" id="website_url" class="w-full border-gray-300 rounded mt-1" value="{{ old('website_url') }}">
        </div>
        <div class="mb-4">
            <button type="submit" class="px-4 py-2 bg-primary text-white rounded">Create Project</button>
        </div>
    </form>
</div>
@endsection
