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

<body
  @if($isHome)
    class="relative bg-cover bg-center min-h-screen"
    style="background-image: url('/assets/img/bg-kintara.png');"
  @else
    class="bg-[#FAF9F6] min-h-screen"
  @endif
>
  {{-- Jika beranda: overlay gelap --}}
  @if($isHome)
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>
  @endif

  {{-- Navbar selalu --}}
  <nav class="relative z-10 flex justify-between items-center px-8 py-4 bg-white/80 backdrop-blur-md">
    <div class="flex items-center gap-2">
      <img src="/assets/img/logo.png" class="w-15 h-10" alt="Logo">
      <!-- <span class="font-semibold text-lg text-emerald-800">
        Kinantara <span class="text-[#FFB627]">(Kisah Nusantara)</span>
      </span> -->
    </div>
    <div class="flex gap-8 text-sm font-medium">
      <a href="/"
         class="{{ request()->is('/') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">
        Beranda
      </a>
      <a href="/about"
         class="{{ request()->is('about') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">
        Jelajah Pulau
      </a>
      <a href="/contact"
         class="{{ request()->is('contact') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">
        E-Book
      </a>
      <a href="#"
         class="text-gray-700 hover:text-[#FFB627]">
        Video
      </a>
    </div>
  </nav>

  {{-- Hero cuma di beranda --}}
  @if($isHome)
    <section class="relative z-10 text-white px-8 mt-20">
      <div class="max-w-3xl">
        <h1 class="text-5xl font-semibold drop-shadow-md mb-6">
          Kisah Nusantara
        </h1>
        <p class="text-lg text-white/90 mb-8 leading-relaxed drop-shadow-sm">
          Jelajahi kekayaan budaya Indonesia melalui cerita-cerita indah dari setiap pulau di Nusantara
        </p>
        <div class="flex gap-4">
          <a href="#"
             class="px-6 py-3 rounded-md bg-[#1B998B] text-white hover:bg-[#157f73] transition">
            Mulai Menjelajah
          </a>
          <a href="#"
             class="px-6 py-3 rounded-md bg-[#3D2C29] text-white hover:bg-[#2e1f1c] transition">
            Baca Cerita
          </a>
        </div>
      </div>
    </section>
  @endif

  {{-- Konten halaman (slot) --}}
  <main class="relative z-10 mt-{{ $isHome ? '20' : '0' }}">
    <div class="px-8 py-4">
      @if(!$isHome && isset($heading))
        <h1 class="text-3xl font-bold text-[#3D2C29] mb-6">{{ $heading }}</h1>
      @endif
      {{ $slot }}
    </div>
  </main>
</body>
<footer class="bg-gradient-to-r from-green-900 via-teal-700 to-blue-600 text-white pt-16 pb-8">
  <div class="text-center max-w-2xl mx-auto px-4 mb-12">
    <h2 class="text-2xl font-bold mb-2">Mulai Petualangan Budaya Anda</h2>
    <p class="text-sm mb-6">
      Jangan biarkan kekayaan budaya Indonesia hilang begitu saja. Mari lestarikan dan bagikan cerita-cerita indah ini untuk generasi mendatang.
    </p>
    <div class="flex justify-center gap-4 flex-wrap">
      <a href="#" class="bg-white text-gray-800 font-medium px-4 py-2 rounded shadow hover:bg-gray-200">
        Jelajahi Cerita
      </a>
      <button disabled class="bg-white/30 text-white px-4 py-2 rounded cursor-not-allowed">
        Cari Berdasarkan Daerah
      </button>
    </div>
  </div>

  <div class="border-t border-white/20 pt-10">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
      <!-- Kolom 1 -->
      <div>
        <h3 class="font-semibold text-lg mb-2 flex items-center gap-2">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a4 4 0 00-5.657 5.657l4.243 4.243a4 4 0 005.657-5.657z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          Nusantara
        </h3>
        <p>Menjelajahi kekayaan budaya Indonesia melalui cerita dan tradisi yang tersebar di seluruh Nusantara.</p>
      </div>

      <!-- Kolom 2 -->
      <div>
        <h3 class="font-semibold text-lg mb-2">Kontak Kami</h3>
        <ul>
          <li>📧 info@nusantara.id</li>
          <li>📞 +62 21 1234 5678</li>
          <li>📍 Jakarta, Indonesia</li>
        </ul>
      </div>

      <!-- Kolom 3 -->
      <div>
        <h3 class="font-semibold text-lg mb-2">Jelajahi</h3>
        <div class="grid grid-cols-2 gap-x-4">
          <ul class="space-y-1">
            <li><a href="#" class="hover:underline">Pulau Jawa</a></li>
            <li><a href="#" class="hover:underline">Kalimantan</a></li>
            <li><a href="#" class="hover:underline">Papua</a></li>
          </ul>
          <ul class="space-y-1">
            <li><a href="#" class="hover:underline">Pulau Sumatra</a></li>
            <li><a href="#" class="hover:underline">Sulawesi</a></li>
            <li><a href="#" class="hover:underline">Semua Cerita</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
</html>
