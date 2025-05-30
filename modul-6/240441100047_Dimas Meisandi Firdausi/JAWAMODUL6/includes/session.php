<!-- Fungsi session di PHP adalah untuk menyimpan data pengguna secara sementara di server selama pengguna masih aktif (belum logout), -->

<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /JAWAMODUL6/auth/login.php");
    exit();
}
?>
