# 🌺 Kintara Web — Cerita Kita, Budaya Kita

*Kintara Web* adalah platform digital interaktif yang menghadirkan kembali cerita rakyat dan kekayaan budaya Indonesia kepada generasi muda dalam format yang modern dan menyenangkan. Dibangun dengan cinta untuk budaya tanah air, website ini memudahkan pengguna mengeksplorasi budaya nusantara melalui teks, audio, ilustrasi, dan video.

---

## 🌟 Fitur Utama

- 🎧 Cerita rakyat dalam format *teks, **audio narasi, dan **video ilustratif*
- 🌍 Peta budaya *interaktif* berdasarkan pulau dan provinsi
- 🌿 Fakta menarik seputar provinsi (populasi, wilayah, gunung tertinggi, zona waktu)
- 🌇 Galeri budaya berisi *foto dan deskripsi* budaya lokal
- 🧰 Ilustrasi dan ikon SVG buatan sendiri untuk memperkuat visualisasi budaya

---

## 🚀 Tech Stack

| Komponen     | Teknologi                |
|--------------|---------------------------|
| Frontend     | Laravel Blade, TailwindCSS |
| Backend      | Laravel (PHP)            |
| Database     | (Non-database / JSON Based) |
| Asset Media  | Image (JPG/WEBP), SVG, Audio (MP3), Video (YouTube Embed) |
| Deployment   | Localhost (XAMPP / Laravel Valet) |

---

## 🖼 Tampilan Cuplikan

![Kintara Web Preview](preview.jpg)
Contoh halaman provinsi dengan gradien khas dan konten budaya lokal.

---

## 📁 Struktur Folder


kintara-web/
├── public/
│   └── assets/
│       ├── img/          # Gambar budaya dan ikon SVG
│       ├── audio/        # Narasi audio cerita
│       └── video/        # Embed atau link video YouTube
├── resources/
│   └── views/
│       └── provinsi.blade.php  # Tampilan halaman provinsi
├── routes/
│   └── web.php           # Routing dinamis berdasarkan slug provinsi
├── .env                  # Konfigurasi lokal
├── composer.json         # Dependensi PHP
└── README.md


---

## 🛠 Cara Menjalankan

bash
git clone https://github.com/yourusername/kintara-web.git
cd kintara-web
composer install
cp .env.example .env
php artisan key:generate
php artisan serve

Akses di http://127.0.0.1:8000

---

## 📚 Konten Cerita

Cerita rakyat ditampilkan berdasarkan provinsi dan dapat terdiri dari:

- Judul dan ringkasan cerita
- Narasi audio
- Embed video YouTube
- Ilustrasi gambar

---

## 🚨 Tantangan yang Dihadapi

- Pengumpulan data cerita dan fakta budaya otentik dari berbagai daerah
- Menyesuaikan desain agar tetap ringan namun menarik untuk anak-anak dan remaja
- Integrasi media (audio, video, ilustrasi) dalam struktur Laravel

---

## 🏆 Pencapaian

- Desain responsif yang konsisten untuk semua ukuran layar
- Semua ikon dan ilustrasi adalah orisinal
- Navigasi peta budaya yang intuitif
- Website bisa dijalankan lokal tanpa koneksi database

---

## 📚 Yang Kami Pelajari

- Integrasi media dalam Laravel Blade
- Penggunaan Tailwind untuk styling UI
- Pengelolaan data budaya berbasis statis (non-database)
- Pentingnya menyederhanakan konten budaya agar bisa diakses digital

---

## 📊 Langkah Selanjutnya

- Menambahkan lebih banyak cerita rakyat dari seluruh Indonesia
- Fitur kuis interaktif untuk penguatan nilai budaya
- Dashboard admin untuk input cerita oleh komunitas
- Optimasi untuk mobile dan akses offline

---

## 📄 Lisensi

Lisensi: [MIT License](LICENSE)

---

## 🙏 Terima Kasih

Proyek ini dibuat untuk Garuda Hacks dan ditujukan sebagai upaya pelestarian budaya nasional dengan pendekatan digital. Diharapkan Kintara Web bisa menjadi media edukatif bagi anak-anak Indonesia untuk mencintai cerita rakyat mereka sendiri.

> "Cerita rakyat bukan hanya hiburan, tapi warisan tak tertulis bangsa." 

---