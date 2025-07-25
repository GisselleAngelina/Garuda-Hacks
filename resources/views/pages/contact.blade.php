<x-layout>
    <x-slot:heading>Kumpulan Ebook Cerita Rakyat</x-slot:heading>

    <div class="p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Card 1 --}}
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('assets/img/TimunMas.jpg') }}" alt="Timun Mas" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Timun Mas</h2>
                    <p class="text-gray-600 text-sm mb-4">Cerita rakyat dari berbagai daerah.</p>
                    <a href="/ebook/timun-mas" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full transition duration-200 ease-in-out">Lihat Detail</a>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('assets\img\PesutMahakam.png') }}" alt="Pesut Mahakam" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Pesut Mahakam</h2>
                    <p class="text-gray-600 text-sm mb-4">Cerita unik dari Kalimantan Timur.</p>
                    <a href="/ebook/pesut-mahakam" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full transition duration-200 ease-in-out">Lihat Detail</a>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('assets\img\NenekPakande.png') }}" alt="Nenek" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Nenek Pakande</h2>
                    <p class="text-gray-600 text-sm mb-4">Dongeng menegangkan dari Sulawesi.</p>
                    <a href="/ebook/nenek-pakande" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full transition duration-200 ease-in-out">Lihat Detail</a>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('assets\img\MalinKundang.png') }}" alt="Malin Kundang" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Malin Kundang</h2>
                    <p class="text-gray-600 text-sm mb-4">Legenda anak durhaka dari Sumatera Barat.</p>
                    <a href="/ebook/malin-kundang" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full transition duration-200 ease-in-out">Lihat Detail</a>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('assets\img\IkanDuyung.png') }}" alt="Duyung" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Karupet si Anak Duyung</h2>
                    <p class="text-gray-600 text-sm mb-4">Cerita magis dari pesisir timur Indonesia.</p>
                    <a href="/ebook/karupet-anak-duyung" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full transition duration-200 ease-in-out">Lihat Detail</a>
                </div>
            </div>

            {{-- Card 6 --}}
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('assets\img\Sangkuriang.webp') }}" alt="Sangkuriang" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Sangkuriang</h2>
                    <p class="text-gray-600 text-sm mb-4">Cerita rakyat Sunda yang terkenal.</p>
                    <a href="/ebook/sangkuriang" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full transition duration-200 ease-in-out">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>