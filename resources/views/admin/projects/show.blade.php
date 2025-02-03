@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold mb-6" style="color: #ff3b1d;">Project Details</h1>
@endsection

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">{{ $project->company_name }}</h2>
        <p><strong>Industry:</strong> {{ $project->industry }}</p>
        <p><strong>Brief Description:</strong> {{ $project->brief_description }}</p>
        <p><strong>Key Objectives:</strong> {{ $project->key_objectives }}</p>
        @if($project->website_url)
            <p><strong>Website:</strong> <a href="{{ $project->website_url }}" target="_blank" class="text-secondary">{{ $project->website_url }}</a></p>
        @endif
        @if($project->logo)
            <div class="mt-4">
                <strong>Logo:</strong>
                <img src="{{ asset('storage/' . $project->logo) }}" alt="Project Logo" class="h-20">
            </div>
        @endif
        @if($project->images)
            <div class="mt-4">
                <strong>Project Images:</strong>
                <div class="grid grid-cols-3 gap-2 mt-2">
                    @foreach($project->images as $img)
                        <img src="{{ asset('storage/' . $img) }}" alt="Project Image" class="h-20">
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    <div class="mt-4">
        <a href="{{ route('projects.index') }}" class="px-4 py-2 bg-secondary text-white rounded">Back to Projects</a>
    </div>
</div>
@endsection
