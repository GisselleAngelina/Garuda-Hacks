<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

// halaman pulau
Route::get('/provinsi/{slug}', function($slug){
    // 1) Siapkan data semua provinsi dalam array (bisa Anda pindahkan ke file config atau Model nanti)
    $provinsiData = [
      // Sumatra
      'aceh'               => ['title'=>'Aceh','population'=>'5,3 juta','area'=>'57.956 km²'],
      'sumatera-utara'     => ['title'=>'Sumatera Utara','population'=>'14,8 juta','area'=>'72.981 km²'],
      // ... tambahkan semua provinsi Sumatra ...
      
      // Jawa
      'dki-jakarta'        => ['title'=>'DKI Jakarta','population'=>'10,6 juta','area'=>'662 km²'],
      'jawa-barat'         => ['title'=>'Jawa Barat','population'=>'48,3 juta','area'=>'35.377 km²'],
      // ... dll ...
      
      // Kalimantan
      'kalimantan-barat'   => ['title'=>'Kalimantan Barat','population'=>'5,4 juta','area'=>'147.307 km²'],
      // ... dll ...
      
      // Sulawesi
      'sulawesi-utara'     => ['title'=>'Sulawesi Utara','population'=>'2,5 juta','area'=>'13.852 km²'],
      // ... dll ...
      
      // Papua
      'papua'              => ['title'=>'Papua','population'=>'3,5 juta','area'=>'319.036 km²'],
      // ... dll ...
    ];

    // 2) Ambil data berdasarkan slug, atau 404 jika tidak ada
    $data = $provinsiData[$slug] ?? abort(404);

    // 3) Kembalikan view 'provinsi' dengan variabel $data
    return view('provinsi', ['data' => $data]);
});