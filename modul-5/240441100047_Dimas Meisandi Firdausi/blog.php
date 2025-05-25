<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Artikel</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <nav class="bg-white flex justify-between py-10 px-10 shadow-xl border-b-2 border-blue-300">
      <div class="font-bold text-3xl text-blue-500">
        <h1>Blog Reflektif</h1>
      </div>
      <div class="flex gap-4">
        <a href="profilmahasiswa.php" class="bg-blue-400 rounded-2xl flex justify-center items-center p-2 ">Profil</a>
        <a href="timeline.php" class="bg-blue-400 rounded-2xl flex justify-center items-center p-2">TimeLine</a>
      </div>
    </nav>
  
    <div class="px-10 py-10">
      <div class="font-bold text-2xl">
        <h1>DAFTAR ARTIKEL</h1>
      </div>
      <?php
    $kutipan = [
      "Allah mengetahui, sedang kamu tidak mengetahui - Al-Baqarah (2:126)",
      "dan janganlah kedua matamu berpaling dari mereka (karena) mengharapkan perhiasan kehidupan dunia. (QS. Al-Kahfi: 28)",
      "Dan sesungguhnya yang demikian itu sungguh berat kecuali bagi orang-orang yang khusyu'. (QS. Al-Baqarah: 45)" 
      ];

    $artikel = [
      ["id" => 1, 
      "judul" => "Melangkah Dengan Nilai Kebaikan", 
      "tanggal" => "2025-05-15", 
      "deskripsi" => "Memasuki dunia perkuliahan mengajarkan aku arti kebebasan yang sesungguhnya. Namun, di balik kebebasan itu, aku sadar bahwa menjaga nilai-nilai kebaikan dalam setiap langkah adalah hal yang krusial. Tidak semua pergaulan yang ramai itu sehat, dan tidak semua yang terlihat menyenangkan membawa dampak baik. Aku belajar bahwa memilih lingkungan yang tepat adalah kunci untuk tetap berada di jalur yang benar dalam menjalani kehidupan ini.", 
      "gambar" => "img/jalan-kaki.jpg"],
      ["id" => 2, 
      "judul" => "Godaan Tren dan Pilihan Bijak", 
      "tanggal" => "2025-05-15", 
      "deskripsi" => "Di kampus, aku sering tergoda mengikuti tren demi diterima oleh lingkungan sekitar. Tapi seiring waktu, aku menyadari bahwa tidak semua hal yang sedang tren itu baik bagiku. Aku mulai menimbang mana yang sesuai dengan prinsip hidupku, dan mana yang justru menjauhkan aku dari nilai-nilai kebaikan. Berteman dengan orang-orang yang bisa mengingatkanku pada tujuan hidup ternyata jauh lebih berarti daripada sekadar mencari pengakuan.", 
      "gambar" => "img/velocitytiktok.jpg"],
      ["id" => 3, 
      "judul" => " Pergaulan dan Hati yang Terjaga", "tanggal" => "2024-05-15", 
      "deskripsi" => "Salah satu tantangan terbesar yang aku hadapi di perkuliahan adalah pergaulan. Banyak pilihan, banyak wajah, tapi tidak semuanya membawa kebaikan. Aku belajar dari pengalaman bahwa hati yang terjaga tidak hanya didapat dari ibadah, tetapi juga dari lingkungan yang mendukung. Kini aku lebih berhati-hati dalam memilih teman, karena aku ingin menjadi pribadi yang tetap lurus dalam langkah meskipun di tengah keramaian dunia.", 
      "gambar" => "img/pergaulan.jpg"],
      ];
    
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        foreach ($artikel as $a) {
          if ($a['id'] == $id) {
            echo "
            <div class='flex justify-between py-5'>
              <h1 class='font-bold text-2xl'>{$a['judul']}</h1>
              <div class='flex gap-5'>
                <p class='bg-green-400 p-2 rounded-2xl'>{$a['tanggal']}</p>
                <a href='?' class='bg-green-400 p-2 rounded-2xl'>Kembali ke daftar artikel</a>
              </div>
            </div>

            <div class='border-2 p-2 text-justify'>
              <div class='flex justify-center'>
                <img src='{$a['gambar']}' alt='Gambar Artikel' class='w-xl h-auto rounded-lg'>
              </div>
              <p class='mt-4'>{$a['deskripsi']}</p>
              <blockquote class='text-xl py-5 font-semibold italic text-center'>
                \"" . $kutipan[rand(0, count($kutipan) - 1)] . "\"
              </blockquote>
            </div>
            ";
          }
        }
      } else {
        foreach ($artikel as $a) {
          echo '
          <div class="flex flex-col">
            <ol>
              <li class="border-2 my-2 py-5 px-2 text-lg">
                <a href="?id=' . $a['id'] . '">' . $a['judul'] . ' (' . $a['tanggal'] . ')</a>
              </li>
            </ol>
          </div>';
        }
      }
      
    ?>
    </div>

    
  </body>
</html>