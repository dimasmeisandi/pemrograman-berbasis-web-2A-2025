<?php
require_once '../includes/config.php';
require_once '../includes/session.php';

if (isset($_POST['tambah'])) {
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $departemen = $_POST['departemen'];
  $jabatan = $_POST['jabatan'];
  $kota_asal = $_POST['kota_asal'];
  $tanggal_absensi = $_POST['tanggal_absensi'];
  $jam_masuk = $_POST['jam_masuk'];
  $jam_pulang = $_POST['jam_pulang'];

  $query = "INSERT INTO karyawan_absensi (nip, nama, umur, jenis_kelamin, departemen, jabatan, kota_asal, tanggal_absensi, jam_masuk, jam_pulang) VALUES ('$nip', '$nama', $umur, '$jenis_kelamin', '$departemen', '$jabatan', '$kota_asal', '$tanggal_absensi', '$jam_masuk', '$jam_pulang')";
  mysqli_query($conn, $query);

  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Karyawan & Absensi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <div class="max-w-4xl mx-auto my-20 bg-white p-6 rounded shadow">
    <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Tambah Data Karyawan & Absensi</h2>
    <form method="post" class="text-lg">
      <div class="grid grid-cols-1 gap-4">
        <div>
          <label class="block text-xl text-gray-700 mb-1">NIP</label>
          <input name="nip" type="text" required class="w-full border p-2 rounded">
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Nama</label>
          <input name="nama" type="text" required class="w-full border p-2 rounded">
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Umur</label>
          <input name="umur" type="number" required class="w-full border p-2 rounded">
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Jenis Kelamin</label>
          <select name="jenis_kelamin" required class="w-full border p-2 rounded">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Departemen</label>
          <input name="departemen" type="text" required class="w-full border p-2 rounded">
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Jabatan</label>
          <input name="jabatan" type="text" required class="w-full border p-2 rounded">
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Kota Asal</label>
          <input name="kota_asal" type="text" required class="w-full border p-2 rounded">
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Tanggal Absensi</label>
          <input name="tanggal_absensi" type="date" required class="w-full border p-2 rounded">
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Jam Masuk</label>
          <input name="jam_masuk" type="time" required class="w-full border p-2 rounded">
        </div>
        <div>
          <label class="block text-xl text-gray-700 mb-1">Jam Pulang</label>
          <input name="jam_pulang" type="time" required class="w-full border p-2 rounded">
        </div>
      </div>
      <div class="mt-6 flex justify-between">
        <button name="tambah" type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
        <a href="index.php" class="text-gray-600 hover:underline self-center">← Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>
