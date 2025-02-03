@extends('layouts.public')

@section('content')
<!-- Projects Hero Section -->
<section class="bg-gray-100 py-20 text-center" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <h1 class="text-5xl font-bold" style="color: #ff3b1d;">Our Projects</h1>
    <p class="mt-4 text-lg text-gray-700">
      Explore our portfolio of digital creations, each a testament to our craftsmanship.
    </p>
  </div>
</section>

<!-- Projects Listing Section (Bento Box Layout) -->
<section class="py-16" data-aos="fade-up" data-aos-delay="200">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @forelse($projects as $index => $project)
        <div class="bg-white rounded shadow overflow-hidden transform transition hover:scale-105"
             data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
          @if($project->logo)
            <img src="{{ asset('storage/' . $project->logo) }}" alt="Project Image" class="w-full h-48 object-cover">
          @else
            <img src="https://via.placeholder.com/600x400?text=Project+Image" alt="Project Image" class="w-full h-48 object-cover">
          @endif
          <div class="p-4">
            <h2 class="text-xl font-bold mb-2">{{ $project->company_name }}</h2>
            <p class="text-gray-600 mb-4">{{ Str::limit($project->brief_description, 80) }}</p>
            <a href="{{ route('project.details', $project->id) }}"
               class="inline-block px-4 py-2 bg-primary text-white rounded shadow hover:bg-primary-dark transition">
              View Details
            </a>
          </div>
        </div>
      @empty
        <p class="text-center text-gray-600 col-span-full">No projects to display.</p>
      @endforelse
    </div>
  </div>
</section>
@endsection
