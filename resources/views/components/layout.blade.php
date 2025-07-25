<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{ $heading ?? 'Kinantara' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .active-nav {
      border-bottom: 2px solid #FFB627;
    }
  </style>
</head>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- Cek apakah ini beranda --}}
@php $isHome = request()->is('/'); @endphp

<body class="bg-[#FAF9F6] min-h-screen">
  {{-- NAVBAR: hanya ditampilkan setelah hero --}}
  <nav class="relative z-10 flex justify-between items-center px-8 py-4 bg-white/80 backdrop-blur-md">
    <div class="flex items-center gap-2">
      <img src="/assets/img/logo.png" class="w-15 h-10" alt="Logo">
    </div>
    <div class="flex gap-8 text-sm font-medium">
      <a href="/" class="{{ request()->is('/') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">
        Beranda
      </a>
      <a href="#peta" class="text-gray-700 hover:text-[#FFB627]">Jelajah Pulau</a>
      <a href="/contact" class="{{ request()->is('contact') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">
        E-Book
      </a>
      <a href="#" class="text-gray-700 hover:text-[#FFB627]">Video</a>
    </div>
  </nav>
  {{-- HERO dengan background image (khusus home) --}}
  @if($isHome)
    <section 
      class="relative bg-cover bg-center text-white min-h-screen flex items-center px-8"
      style="background-image: url('/assets/img/bg-kintara.png');"
    >
      <div class="absolute inset-0 bg-white bg-opacity-50 z-0"></div>
      <div class="relative z-10 max-w-3xl">
        <h1 class="text-5xl font-semibold drop-shadow-md mb-6">Kisah Nusantara</h1>
        <p class="text-lg text-white/90 mb-8 leading-relaxed drop-shadow-sm">
          Jelajahi kekayaan budaya Indonesia melalui cerita-cerita indah dari setiap pulau di Nusantara
        </p>
        <div class="flex gap-4">
          <a href="#" class="px-6 py-3 rounded-md bg-[#1B998B] text-white hover:bg-[#157f73] transition">
            Mulai Menjelajah
          </a>
          <a href="#" class="px-6 py-3 rounded-md bg-[#3D2C29] text-white hover:bg-[#2e1f1c] transition">
            Baca Cerita
          </a>
        </div>
      </div>
    </section>
  @endif

  <section id="peta" class="my-12">
  {{-- MAIN CONTENT (peta, konten dinamis) --}}
    <main class="relative z-10 mt-8">
      <div class="px-8 py-4">
        @if(!$isHome && isset($heading))
          <h1 class="text-3xl font-bold text-[#3D2C29] mb-6">{{ $heading }}</h1>
        @endif
        {{ $slot }}
      </div>
    </main>
  </section>
</body>
<footer class="bg-gradient-to-r from-green-900 via-teal-700 to-blue-600 text-white px-6 py-10">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-sm text-center">
    
    <!-- Kolom 1: Tagline -->
    <div>
      <h2 class="text-xl font-semibold mb-2">Tagline</h2>
      <p>
        “Explore the Stories. Keep the Culture Alive.”
      </p>
    </div>

    <!-- Kolom 2: Deskripsi Singkat -->
    <div>
      <h2 class="text-xl font-semibold mb-2">Kintara</h2>
      <p>
        Platform untuk menjelajahi dan melestarikan cerita serta tradisi budaya Indonesia dari berbagai daerah.
      </p>
    </div>

    <!-- Kolom 3: Kontak -->
    <div>
      <h2 class="text-xl font-semibold mb-2">Kontak</h2>
      <ul class="space-y-1">
        <li>📧 info@kintara.id</li>
        <li>📍 Jakarta, Indonesia</li>
      </ul>
    </div>
    
  </div>
</footer>


</html>
