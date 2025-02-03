@extends('layouts.public')

@section('content')
<section class="py-16" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <div class="bg-white rounded shadow overflow-hidden">
      @if($project->logo)
        <img src="{{ asset('storage/' . $project->logo) }}" alt="Project Hero" class="w-full h-64 object-cover">
      @else
        <img src="https://via.placeholder.com/1200x600?text=Project+Hero" alt="Project Hero" class="w-full h-64 object-cover">
      @endif
      <div class="p-6">
        <h1 class="text-4xl font-bold mb-4">{{ $project->company_name }}</h1>
        <p class="mb-2"><strong>Industry:</strong> {{ $project->industry }}</p>
        <p class="mb-2"><strong>Description:</strong> {{ $project->brief_description }}</p>
        <p class="mb-2"><strong>Key Objectives:</strong> {{ $project->key_objectives }}</p>
        @if($project->website_url)
          <p class="mb-2">
            <strong>Website:</strong>
            <a href="{{ $project->website_url }}" target="_blank" class="text-primary">
              {{ $project->website_url }}
            </a>
          </p>
        @endif
        @if($project->images)
          <div class="mt-4 grid grid-cols-2 gap-4">
            @foreach($project->images as $img)
              <img src="{{ asset('storage/' . $img) }}" alt="Project Additional Image" class="w-full h-32 object-cover rounded">
            @endforeach
          </div>
        @endif
      </div>
    </div>
    <div class="mt-6 text-center">
      <a href="{{ route('projects.public') }}"
         class="inline-block px-6 py-2 bg-primary text-white rounded shadow hover:bg-primary-dark transition">
        Back to Projects
      </a>
    </div>
  </div>
</section>
@endsection
