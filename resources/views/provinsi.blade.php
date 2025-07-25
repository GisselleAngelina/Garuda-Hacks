<x-layout :heading="$data['title']">
  {{-- HEADER --}}
  <div class="h-48 bg-gradient-to-r from-[#1B998B] to-[#FFB627]
              flex flex-col justify-center items-center text-white">
    <h1 class="text-4xl font-bold">{{ $data['title'] }}</h1>
    <p class="mt-2">Fakta singkat tentang {{ $data['title'] }}</p>
  </div>

  {{-- KONTEN FAKTA --}}
  <div class="max-w-5xl mx-auto p-8 bg-[#FAF9F6] space-y-8">
    <div>
      <h2 class="text-2xl font-semibold mb-4">Fakta Menarik</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        {{-- Kartu Populasi --}}
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <div class="text-gray-500">Populasi</div>
          <div class="text-xl font-bold text-[#1B998B] mt-2">
            {{ $data['population'] }}
          </div>
        </div>
        {{-- Kartu Luas --}}
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <div class="text-gray-500">Luas Wilayah</div>
          <div class="text-xl font-bold text-[#1B998B] mt-2">
            {{ $data['area'] }}
          </div>
        </div>
        {{-- Tambahkan kartu fakta lain jika ada… --}}
      </div>
    </div>
  </div>
</x-layout>
