<?php
require_once '../includes/session.php';
require_once '../includes/config.php';

$result = mysqli_query($conn, "SELECT * FROM karyawan_absensi");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Karyawan & Absensi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">📋 Data Karyawan & Absensi</h1>

    <div class="flex justify-between mb-6">
      <a href="/JAWAMODUL6/index.php" class="text-gray-600 text-lg">← Dashboard</a>
      <a href="tambah.php" class="bg-green-500 hover:bg-green-600 text-white text-lg px-4 py-2 rounded shadow">+ Tambah Data</a>
    </div>

    <div class="bg-white shadow-md rounded overflow-x-auto">
      <table class="min-w-full table-auto">
        <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
          <tr>
            <th class="py-3 px-4 text-left">NIP</th>
            <th class="py-3 px-4 text-left">Nama</th>
            <th class="py-3 px-4 text-left">Umur</th>
            <th class="py-3 px-4 text-left">Jenis Kelamin</th>
            <th class="py-3 px-4 text-left">Departemen</th>
            <th class="py-3 px-4 text-left">Jabatan</th>
            <th class="py-3 px-4 text-left">Kota Asal</th>
            <th class="py-3 px-4 text-left">Tanggal</th>
            <th class="py-3 px-4 text-left">Jam Masuk</th>
            <th class="py-3 px-4 text-left">Jam Pulang</th>
            <th class="py-3 px-4 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-sm">
          <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr class="border-b text-lg hover:bg-gray-100">
              <td class="py-3 px-4"><?= htmlspecialchars($row['nip']) ?></td>
              <td class="py-3 px-4"><?= htmlspecialchars($row['nama']) ?></td>
              <td class="py-3 px-4"><?= $row['umur'] ?></td>
              <td class="py-3 px-4"><?= $row['jenis_kelamin'] ?></td>
              <td class="py-3 px-4"><?= htmlspecialchars($row['departemen']) ?></td>
              <td class="py-3 px-4"><?= htmlspecialchars($row['jabatan']) ?></td>
              <td class="py-3 px-4"><?= htmlspecialchars($row['kota_asal']) ?></td>
              <td class="py-3 px-4"><?= $row['tanggal_absensi'] ?></td>
              <td class="py-3 px-4"><?= $row['jam_masuk'] ?></td>
              <td class="py-3 px-4"><?= $row['jam_pulang'] ?></td>
              <td class="py-3 px-4 text-center">
                <div class="flex justify-center space-x-2">
                  <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-500 hover:underline">Edit</a>
                  <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="text-red-500 hover:underline">Hapus</a>
                </div>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>