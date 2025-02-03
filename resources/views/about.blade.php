@extends('layouts.public')

@section('content')
<!-- About Hero Section with a Portrait Placeholder -->
<section class="bg-gray-100 py-20" data-aos="fade-up">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-4">
    <div>
      <h1 class="text-5xl font-bold" style="color: #ff3b1d;">About Me</h1>
      <p class="mt-4 text-lg text-gray-700">
        I weave stories in code and design. Let’s share a cup of coffee and talk about your vision.
      </p>
    </div>
    <div>
      <img src="https://via.placeholder.com/500x500?text=Portrait" alt="Portrait" class="w-full rounded shadow">
    </div>
  </div>
</section>

<!-- Brief Description Section -->
<section class="py-16" data-aos="fade-up" data-aos-delay="200">
  <div class="container mx-auto max-w-3xl px-4">
    <h2 class="text-3xl font-bold mb-4" style="color: #ff3b1d;">My Journey</h2>
    <p class="text-gray-700 leading-relaxed">
      From humble beginnings to conquering digital realms, I have spent years honing my craft. My passion lies in transforming abstract ideas into stunning digital experiences. Every line of code and every pixel is a chapter in the story of your brand.
    </p>
  </div>
</section>

<!-- Schedule a Coffee Meeting Section -->
<section class="py-16 bg-gray-100 text-center" data-aos="fade-up" data-aos-delay="400">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold mb-4" style="color: #ff3b1d;">Let's Meet</h2>
    <p class="text-gray-700 mb-8">
      Schedule a coffee meeting with me to discuss how we can bring your vision to life.
    </p>
    <a href="mailto:your.email@example.com"
       class="inline-block px-6 py-3 bg-primary text-white rounded shadow hover:bg-primary-dark transition duration-300">
      Schedule a Meeting
    </a>
  </div>
</section>
@endsection
