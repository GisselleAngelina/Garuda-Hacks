<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Halaman statis About & Contact
Route::view('/about',   'pages.about');
Route::view('/contact', 'pages.contact');
Route::view('/video', 'pages.video');
Route::get('/ebook/sangkuriang', function () {
    return view('ebook.sangkuriang');
});

// halaman pulau
Route::get('/provinsi/{slug}', function($slug) {
    $slugMapping = [
        'kalimantan-timur' => 'kalimantan',
        'sumatera-barat' => 'sumatera',
        'sulawesi-selatan' => 'sulawesi',
        'papua-barat' => 'papua',
        'jawa-tengah' => 'jawa',
    ];

    $canonicalSlug = $slugMapping[$slug] ?? $slug;

    $provinsiData = [
        'jawa' => [
            'title' => 'Jawa Tengah',
            'description' => 'Jantung budaya dan sejarah Jawa dengan kekayaan warisan yang luar biasa',
            'facts' => [
                ['title' => 'Populasi', 'value' => '36 juta jiwa'],
                ['title' => 'Luas Wilayah', 'value' => '32.548 km²'],
                ['title' => 'Gunung Tertinggi', 'value' => 'Gunung Slamet (3.428 m)'],
                ['title' => 'Zona Waktu', 'value' => 'WIB (UTC+7)'],
            ],
            'gallery' => [
                ['image' => '/assets/img/candi-borobudur.webp', 'title' => 'Candi Borobudur', 'description' => 'Monumen Buddha terbesar di dunia yang dibangun pada abad ke-9'],
                ['image' => '/assets/img/batik.webp', 'title' => 'Batik Tradisional', 'description' => 'Seni tekstil khas Jawa dengan pola-pola yang sarat makna filosofis'],
            ],
            'stories' => [
                [
                    'id' => 1,
                    'title' => 'Legenda Roro Jonggrang',
                    'description' => 'Kisah putri cantik dan asal mula Candi Prambanan',
                    'audioUrl' => 'https://example.com/audio1.mp3',
                    'videoUrl' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'
                ],
                [
                    'id' => 2,
                    'title' => 'Cerita Rakyat Timun Mas',
                    'description' => 'Dongeng klasik tentang keberanian dan kecerdikan',
                    'audioUrl' => 'https://example.com/audio2.mp3',
                    'videoUrl' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'
                ]
            ]
        ],
        'sumatera' => [
            'title' => 'Sumatera Barat',
            'description' => 'Tanah Minangkabau yang kaya tradisi dengan keindahan alam yang menawan',
            'facts' => [
                ['title' => 'Populasi', 'value' => '5.5 juta jiwa'],
                ['title' => 'Luas Wilayah', 'value' => '42.013 km²'],
                ['title' => 'Gunung Tertinggi', 'value' => 'Gunung Kerinci (3.805 m)'],
                ['title' => 'Zona Waktu', 'value' => 'WIB (UTC+7)'],
            ],
            'gallery' => [
                ['image' => '/assets/img/rumah-gadang.webp', 'title' => 'Rumah Gadang', 'description' => 'Rumah adat Minangkabau dengan atap runcing seperti tanduk kerbau'],
                ['image' => '/assets/img/pacu-jawi.jpg', 'title' => 'Pacu Jawi', 'description' => 'Tradisi balap sapi di sawah berlumpur, warisan budaya Tanah Datar'],
            ],
            'stories' => [
                [
                    'id' => 1,
                    'title' => 'Legenda Danau Toba',
                    'description' => 'Kisah tentang ikan mas yang berubah menjadi putri cantik',
                    'audioUrl' => 'https://example.com/audio3.mp3',
                    'videoUrl' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'
                ]
            ]
        ],
        'kalimantan' => [
            'title' => 'Kalimantan Timur',
            'description' => 'Rumah orangutan dan IKN Nusantara dengan hutan tropis yang eksotis',
            'facts' => [
                ['title' => 'Populasi', 'value' => '3.8 juta jiwa'],
                ['title' => 'Luas Wilayah', 'value' => '129.066 km²'],
                ['title' => 'Gunung Tertinggi', 'value' => 'Gunung Raya (2.278 m)'],
                ['title' => 'Zona Waktu', 'value' => 'WITA (UTC+8)'],
            ],
            'gallery' => [
                ['image' => '/assets/img/orang-hutan.jpg', 'title' => 'Orangutan Kalimantan', 'description' => 'Spesies endemik yang kini terancam punah di habitat alaminya'],
                ['image' => '/assets/img/ikn.jpg', 'title' => 'IKN Nusantara', 'description' => 'Ibu kota negara baru yang sedang dibangun dengan konsep sustainable city'],
            ],
            'stories' => [
                [
                    'id' => 1,
                    'title' => 'Legenda Raja Kutai',
                    'description' => 'Kisah kerajaan tertua di Indonesia dan tradisi Erau',
                    'audioUrl' => 'https://example.com/audio4.mp3',
                    'videoUrl' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'
                ]
            ]
        ],
        'sulawesi' => [
            'title' => 'Sulawesi Selatan',
            'description' => 'Tanah Bugis-Makassar dan Toraja dengan keunikan budaya yang memukau',
            'facts' => [
                ['title' => 'Populasi', 'value' => '9.1 juta jiwa'],
                ['title' => 'Luas Wilayah', 'value' => '46.717 km²'],
                ['title' => 'Gunung Tertinggi', 'value' => 'Gunung Rantemario (3.478 m)'],
                ['title' => 'Zona Waktu', 'value' => 'WITA (UTC+8)'],
            ],
            'gallery' => [
                ['image' => '/assets/img/tongkonan.jpg', 'title' => 'Rumah Tongkonan', 'description' => 'Rumah adat Toraja dengan arsitektur perahu terbalik yang unik'],
                ['image' => '/assets/img/rotterdam.jpg', 'title' => 'Benteng Rotterdam', 'description' => 'Peninggalan sejarah Belanda yang kini menjadi museum'],
            ],
            'stories' => [
                [
                    'id' => 1,
                    'title' => 'Legenda La Galigo',
                    'description' => 'Epos terpanjang di dunia dari tradisi Bugis-Makassar',
                    'audioUrl' => 'https://example.com/audio5.mp3',
                    'videoUrl' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'
                ]
            ]
        ],
        'papua' => [
            'title' => 'Papua Barat',
            'description' => 'Surga Raja Ampat dan Cenderawasih dengan kekayaan alam yang menakjubkan',
            'facts' => [
                ['title' => 'Populasi', 'value' => '1.2 juta jiwa'],
                ['title' => 'Luas Wilayah', 'value' => '99.671 km²'],
                ['title' => 'Gunung Tertinggi', 'value' => 'Gunung Arfak (2.955 m)'],
                ['title' => 'Zona Waktu', 'value' => 'WIT (UTC+9)'],
            ],
            'gallery' => [
                ['image' => '/assets/img/raja-ampat.jpg', 'title' => 'Raja Ampat', 'description' => 'Surga bawah laut dengan biodiversitas tertinggi di dunia'],
                ['image' => '/assets/img/burung-cendrawasih.webp', 'title' => 'Burung Cenderawasih', 'description' => 'Burung eksotis endemik Papua yang menjadi simbol keindahan'],
            ],
            'stories' => [
                [
                    'id' => 1,
                    'title' => 'Legenda Manarmakeri',
                    'description' => 'Kisah pahlawan legendaris Papua dan asal mula suku Biak',
                    'audioUrl' => 'https://example.com/audio6.mp3',
                    'videoUrl' => 'https://www.youtube.com/embed/dQw4w9WgXcQ'
                ]
            ]
        ],
    ];

    $data = $provinsiData[$canonicalSlug] ?? abort(404);
    return view('provinsi', ['data' => $data]);
});

Route::get('/ebook/sangkuriang', function () {
    return view('ebook.sangkuriang');
});
Route::get('/ebook/TimunMas', function () {
    return view('ebook.TimunMas');
});

Route::get('/ebook/{judul}', function ($judul) {
    if (view()->exists("ebook.$judul")) {
        return view("ebook.$judul");
    } else {
        abort(404);
    }
});

Route::get('/video/{judul}', function ($judul) {
    if (view()->exists("video.$judul")) {
        return view("video.$judul");
    } else {
        abort(404);
    }
});