<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Timeline Pengalaman Kuliah</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class="font-sans bg-gray-50 text-gray-800">
    <nav class="bg-white flex justify-between py-10 px-10 shadow-xl border-b-2 border-blue-300">
      <div class="font-bold text-3xl">
        <h1 class="text-blue-500">TimeLine Pengalaman Kuliah</h1>
      </div>
      <div class="flex gap-4">
        <a href="profilmahasiswa.php" class="bg-blue-400 rounded-2xl flex justify-center items-center p-2 ">Profil</a>
        <a href="blog.php" class="bg-blue-400 rounded-2xl flex justify-center items-center p-2">BLOG</a>
      </div>
    </nav>
    <div class="px-10 py-10">
      <h2 class="text-2xl font-bold mb-4">Timeline Mahasiswa</h2>
    
      <?php 
      $pengalaman = [
      ["tahun" =>"2024", 
      "judul" => "Masuk Kuliah", 
      "deskripsi" => "Memulai kuliah di Universitas Trunojoyo Madura."], 
      ["tahun" => "2024", 
      "judul" => "Bergabung UKMFT-ITC", 
      "deskripsi" => "Aktif mengikuti kegiatan di UKMFT-ITC."], 
      ["tahun" => "2024", "judul" => 
      "Proyek Akhir ALPRO", "deskripsi" => 
      "Membuat aplikasi sederhana sebagai proyek akhir praktikum Algoritma Pemrograman."] ] ; 

      foreach ($pengalaman as $p) {
        echo '
        <div class="border-l-4 border-blue-500 pl-6 ml-2">
          <div class="mb-6">
            <h1 class="text-lg font-semibold">' . $p['tahun'] . ' - ' . $p['judul'] . '</h1>
            <p class="text-gray-700 mt-1">' . $p['deskripsi'] . '</p>
          </div>
        </div>';
      }
        ?>
    </div>
  </body>
</html>