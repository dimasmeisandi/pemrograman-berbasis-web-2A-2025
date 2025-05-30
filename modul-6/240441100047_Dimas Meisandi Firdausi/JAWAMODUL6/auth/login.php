<?php
require_once '../includes/config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {    
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE username = '$username'";  //mencari
  $result = mysqli_query($conn, $query); // menjalankan
  $user = mysqli_fetch_assoc($result); // mengambil

 if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];  // pakai 'id' supaya sama dengan cek di index.php
    header("Location: /JAWAMODUL6/index.php");
    exit;


  } else {
    $error = "Username atau password salah!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Login</h1>
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] === 'berhasil'): ?>
      <p class="text-green-600 mb-4 text-center">Registrasi berhasil! Silakan login.</p>
    <?php endif; ?>

    <?php if (isset($error)) echo "<p class='text-red-500 mb-4 text-center'>$error</p>"; ?>
    <form method="POST">
      <div class="mb-4">
        <label class="block mb-1 text-xl">Username</label>
        <input type="text" name="username" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div class="mb-6">
        <label class="block mb-1 text-xl">Password</label>
        <input type="password" name="password" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white text-xl px-4 py-2 rounded w-full">Masuk</button>
      <p class="text-sm text-center mt-4">Belum punya akun? <a href="register.php" class="text-blue-600 hover:underline">Daftar</a></p>
    </form>
  </div>
</body>
</html>
