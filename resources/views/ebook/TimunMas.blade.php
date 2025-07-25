<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Halaman Buku Cerita Rakyat</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Nunito&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
    h1 {
      font-family: 'Baloo 2', cursive;
    }
    /* Fixed card height and scroll for text */
    #card {
      height: 520px;
      max-width: 640px;
    }
    #page-text {
      height: 140px;
      overflow-y: auto;
      scrollbar-width: thin;
      scrollbar-color: #fbbf24 transparent;
    }
    #page-text::-webkit-scrollbar {
      width: 6px;
    }
    #page-text::-webkit-scrollbar-thumb {
      background-color: #fbbf24;
      border-radius: 3px;
    }
  </style>
</head>
<body class="bg-gradient-to-tr from-yellow-100 via-yellow-50 to-yellow-100 min-h-screen flex items-center justify-center p-6">
  <div
    id="card"
    class="bg-white rounded-3xl shadow-2xl p-6 flex flex-col items-center"
  >
    <h1
      id="book-title"
      class="text-3xl font-bold text-yellow-900 mb-4 text-center leading-tight select-none"
    >
    Timun Mas
    </h1>
    <img
      id="page-image"
      src="https://storage.googleapis.com/a1aa/image/97e5d0de-c65b-46d9-bf29-a1e8bf5bd1e1.jpg"
      alt="Ilustrasi cerita rakyat halaman 1, gambar pemandangan desa tradisional dengan gunung dan sungai di latar belakang, langit cerah dan pepohonan hijau"
      class="rounded-2xl shadow-lg w-full h-64 object-cover mb-6"
      width="360"
      height="256"
    />
    <p
      id="page-text"
      class="text-yellow-900 text-base leading-relaxed px-2 text-justify"
    >
      Ini adalah paragraf pertama dari cerita rakyat yang menceritakan tentang
      asal-usul sebuah desa yang penuh dengan keajaiban dan legenda
      turun-temurun.
    </p>
    <div class="mt-6 w-full flex justify-between">
      <button
        id="prev-btn"
        aria-label="Halaman sebelumnya"
        class="flex items-center justify-center gap-2 w-28 py-2 rounded-full bg-yellow-300 hover:bg-yellow-400 text-yellow-900 font-semibold shadow-md transition disabled:opacity-50 disabled:cursor-not-allowed"
        disabled
      >
        <i class="fas fa-arrow-left text-lg"></i>
        Sebelumnya
      </button>
      <button
        id="next-btn"
        aria-label="Halaman berikutnya"
        class="flex items-center justify-center gap-2 w-28 py-2 rounded-full bg-yellow-400 hover:bg-yellow-500 text-yellow-900 font-semibold shadow-md transition"
      >
        Berikutnya
        <i class="fas fa-arrow-right text-lg"></i>
      </button>
    </div>
  </div>

