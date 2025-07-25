<x-layout :heading="$data['title']">
  <div class="py-12 bg-[#FAF9F6]">
    <div class="max-w-4xl mx-auto text-center mb-8">
      <h2 class="text-3xl font-semibold">{{ $data['title'] }}</h2>
      <p class="text-gray-600">{{ $data['subtitle'] }}</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($data['provinces'] as $prov)
      <a href="{{ url("/provinsi/{$prov['slug']}") }}"
         class="block bg-white p-6 rounded-lg shadow hover:shadow-md transition">
        <div class="font-medium text-lg text-emerald-800">{{ $prov['name'] }}</div>
        <div class="text-sm text-gray-500 mt-1">Klik untuk lihat detail →</div>
      </a>
      @endforeach
    </div>
  </div>
</x-layout>
