<?php
require_once '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  mysqli_query($conn, $query);
  header("Location: login.php?pesan=berhasil");
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Registrasi Pengguna</h1>
    <form method="POST">
      <div class="mb-4">
        <label class="block mb-1 text-xl">Username</label>
        <input type="text" name="username" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div class="mb-6">
        <label class="block mb-1 text-xl">Password</label>
        <input type="password" name="password" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white text-xl px-4 py-2 rounded w-full">Daftar</button>
      <p class="text-sm text-center mt-4">Sudah punya akun? <a href="login.php" class="text-blue-600 hover:underline">Login</a></p>
    </form>
  </div>
</body>
</html>