<script>
  const storyPages = [
  {
    text:
      "Di desa kecil di Jawa Tengah tinggal seorang janda tua bernama Mbok Srini yang merindukan seorang anak. Ia selalu berdoa agar diberkati keturunan sebagai teman hidup di hari tuanya.",
    image: "/assets/img/TimunMas/1.png",
    alt: "Mbok Srini duduk di bangku bambu di depan rumah sederhana, melihat langit senja, wajah penuh harap.",
  },
  {
    text:
      "Suatu malam, dalam mimpinya muncul raksasa hijau (Buta Ijo) yang menawarkan memberikan anak jika Mbok Srini bersedia memenuhinya saat besar nanti. Ia memberikan syarat: pada usia tertentu, anak itu harus diserahkan kembali.",
    image: "/assets/img/TimunMas/2.png",
    alt: "Sosok raksasa hijau menghadap Mbok Srini di hutan impian, raksasa tampak besar dan mengancam.",
  },
  {
    text:
      "Buta Ijo memberikan sebuah biji mentimun ajaib kepada Mbok Srini. Ia diminta menanamnya agar tumbuh buah yang luar biasa. Mbok Srini yang sangat ingin anak akhirnya menyetujui permintaan tersebut.",
    image: "/assets/img/TimunMas/3.png",
    alt: "Mbok Srini memegang biji mentimun sambil berdiri di pekarangan rumahnya.",
  },
  {
    text:
      "Beberapa hari kemudian, tumbuhlah sebuah mentimun besar berwarna keemasan di ladangnya. Buah itu berbeda dari buah pada umumnya karena ukurannya yang sempurna dan bersinar.",
    image: "/assets/img/TimunMas/4.png",
    alt: "Mentimun emas besar di ladang, kilau keemasan, terlihat ajaib.",
  },
  {
    text:
      "Saat dibelah, di dalamnya hadir bayi perempuan yang cantik dan mungil. Mbok Srini sangat bahagia dan menamainya Timun Mas.",
    image: "/assets/img/TimunMas/5.png",
    alt: "Bayi perempuan muncul dari dalam mentimun emas, Mbok Srini tersenyum penuh kebahagiaan.",
  },
  {
    text:
      "Timun Mas tumbuh menjadi gadis yang rajin, cerdas, dan penyayang. Ia membantu Mbok Srini sehari-hari, baik di ladang maupun rumah.",
    image: "/assets/img/TimunMas/6.png",
    alt: "Timun Mas remaja membantu panen dan menyapu halaman rumah.",
  },
  {
    text:
      "Ketika usia Timun Mas mendekati 17 tahun, Buta Ijo muncul kembali menagih janji yang dulu dibuat—ia datang untuk membawa Timun Mas pergi.",
    image: "/assets/img/TimunMas/7.png",
    alt: "Raksasa hijau berdiri di depan rumah, dengan wajah menuntut, Mbok Srini tampak cemas.",
  },
  {
    text:
      "Mbok Srini panik dan memohon waktu kepada raksasa. Ia kemudian pergi ke pertapaan di gunung untuk meminta pertolongan agar Timun Mas bisa selamat.",
    image: "/assets/img/TimunMas/8.png",
    alt: "Mbok Srini berjalan ke gunung berkabut membawa kantong kecil.",
  },
  {
    text:
      "Di pertapaan, ia bertemu pertapa bijak yang memberinya empat bungkusan kecil berisi biji mentimun, jarum, garam, dan terasi, sebagai senjata melawan sang raksasa.",
    image: "/assets/img/TimunMas/9.png",
    alt: "Pertapa tua menyerahkan empat kantong kain kecil kepada Mbok Srini di gua gunung.",
  },
  {
    text:
      "Buto Ijo datang menjemput. Mbok Srini menyuruh Timun Mas segera melarikan diri dengan membawa benda-benda ajaib tadi. Timun Mas pun berlari ke hutan.",
    image: "/assets/img/TimunMas/10.png",
    alt: "Timun Mas berlari ketakutan memasuki hutan, membawa empat bungkusan kain.",
  },
  {
    text:
      "Saat raksasa mengejar semakin dekat, Timun Mas menaburkan biji mentimun ajaib. Seketika tumbuh ladang timun lebat di belakangnya untuk memperlambat Buta Ijo.",
    image: "/assets/img/TimunMas/11.png",
    alt: "Ladang timun menjalar menghentikan raksasa yang berusaha menerobos.",
  },
  {
    text:
      "Raksasa berhasil menerobos ladang itu. Timun Mas kemudian melempar jarum yang berubah menjadi hutan bambu runcing, membuat raksasa terluka tapi masih tetap mengejar.",
    image: "/assets/img/TimunMas/12.png",
    alt: "Pohon bambu tajam tinggi menjulang, Buta Ijo tergores di tubuhnya.",
  },
  {
    text:
      "Timun Mas membuka bungkusan ketiga: garam. Ia menaburnya sehingga muncul danau luas yang harus dilintasi raksasa. Meskipun terhambat, Buta Ijo bisa terus berenang mengejar.",
    image: "/assets/img/TimunMas/13.png",
    alt: "Raksasa berenang melewati danau, Timun Mas berada di tepian.",
  },
  {
    text:
      "Dalam keadaan hampir ditangkap, Timun Mas melempar terasi terakhir yang berubah menjadi lautan lumpur mendidih yang menyedot raksasa ke dasar dan menenggelamkannya untuk selamanya.",
    image: "/assets/img/TimunMas/14.png",
    alt: "Buta Ijo tenggelam di lumpur mendidih, Timun Mas berdiri jauh dengan lega.",
  },
  {
    text:
      "Timun Mas berhasil kembali ke pelukan Mbok Srini. Mereka hidup bahagia tanpa rasa takut. Cerita ini mengajarkan keberanian, kecerdikan, dan kasih ibu yang kuat.",
    image: "/assets/img/TimunMas/15.png",
    alt: "Pelukan hangat antara ibu dan anak di depan rumah, matahari pagi bersinar damai.",
  },
];

  let currentPage = 0;

  const pageText = document.getElementById("page-text");
  const pageImage = document.getElementById("page-image");
  const prevBtn = document.getElementById("prev-btn");
  const nextBtn = document.getElementById("next-btn");

  function updatePage() {
    const page = storyPages[currentPage];
    pageText.textContent = page.text;
    pageImage.src = page.image;
    pageImage.alt = page.alt;

    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = currentPage === storyPages.length - 1;
  }

  prevBtn.addEventListener("click", () => {
    if (currentPage > 0) {
      currentPage--;
      updatePage();
    }
  });

  nextBtn.addEventListener("click", () => {
    if (currentPage < storyPages.length - 1) {
      currentPage++;
      updatePage();
    }
  });

  updatePage();
</script>
</body>
</html>