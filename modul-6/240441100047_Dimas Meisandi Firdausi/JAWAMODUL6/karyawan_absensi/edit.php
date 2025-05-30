<?php
require_once '../includes/config.php';
require_once '../includes/session.php';

$id = $_GET['id'] ?? null;

if (!$id) {
  header('Location: index.php');
  exit;
}

$query = mysqli_query($conn, "SELECT * FROM karyawan_absensi WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
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

  $update = mysqli_query($conn, "UPDATE karyawan_absensi SET 
    nip='$nip',
    nama='$nama',
    umur=$umur,
    jenis_kelamin='$jenis_kelamin',
    departemen='$departemen',
    jabatan='$jabatan',
    kota_asal='$kota_asal',
    tanggal_absensi='$tanggal_absensi',
    jam_masuk='$jam_masuk',
    jam_pulang='$jam_pulang'
    WHERE id=$id");

  if ($update) {
    header("Location: index.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Karyawan & Absensi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Edit Data Karyawan & Absensi</h2>
    <form method="post">
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">NIP</label>
        <input name="nip" type="text" value="<?= $data['nip'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Nama</label>
        <input name="nama" type="text" value="<?= $data['nama'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Umur</label>
        <input name="umur" type="number" value="<?= $data['umur'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="w-full border p-2 rounded" required>
          <option <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
          <option <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Departemen</label>
        <input name="departemen" type="text" value="<?= $data['departemen'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Jabatan</label>
        <input name="jabatan" type="text" value="<?= $data['jabatan'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Kota Asal</label>
        <input name="kota_asal" type="text" value="<?= $data['kota_asal'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Tanggal Absensi</label>
        <input name="tanggal_absensi" type="date" value="<?= $data['tanggal_absensi'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm text-gray-700 mb-1">Jam Masuk</label>
        <input name="jam_masuk" type="time" value="<?= $data['jam_masuk'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="mb-6">
        <label class="block text-sm text-gray-700 mb-1">Jam Pulang</label>
        <input name="jam_pulang" type="time" value="<?= $data['jam_pulang'] ?>" class="w-full border p-2 rounded" required>
      </div>
      <div class="flex justify-between">
        <button name="update" type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Update</button>
        <a href="index.php" class="text-gray-600 hover:underline self-center">← Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>
