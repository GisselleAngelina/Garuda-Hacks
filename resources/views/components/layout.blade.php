<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $heading ?? 'Nusantara Heritage' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .active-nav {
            border-bottom: 2px solid #FFB627;
        }
    </style>
</head>
<body class="relative bg-cover bg-center min-h-screen" style="background-image: url('/assets/img/bg-kintara.jpg');">

    {{-- Overlay gelap --}}
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    {{-- Navbar --}}
    <nav class="relative z-10 flex justify-between items-center px-8 py-4 bg-white/80 backdrop-blur-md">
        <div class="flex items-center gap-2">
            <img src="/assets/img/logo.png" class="w-6 h-6" alt="Logo">
            <span class="font-semibold text-lg text-emerald-800">Nusantara <span class="text-[#FFB627]">Heritage</span></span>
        </div>
        <div class="flex gap-8 text-sm font-medium">
            <a href="/" class="{{ request()->is('/') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">Beranda</a>
            <a href="/jelajahpulau" class="{{ request()->is('jelajahpulau') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">Tentang Pulau</a>
            <a href="/ebook" class="{{ request()->is('ebook') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">E-Book</a>
            <a href="/video" class="{{ request()->is('ebook') ? 'active-nav text-[#FFB627]' : 'text-gray-700 hover:text-[#FFB627]' }}">Video</a>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative z-10 text-white px-8 mt-20">
        <div class="max-w-3xl">
            <h1 class="text-5xl font-semibold leading-tight text-white drop-shadow-md mb-6">Nusantara Heritage</h1>
            <p class="text-lg text-white/90 mb-8 leading-relaxed drop-shadow-sm">
                Jelajahi kekayaan budaya Indonesia melalui cerita-cerita indah dari setiap pulau di Nusantara
            </p>
            <div class="flex gap-4">
                <a href="#" class="px-6 py-3 rounded-md bg-[#1B998B] text-white hover:bg-[#157f73] transition">Mulai Menjelajah</a>
                <a href="#" class="px-6 py-3 rounded-md bg-[#3D2C29] text-white hover:bg-[#2e1f1c] transition">Baca Cerita</a>
            </div>
        </div>
    </section>

    {{-- Slot isi halaman --}}
    <main class="relative z-10 mt-20">
        <div class="px-8 py-4">
            {{ $slot }}
        </div>
    </main>
</body>
</html>