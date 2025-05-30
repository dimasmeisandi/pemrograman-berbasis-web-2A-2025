<?php
require_once '../includes/config.php';
require_once '../includes/session.php';

$id = $_GET['id'] ?? null;

if ($id) {
    // Hapus data berdasarkan id
    mysqli_query($conn, "DELETE FROM karyawan_absensi WHERE id = $id");
}

header("Location: index.php");
exit;
?>
