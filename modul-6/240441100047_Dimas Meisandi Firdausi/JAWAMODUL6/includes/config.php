<?php
// config.php - untuk menyimpan pengaturan koneksi database, agar tidak perlu menulis ulang kode koneksi di setiap file PHP.

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'manajemen_karyawan';

// buat koneksi
$conn = mysqli_connect($host, $user, $pass, $database);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
