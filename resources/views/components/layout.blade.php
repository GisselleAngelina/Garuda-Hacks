<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{ $heading ?? 'Kintara' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .active-nav {
      border-bottom: 2px solid #FFA74F;
    }
  </style>
</head>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- Cek apakah ini beranda --}}
@php $isHome = request()->is('/'); @endphp

<body class="bg-[#FFFDF8] text-[#3A3A3A] min-h-screen">
  {{-- NAVBAR: hanya ditampilkan setelah hero --}}
  <nav class="relative z-10 flex justify-between items-center px-8 py-4 bg-[#FFEAD5]/90 backdrop-blur-md">
    <div class="flex items-center gap-2">
      <img src="/assets/img/logo.png" class="w-30 h-16" alt="Logo">
    </div>
    <div class="flex gap-8 text-lg font-medium">
      <a href="/" class="{{ request()->is('/') ? 'active-nav text-[#D26A5E]' : 'text-[#3A3A3A] hover:text-[#FFA74F]' }}">
        Beranda
      </a>
      <a href="#peta" class="text-gray-800 hover:text-[#FFB627]">Jelajah Pulau</a>
      <a href="/contact" class="{{ request()->is('contact') ? 'active-nav text-[#D26A5E]' : 'text-gray-700 hover:text-[#FFB627]' }}">
        E-Book
      </a>
      <a href="#" class="text-gray-800 hover:text-[#FFB627]">Video</a>
    </div>
  </nav>
  {{-- HERO dengan background image (khusus home) --}}
  @if($isHome)
    <section 
      class="relative bg-cover bg-center min-h-screen flex items-center px-8 py-20 text-white"
      style="background-image: url('/assets/img/bg-kintara.png');"
    >
      <div class="absolute inset-0 bg-[#3A3A3A]/60 backdrop-brightness-75"></div>
      <div class="relative z-10 max-w-3xl">
        <h1 class="text-9xl font-bold mb-6 drop-shadow-lg tracking-wide bg-gradient-to-r from-orange-400 to-red-500 text-transparent bg-clip-text animate-pulse">
          Kintara
        </h1>
        <p class="text-4xl text-white/90 mb-8 leading-relaxed drop-shadow-sm">
          “Explore the Stories. Keep the Culture Alive.”
        </p>
        <p class="text-2xl text-white/90 mb-8 leading-relaxed drop-shadow-sm">
          Platform untuk menjelajahi dan melestarikan cerita serta tradisi budaya Indonesia dari berbagai daerah.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#peta" class="px-6 py-3 rounded-md bg-[#FFA74F] text-white shadow-lg hover:bg-[#e08b3c] transition duration-200 font-medium">
            Mulai Menjelajah
          </a>
          <a href="/contact" class="px-6 py-3 rounded-md bg-[#D26A5E] text-white shadow-lg hover:bg-[#bb5045] transition duration-200 font-medium">
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
  
  @if($isHome)
  <section id="koleksi" class="py-16 px-8 bg-[#FFA74F]/50">
    <div class="max-w-6xl mx-auto text-center mb-12">
      <h2 class="text-4xl font-bold text-[#3A3A3A] mb-4">Koleksi Cerita Pilihan</h2>
      <p class="text-lg text-[#3A3A3A]/80">Cerita rakyat dari berbagai daerah.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-[1.02] transition duration-300">
        <img src="/assets/img/Sangkuriang.jpg" class="w-full h-48 object-cover" alt="Cerita">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Sangkuriang</h3>
          <p class="text-gray-600 text-sm mb-4">Cerita rakyat dari berbagai daerah.</p>
          <!-- <a href="/ebook/tangkuban-perahu" class="bg-[#FFA74F] hover:bg-[#e08b3c] text-white px-4 py-2 rounded-full text-sm font-medium transition">Lihat Detail</a> -->
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-[1.02] transition duration-300">
        <img src="/assets/img/MalinKundang.jpg" class="w-full h-48 object-cover" alt="Cerita">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Malin Kundang</h3>
          <p class="text-gray-600 text-sm mb-4">Cerita rakyat dari berbagai daerah.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-[1.02] transition duration-300">
        <img src="/assets/img/TimunMas.jpg" class="w-full h-48 object-cover" alt="Cerita">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Timun Mas</h3>
          <p class="text-gray-600 text-sm mb-4">Cerita kepahlawanan dari Jawa Tengah.</p>
          <!-- <a href="/ebook/timun-mas" class="bg-[#FFA74F] hover:bg-[#e08b3c] text-white px-4 py-2 rounded-full text-sm font-medium transition">Lihat Detail</a> -->
        </div>
      </div>
    </div>

    <!-- Tombol CTA -->
    <div class="text-center mt-12">
      <a href="/contact" class="px-8 py-3 rounded-md bg-[#D26A5E] text-white hover:bg-[#bb5045] font-semibold shadow-md transition">
        Jelajahi Koleksi Lengkap
      </a>
    </div>
  </section>
@endif

</body>
<footer class="bg-gradient-to-r from-[#FFA74F] via-[#F9C784] to-[#D26A5E] text-[##3A3A3A] px-6 py-12">
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
