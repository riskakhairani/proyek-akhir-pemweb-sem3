<?php
session_start();

// Jika sudah login, redirect ke halaman dashboard
if (isset($_SESSION["login"])) {
    header("Location: admin/dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="css/logo.png" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="login_proses.php" method="post">
      <h1>LOGIN</h1>
      <h2>USAHA BANGUN JAYA</h2>
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" class="btn" name="login">Login</button>
      <div class="register-link">
        <p><a href="pembeli/home.php">Masuk sebagai pembeli</a></p>
      </div>
    </form>
  </div>
</body>
</html>
