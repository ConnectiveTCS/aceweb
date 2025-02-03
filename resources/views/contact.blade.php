@extends('layouts.public')

@section('content')
<!-- Contact Hero Section -->
<section class="bg-gray-100 py-20 text-center" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <h1 class="text-5xl font-bold" style="color: #ff3b1d;">Contact Us</h1>
    <p class="mt-4 text-lg text-gray-700">
      We’d love to hear your story. Drop us a line and let’s start a conversation.
    </p>
  </div>
</section>

<!-- Contact Form Section -->
<section class="py-16" data-aos="fade-up" data-aos-delay="200">
  <div class="container mx-auto max-w-3xl px-4">
    <div class="bg-white rounded shadow p-6">
      <form action="{{ url('contact') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="first_name" class="block text-gray-700">First Name</label>
            <input type="text" name="first_name" id="first_name" class="w-full border-gray-300 rounded mt-1 focus:ring focus:ring-primary" required>
          </div>
          <div>
            <label for="last_name" class="block text-gray-700">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="w-full border-gray-300 rounded mt-1 focus:ring focus:ring-primary" required>
          </div>
        </div>
        <div class="mt-4">
          <label for="email" class="block text-gray-700">Email</label>
          <input type="email" name="email" id="email" class="w-full border-gray-300 rounded mt-1 focus:ring focus:ring-primary" required>
        </div>
        <div class="mt-4">
          <label for="phone_number" class="block text-gray-700">Phone Number</label>
          <input type="text" name="phone_number" id="phone_number" class="w-full border-gray-300 rounded mt-1 focus:ring focus:ring-primary">
        </div>
        <div class="mt-4">
          <label for="service" class="block text-gray-700">Service</label>
          <input type="text" name="service" id="service" class="w-full border-gray-300 rounded mt-1 focus:ring focus:ring-primary" required>
        </div>
        <div class="mt-4">
          <label for="message" class="block text-gray-700">Message</label>
          <textarea name="message" id="message" class="w-full border-gray-300 rounded mt-1 focus:ring focus:ring-primary" required></textarea>
        </div>
        <div class="text-center mt-6">
          <button type="submit" class="px-6 py-3 bg-primary text-white rounded shadow hover:bg-primary-dark transition duration-300">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
