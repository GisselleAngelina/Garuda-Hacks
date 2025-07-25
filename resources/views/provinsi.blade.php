<x-layout :hideHeading="true">
  {{-- HEADER --}}
  <div class="h-48 bg-gradient-to-r from-[#FFA74F] via-[#D26A5E] to-[#F9C784]
              flex flex-col justify-center items-center text-white font-inter text-center">
    <h1 class="text-5xl font-bold">{{ $data['title'] }}</h1>
    <p class="mt-2 text-lg">Fakta singkat tentang {{ $data['title'] }}</p>
  </div>

  {{-- KONTEN FAKTA --}}
  <div class="max-w-5xl mx-auto p-8 bg-[#FAF9F6] space-y-16 font-inter">
    <div>
      <h2 class="text-3xl font-semibold mb-6 text-center">Fakta Menarik</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($data['facts'] ?? [] as $fact)
          @php
            $icons = [
              'Populasi' => '1.svg',
              'Luas Wilayah' => '2.svg',
              'Gunung Tertinggi' => '3.svg',
              'Zona Waktu' => '2.svg',
            ];
            $iconFile = $icons[$fact['title']] ?? 'default.svg';
          @endphp
          <div class="bg-white p-6 rounded-lg shadow text-center">
            <div class="flex justify-center mb-4">
              <div class="w-12 h-12 rounded-full bg-[#1B998B] flex items-center justify-center">
                <img src="{{ asset('assets/img/' . $iconFile) }}" alt="{{ $fact['title'] }}" class="w-6 h-6" />
              </div>
            </div>
            <div class="text-gray-800 font-semibold text-lg">{{ $fact['title'] }}</div>
            <div class="text-xl font-bold text-[#1B998B] mt-2">
              {{ $fact['value'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>

    {{-- GALERI BUDAYA --}}
    @if (!empty($data['gallery']))
    <div>
      <h2 class="text-3xl font-semibold mb-6 text-center">Galeri Budaya</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @foreach ($data['gallery'] as $item)
        <div class="bg-white rounded-lg shadow overflow-hidden">
          <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-60 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold">{{ $item['title'] }}</h3>
            <p class="text-gray-600">{{ $item['description'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif
  </div>
</x-layout>
