<?php
session_start();
require_once 'includes/config.php';

// cek session login
if (!isset($_SESSION['user_id'])) {
     header("Location: /JAWAMODUL6/auth/login.php");
    exit();
}

// ambil data karyawan_absensi dari database
$sql = "SELECT * FROM karyawan_absensi ORDER BY tanggal_absensi DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Daftar Karyawan & Absensi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
  <div class="max-w-7xl mx-auto my-10 p-6">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-4xl font-bold text-gray-800">📋 Daftar Karyawan & Absensi</h1>
      <div>
        <a href="karyawan_absensi/tambah.php" class="bg-green-600 hover:bg-green-700 text-white text-xl px-4 py-2 rounded shadow">+ Tambah Data</a>
        <a href="/JAWAMODUL6/auth/logout.php" class="ml-4 bg-red-600 hover:bg-red-700 text-white text-xl px-4 py-2 rounded shadow">Logout</a>
      </div>
    </div>

    <div class="bg-white rounded shadow overflow-x-auto">
      <table class="min-w-full table-auto">
        <thead class="bg-gray-200 text-gray-600 uppercase text-sm font-semibold">
          <tr>
            <th class="py-3 px-4 text-left">NIP</th>
            <th class="py-3 px-4 text-left">Nama</th>
            <th class="py-3 px-4 text-left">Umur</th>
            <th class="py-3 px-4 text-left">Jenis Kelamin</th>
            <th class="py-3 px-4 text-left">Departemen</th>
            <th class="py-3 px-4 text-left">Jabatan</th>
            <th class="py-3 px-4 text-left">Kota Asal</th>
            <th class="py-3 px-4 text-left">Tanggal Absensi</th>
            <th class="py-3 px-4 text-left">Jam Masuk</th>
            <th class="py-3 px-4 text-left">Jam Pulang</th>
            <th class="py-3 px-4 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-lg font-normal">
          <?php if(mysqli_num_rows($result) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
              <tr class="border-b hover:bg-gray-100">
                <td class="py-2 px-4"><?=$row['nip']?></td>
                <td class="py-2 px-4"><?=$row['nama']?></td>
                <td class="py-2 px-4"><?=$row['umur']?></td>
                <td class="py-2 px-4"><?=$row['jenis_kelamin']?></td>
                <td class="py-2 px-4"><?=$row['departemen']?></td>
                <td class="py-2 px-4"><?=$row['jabatan']?></td>
                <td class="py-2 px-4"><?=$row['kota_asal']?></td>
                <td class="py-2 px-4"><?=$row['tanggal_absensi']?></td>
                <td class="py-2 px-4"><?=$row['jam_masuk']?></td>
                <td class="py-2 px-4"><?=$row['jam_pulang']?></td>
                <td class="py-2 px-2 flex text-center  space-x-2">
                  <a href="karyawan_absensi/edit.php?id=<?=$row['id']?>" class="text-blue-600 hover:underline">Edit</a>
                  <a href="karyawan_absensi/hapus.php?id=<?=$row['id']?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="text-red-600 hover:underline">Hapus</a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <tr><td colspan="11" class="text-center py-6 text-gray-500">Data tidak ditemukan.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
            