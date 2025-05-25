<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Interaktif Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-50">

  <!-- napigasik -->
    <nav class="bg-white flex justify-between py-10 px-10 shadow-xl border-b-2 border-blue-300 mb-10">
      <div class="font-bold text-3xl text-blue-500">
        <h1 class>Profil Interaktif Mahasiswa</h1>
      </div>
      <div class="flex gap-4">
        <a href="timeline.php" class="bg-blue-400 rounded-2xl flex justify-center items-center p-2 ">Timeline</a>
        <a href="blog.php" class="bg-blue-400 rounded-2xl flex justify-center items-center p-2">BLOG</a>
      </div>
    </nav>

    <!-- biodata saya -->
    <div class="m-5">
      <h1 class="font-bold text-2xl text-center">BIODATA MAHASISWA</h1>
      <div class="flex flex-col mx-12 ">
        <table class="flex justify-center items-center bg-blue-200 text-2xl shadow rounded-xl my-5 py-10 border-3 border-blue-500">
          <tr>
            <td class="p-2 font-bold">Nama</td>
            <td class="p-2 ">:</td>
            <td class="p-2 ">Dimas Meisandi Firdausi</td>
          </tr>
          <tr>
            <td class="p-2 font-bold">NIM</td>
            <td class="p-2 ">:</td>
            <td class="p-2 text-start">24044100047</td>
          </tr>
          <tr>
            <td class="p-2 font-bold">Tempat, Tanggal Lahir</td>
            <td class="p-2 ">:</td>
            <td class="p-2 text-start">Pamekasan, 01 Mei 2006</td>
          </tr>
          <tr>
            <td class="p-2 font-bold">Email</td>
            <td class="p-2 ">:</td>
            <td class="p-2 text-start">dimasmeisandi@gmail.com</td>
          </tr>
          <tr>
            <td class="p-2 font-bold">Nomor HP</td>
            <td class="p-2 ">:</td>
            <td class="p-2 text-start">082245224526</td>
          </tr>
        </table>
      </div>

      <!-- formulir -->
      <div class="mx-12 py-10 bg-blue-200 shadow rounded-2xl p-5 border-3 border-blue-500 mb-6">
        <form method="post" class="flex flex-col">
          <div class="flex flex-col gap-4">
            <h1 class="font-bold text-2xl ">BAHASA PEMROGRAMAN YANG DIKUASAI :</h1>
            <input type="text" name="bahasa" placeholder="Masukkan disini contoh jawascript, king python" class="border-2 rounded-xl p-2" />
            <h1 class="font-bold text-2xl">PENGALAMAN PROYEK :</h1>
            <textarea name="pengalaman" id="" rows="6" cols="50" class="border-2 rounded-xl p-2" placeholder="Tuliskan Penjelasan singkat tentang pengalaman membuat proyek pribadi."></textarea>
          </div>
          <div class="flex flex-col gap-2 py-5">
            <h1 class="font-bold text-2xl ">SOFTWARE YANG SERING DIGUNAKAN :</h1>
            <div class="flex gap-5">
              <input type="checkbox" name="softwere[]" value="VS Code"  />VS Code
              <input type="checkbox" name="softwere[]" value="XAMPP"  />XAMPP
              <input type="checkbox" name="softwere[]" value="Git"  />Git
            </div>
            <h1 class="font-bold text-2xl">SISTEM OPERASI :</h1>
            <div class="flex gap-5">
              <input type="radio" name="os" value="Windows"  />Windows 
              <input type="radio" name="os" value="Linux"  />Linux
              <input type="radio" name="os" value="Mac"  />Mac
            </div>
            <h1 class="font-bold text-2xl">TINGKAT PENGUASAAN PHP:</h1>
            <select name="tingkat" id="" class="p-2 border-2 rounded-xl mb-6">
              <option value="">--Pilih--</option>
              <option value="Pemula">Pemula</option>
              <option value="Menengah">Menengah</option>
              <option value="Mahir">Mahir</option>
            </select>
            <input type="submit" value="Submit" class="p-2 border-2 bg-blue-400 rounded-xl" />
          </div>
        </form>
      </div>
    </div>

    <!-- pemberi harapan palsu -->
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $bahasa = explode(",", $_POST["bahasa"]);
      $pengalaman = $_POST['pengalaman'];
      $softwere = isset($_POST['softwere']) ? $_POST['softwere'] : []; 
      $os = isset($_POST['os']) ? $_POST['os'] : ''; 
      $tingkat = $_POST['tingkat'];

      $error = false;

      if (empty(trim($_POST["bahasa"])) || empty($pengalaman) || empty($softwere) || empty($os) || empty($tingkat)) {
        $error = true;
        echo '<div class="bg-red-500 rounded-2xl mx-20 my-5">
        <div class="py-10 px-5">
          <div class="font-bold text-2xl border-b-2 py-2">
            <h1>INPUT ERROR !</h1>
          </div>
          <ol class="text-white">';

        if (empty($_POST["bahasa"])) {
          echo '<li class="py-2 text-lg">- Bahasa pemrograman yang dikuasai wajib diisi!</li>';
        }
        if (empty($pengalaman)) {
            echo '<li class="py-2 text-lg">- Pengalaman proyek wajib diisi!</li>';
        }
        if (empty($softwere)) {
            echo '<li class="py-2 text-lg">- Software wajib dipilih!</li>';
        }
        if (empty($os)) {
            echo '<li class="py-2 text-lg">- Sistem operasi wajib dipilih!</li>';
        }
        if (empty($tingkat)) {
            echo '<li class="py-2 text-lg">- Tingkat penguasaan PHP wajib dipilih!</li>';
        }
          echo '</ol>
          </div>
        </div>';
      } 
      if (!$error) {
        echo '<div class="bg-gray-300 rounded-2xl mx-20 mb-10">
                <div class="py-10 px-5">
                  <div class="font-bold text-2xl border-b-2 py-2">
                    <h1>HASIL</h1>
                  </div>
                  <div class="">
                    <table>
                      <tr>
                        <td class="font-bold text-lg py-2">BAHASA YANG DIKUASAI</td>
                        <td class="p-2">:</td>
                        <td class="py-2">'.  implode(", ", $bahasa)  .'</td>
                      </tr>
                      <tr>
                        <td class="font-bold text-lg py-2">PENGALAMAN PROYEK</td>
                        <td class="p-2">:</td>
                        <td class="py-2">'. $pengalaman .'</td>
                      </tr>
                      <tr>
                        <td class="font-bold text-lg py-2">SOFTWERE DIGUNAKAN</td>
                        <td class="p-2">:</td>
                        <td class="py-2">'. implode(", ", $softwere) .'</td>
                      </tr>
                      <tr>
                        <td class="font-bold text-lg py-2">SISTEM OPERASI</td>
                        <td class="p-2">:</td>
                        <td class="py-2">'. $os .'</td>
                      </tr>
                      <tr>
                        <td class="font-bold text-lg py-2">TINGKAT PENGUASAAN PHP</td>
                        <td class="p-2">:</td>
                        <td class="py-2">'. $tingkat .'</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>'; 
      }
       if (count(value: $bahasa) > 1) {
        echo '<div class="bg-blue-400 my-5 mx-20 py-5 rounded-2xl">
                        <div class="px-5 text-lg">
                          <p>Anda cukup berpengalaman dalam pemrograman!</p>
                        </div>
              </div>';
       }
    }

  ?>
  </body>
</html>