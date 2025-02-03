<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Web Agency') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Google Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- AOS Animation CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <!-- Alpine.js for interactivity -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-sans antialiased">
  <!-- Public Header with Responsive Mobile Navigation -->
  <header x-data="{ open: false }" class="bg-white shadow" data-aos="fade-down">
    <div class="container mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
      <a href="{{ url('/') }}" class="text-2xl font-bold" style="color: #ff3b1d;">Ace Web Design</a>
      <!-- Desktop Navigation -->
      <nav class="hidden md:flex space-x-4 gap-3">
        <a href="{{ url('/') }}" class="text-gray-700 hover:text-primary">Home</a>
        <a href="{{ url('about') }}" class="text-gray-700 hover:text-primary">About</a>
        <a href="{{ url('projects') }}" class="text-gray-700 hover:text-primary">Projects</a>
        <a href="{{ url('contact') }}" class="text-gray-700 hover:text-primary">Contact</a>
      </nav>
      <!-- Mobile Hamburger Button -->
      <button @click="open = !open" class="md:hidden focus:outline-none">
        <span class="material-icons text-3xl">menu</span>
      </button>
    </div>
    <!-- Mobile Navigation Menu -->
    <div x-show="open" @click.away="open = false" class="md:hidden">
      <nav class="px-4 pb-4 space-y-2">
        <a href="{{ url('/') }}" class="block text-gray-700 hover:text-primary">Home</a>
        <a href="{{ url('about') }}" class="block text-gray-700 hover:text-primary">About</a>
        <a href="{{ url('projects') }}" class="block text-gray-700 hover:text-primary">Projects</a>
        <a href="{{ url('contact') }}" class="block text-gray-700 hover:text-primary">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-200 py-6 mt-16" data-aos="fade-up">
    <div class="container mx-auto text-center px-4">
      <p class="text-gray-700">&copy; {{ date('Y') }} Web Agency. All rights reserved.</p>
    </div>
  </footer>

  <!-- AOS Animation JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // Animation duration in ms
      once: true     // Only animate once while scrolling down
    });
  </script>
</body>
</html>
