@extends('layouts.public')

@section('content')
<!-- Hero / CTA Section with Two-Column Layout -->
<section class="bg-gray-100 py-20" data-aos="fade-up">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-8 px-4">
    <div>
      <h1 class="text-5xl font-bold" style="color: #ff3b1d;">Crafting Digital Realms</h1>
      <p class="mt-4 text-lg text-gray-700">
        Every journey begins with a story. Discover our portfolio of digital adventures.
      </p>
      <a href="{{ route('projects.public') }}"
         class="mt-8 inline-block px-6 py-3 bg-primary text-white rounded shadow hover:bg-primary-dark transition duration-300">
        View Our Work
      </a>
    </div>
    <div>
      <img src="https://via.placeholder.com/600x400?text=Hero+Image" alt="Hero Image" class="w-full rounded shadow">
    </div>
  </div>
</section>

<!-- Services Section with Icon Placeholders -->
<section class="py-16" data-aos="fade-up" data-aos-delay="200">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-8" style="color: #ff3b1d;">Our Services</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="p-6 border rounded hover:shadow-lg transition flex flex-col items-center">
        <img src="https://via.placeholder.com/100?text=Dev" alt="Web Development Icon" class="mb-4">
        <h3 class="text-2xl font-semibold mb-2">Web Development</h3>
        <p class="text-center">Building robust and scalable digital architectures that breathe life into your vision.</p>
      </div>
      <div class="p-6 border rounded hover:shadow-lg transition flex flex-col items-center">
        <img src="https://via.placeholder.com/100?text=Design" alt="Web Design Icon" class="mb-4">
        <h3 class="text-2xl font-semibold mb-2">Web Design</h3>
        <p class="text-center">Crafting elegant and intuitive designs that captivate your audience at first glance.</p>
      </div>
      <div class="p-6 border rounded hover:shadow-lg transition flex flex-col items-center">
        <img src="https://via.placeholder.com/100?text=SEO" alt="SEO Icon" class="mb-4">
        <h3 class="text-2xl font-semibold mb-2">SEO Optimization</h3>
        <p class="text-center">Empowering your digital presence through strategies that command attention.</p>
      </div>
      <div class="p-6 border rounded hover:shadow-lg transition flex flex-col items-center">
        <img src="https://via.placeholder.com/100?text=Domain" alt="Domain Hosting Icon" class="mb-4">
        <h3 class="text-2xl font-semibold mb-2">Domain Hosting</h3>
        <p class="text-center">Reliable and secure solutions to ensure your digital home is always accessible.</p>
      </div>
      <div class="p-6 border rounded hover:shadow-lg transition flex flex-col items-center">
        <img src="https://via.placeholder.com/100?text=Hosting" alt="Web Hosting Icon" class="mb-4">
        <h3 class="text-2xl font-semibold mb-2">Web Hosting</h3>
        <p class="text-center">High-performance hosting tailored to support the weight of your digital dreams.</p>
      </div>
    </div>
  </div>
</section>

<!-- How We Bring Your Vision to Life Section with Icon Placeholders -->
<section class="py-16 bg-gray-100" data-aos="fade-up" data-aos-delay="400">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-8" style="color: #ff3b1d;">How We Bring Your Vision to Life</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 text-center">
      <div class="p-4">
        <img src="https://via.placeholder.com/80?text=Discovery" alt="Discovery Icon" class="mx-auto mb-2">
        <h3 class="text-xl font-bold">Discovery</h3>
        <p class="mt-2 text-gray-600">Listening to your dreams.</p>
      </div>
      <div class="p-4">
        <img src="https://via.placeholder.com/80?text=Planning" alt="Planning Icon" class="mx-auto mb-2">
        <h3 class="text-xl font-bold">Planning</h3>
        <p class="mt-2 text-gray-600">Mapping the journey ahead.</p>
      </div>
      <div class="p-4">
        <img src="https://via.placeholder.com/80?text=Design" alt="Design Icon" class="mx-auto mb-2">
        <h3 class="text-xl font-bold">Design</h3>
        <p class="mt-2 text-gray-600">Sketching your digital blueprint.</p>
      </div>
      <div class="p-4">
        <img src="https://via.placeholder.com/80?text=Develop" alt="Develop Icon" class="mx-auto mb-2">
        <h3 class="text-xl font-bold">Develop</h3>
        <p class="mt-2 text-gray-600">Forging the code that builds dreams.</p>
      </div>
      <div class="p-4">
        <img src="https://via.placeholder.com/80?text=Launch" alt="Launch Icon" class="mx-auto mb-2">
        <h3 class="text-xl font-bold">Launch</h3>
        <p class="mt-2 text-gray-600">Unleashing your masterpiece to the world.</p>
      </div>
    </div>
  </div>
</section>

<!-- Final CTA Section -->
<section class="py-16" data-aos="fade-up" data-aos-delay="600">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-4xl font-bold mb-4" style="color: #ff3b1d;">Ready to Begin Your Journey?</h2>
    <a href="{{ route('contact.public') }}"
       class="inline-block px-6 py-3 bg-primary text-white rounded shadow hover:bg-primary-dark transition duration-300">
      Get In Touch
    </a>
  </div>
</section>
@endsection
