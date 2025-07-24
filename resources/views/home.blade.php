<x-layout>
  {{-- Hero sudah ada di layout --}}
  {{-- … --}}

  {{-- PETA INTERAKTIF --}}
  <section 
    x-data="mapData()" 
    class="py-16 bg-[#FAF9F6]"
    >
    <div class="text-center mb-8">
        <h2 class="text-2xl font-semibold text-[#3D2C29]">Peta Interaktif Indonesia</h2>
        <p class="text-sm text-gray-600">
        Klik pada pulau untuk menjelajahi cerita dan budaya di tiap provinsi
        </p>
    </div>

    <div class="relative max-w-4xl mx-auto rounded-lg overflow-visible shadow-lg">
        <img src="/assets/img/map.jpg" alt="Peta Indonesia" class="w-full block">

        <!-- Loop titik spot -->
        <template x-for="(spot, i) in spots" :key="i">
        <div 
            class="absolute" 
            :style="`top: ${spot.top}; left: ${spot.left};`"
        >
            <!-- Titik Pulau -->
            <button 
                @click="selected = (selected === i ? null : i)" 
                class="w-5 h-5 bg-emerald-800 rounded-full border-2 border-white shadow
                        transform transition-transform duration-200
                        hover:scale-125
                        hover:bg-emerald-600
                        animate-pulse hover:animate-none">
            </button>

            <!-- Popup Daftar Provinsi -->
            <div 
            x-show="selected === i" 
            x-transition 
            @click.away="selected = null"
            class="absolute z-20 mt-2 w-48 bg-white rounded-lg p-4 shadow-lg text-sm text-gray-800"
            :class="spot.tooltipPos === 'left' 
                        ? '-translate-x-full left-0' 
                        : 'translate-x-0 left-0'"
            >
            <!-- Judul Pulau -->
            <h3 class="font-semibold mb-2" x-text="spot.name"></h3>
            
            <!-- Daftar Provinsi -->
            <ul class="space-y-1">
                <template x-for="prov in spot.provinces" :key="prov.slug">
                <li>
                    <a 
                    :href="`/provinsi/${prov.slug}`" 
                    x-text="prov.name"
                    class="text-[#1B998B] hover:underline"
                    ></a>
                </li>
                </template>
            </ul>
            </div>
        </div>
        </template>
    </div>
    </section>


  

</x-layout>

<script>
function mapData() {
  return {
    selected: null,
    spots: [
      {
        name: 'Sumatra',
        top: '29%', left: '14%', tooltipPos: 'right',
        provinces: [
          { name: 'Aceh',               slug: 'aceh' },
          { name: 'Sumatera Utara',     slug: 'sumatera-utara' },
          { name: 'Sumatera Barat',     slug: 'sumatera-barat' },
          { name: 'Riau',               slug: 'riau' },
          { name: 'Jambi',              slug: 'jambi' },
        ]
      },
      {
        name: 'Jawa',
        top: '70%', left: '38%', tooltipPos: 'right',
        provinces: [
          { name: 'DKI Jakarta',        slug: 'dki-jakarta' },
          { name: 'Jawa Barat',         slug: 'jawa-barat' },
          { name: 'Jawa Tengah',        slug: 'jawa-tengah' },
          { name: 'DI Yogyakarta',      slug: 'diyogyakarta' },
          { name: 'Jawa Timur',         slug: 'jawa-timur' },
        ]
      },
      {
        name: 'Kalimantan',
        top: '40%', left: '45%', tooltipPos: 'right',
        provinces: [
          { name: 'Kalimantan Barat',   slug: 'kalimantan-barat' },
          { name: 'Kalimantan Tengah',  slug: 'kalimantan-tengah' },
          { name: 'Kalimantan Selatan', slug: 'kalimantan-selatan' },
          { name: 'Kalimantan Timur',   slug: 'kalimantan-timur' },
          { name: 'Kalimantan Utara',   slug: 'kalimantan-utara' },
        ]
      },
      {
        name: 'Sulawesi',
        top: '42%', left: '58%', tooltipPos: 'right',
        provinces: [
          { name: 'Sulawesi Utara',     slug: 'sulawesi-utara' },
          { name: 'Sulawesi Tengah',    slug: 'sulawesi-tengah' },
          { name: 'Sulawesi Selatan',   slug: 'sulawesi-selatan' },
          { name: 'Sulawesi Tenggara',  slug: 'sulawesi-tenggara' },
          { name: 'Sulawesi Barat',     slug: 'sulawesi-barat' },
        ]
      },
      {
        name: 'Papua',
        top: '46%', left: '77%', tooltipPos: 'right',
        provinces: [
          { name: 'Papua',              slug: 'papua' },
          { name: 'Papua Barat',        slug: 'papua-barat' },
          { name: 'Papua Selatan',      slug: 'papua-selatan' },
          { name: 'Papua Tengah',       slug: 'papua-tengah' },
          { name: 'Papua Barat Daya',   slug: 'papua-barat-daya' },
        ]
      },
    ]
  }
}
</script>
