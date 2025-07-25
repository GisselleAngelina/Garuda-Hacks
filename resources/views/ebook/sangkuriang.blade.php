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
      Judul Cerita Rakyat
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
          "Ini adalah paragraf pertama dari cerita rakyat yang menceritakan tentang asal-usul sebuah desa yang penuh dengan keajaiban dan legenda turun-temurun.",
        image:
          "https://placehold.co/360x256/png?text=Ilustrasi+pemandangan+desa+tradisional+gunung+sungai",
        alt:
          "Ilustrasi cerita rakyat halaman 1, gambar pemandangan desa tradisional dengan gunung dan sungai di latar belakang, langit cerah dan pepohonan hijau",
      },
      {
        text:
          "Pada suatu hari, seorang pemuda pemberani memulai perjalanan untuk mencari kebenaran di balik legenda tersebut, melewati hutan lebat dan sungai yang deras.",
        image:
          "https://placehold.co/360x256/png?text=Ilustrasi+pemuda+berjalan+di+hutan+lebat",
        alt:
          "Ilustrasi cerita rakyat halaman 2, gambar pemuda berjalan di hutan lebat dengan sinar matahari menembus pepohonan, suasana magis dan penuh petualangan",
      },
      {
        text:
          "Di tengah perjalanan, ia bertemu dengan makhluk ajaib yang memberinya petunjuk penting untuk melanjutkan pencariannya.",
        image:
          "https://placehold.co/360x256/png?text=Ilustrasi+makhluk+ajaib+bercahaya+di+hutan",
        alt:
          "Ilustrasi cerita rakyat halaman 3, gambar makhluk ajaib bercahaya di tengah hutan yang gelap, dengan aura mistis dan cahaya lembut",
      },
      {
        text:
          "Setelah melewati berbagai rintangan, pemuda itu akhirnya menemukan sebuah gua rahasia yang menyimpan harta karun dan rahasia desa.",
        image:
          "https://placehold.co/360x256/png?text=Ilustrasi+gua+rahasia+dengan+cahaya+emas",
        alt:
          "Ilustrasi cerita rakyat halaman 4, gambar gua rahasia dengan cahaya emas yang memancar dari dalam, suasana misterius dan penuh harapan",
      },
      {
        text:
          "Dengan membawa harta karun dan pengetahuan baru, ia kembali ke desanya dan membagikan kisah serta keberanian yang menginspirasi seluruh penduduk.",
        image:
          "https://placehold.co/360x256/png?text=Ilustrasi+pemuda+kembali+ke+desa+disambut+penduduk",
        alt:
          "Ilustrasi cerita rakyat halaman 5, gambar pemuda kembali ke desa disambut oleh penduduk dengan sukacita, suasana hangat dan penuh kebahagiaan",
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