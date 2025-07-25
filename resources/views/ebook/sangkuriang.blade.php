<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Halaman Buku Cerita Rakyat
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
  <div class="max-w-3xl w-full bg-white rounded-lg shadow-lg p-6 flex flex-col">
   <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800" id="book-title">
    Judul Cerita Rakyat
   </h1>
   <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
    <img alt="Ilustrasi cerita rakyat halaman 1, gambar pemandangan desa tradisional dengan gunung dan sungai" class="w-full md:w-1/2 rounded-lg shadow-md object-cover" height="300" id="page-image" src="https://storage.googleapis.com/a1aa/image/97e5d0de-c65b-46d9-bf29-a1e8bf5bd1e1.jpg" width="400"/>
    <p class="text-gray-700 text-lg md:w-1/2 leading-relaxed" id="page-text">
     Ini adalah paragraf pertama dari cerita rakyat yang menceritakan tentang asal-usul sebuah desa yang penuh dengan keajaiban dan legenda turun-temurun.
    </p>
   </div>
   <div class="mt-8 flex justify-between">
    <button class="flex items-center gap-2 bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold py-2 px-4 rounded disabled:opacity-50 disabled:cursor-not-allowed" disabled="" id="prev-btn">
     <i class="fas fa-arrow-left">
     </i>
     Sebelumnya
    </button>
    <button class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" id="next-btn">
     Berikutnya
     <i class="fas fa-arrow-right">
     </i>
    </button>
   </div>
  </div>
  <script>
   // Contoh data cerita, tiap halaman ada paragraf dan gambar
    const storyPages = [
      {
        text: "Ini adalah paragraf pertama dari cerita rakyat yang menceritakan tentang asal-usul sebuah desa yang penuh dengan keajaiban dan legenda turun-temurun.",
        image: "/images/TimunMas.jpg",
        alt: "Ilustrasi cerita rakyat halaman 1, gambar pemandangan desa tradisional dengan gunung dan sungai"
      },
      {
        text: "Pada suatu hari, seorang pemuda pemberani memulai perjalanan untuk mencari kebenaran di balik legenda tersebut, melewati hutan lebat dan sungai yang deras.",
        image: "https://placehold.co/400x300/png?text=Gambar+Cerita+2",
        alt: "Ilustrasi cerita rakyat halaman 2, gambar pemuda berjalan di hutan lebat dengan sinar matahari menembus pepohonan"
      },
      {
        text: "Di tengah perjalanan, ia bertemu dengan makhluk ajaib yang memberinya petunjuk penting untuk melanjutkan pencariannya.",
        image: "https://placehold.co/400x300/png?text=Gambar+Cerita+3",
        alt: "Ilustrasi cerita rakyat halaman 3, gambar makhluk ajaib bercahaya di tengah hutan"
      },
      {
        text: "Setelah melewati berbagai rintangan, pemuda itu akhirnya menemukan sebuah gua rahasia yang menyimpan harta karun dan rahasia desa.",
        image: "https://placehold.co/400x300/png?text=Gambar+Cerita+4",
        alt: "Ilustrasi cerita rakyat halaman 4, gambar gua rahasia dengan cahaya emas dari dalam"
      },
      {
        text: "Dengan membawa harta karun dan pengetahuan baru, ia kembali ke desanya dan membagikan kisah serta keberanian yang menginspirasi seluruh penduduk.",
        image: "https://placehold.co/400x300/png?text=Gambar+Cerita+5",
        alt: "Ilustrasi cerita rakyat halaman 5, gambar pemuda kembali ke desa disambut oleh penduduk dengan sukacita"
      }
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