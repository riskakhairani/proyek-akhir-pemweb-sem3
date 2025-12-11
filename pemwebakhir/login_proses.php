<?php
session_start();

// Jika sudah login, redirect ke halaman dashboard
if (isset($_SESSION["login"])) {
    header("Location: admin/dashboard.php");
    exit;
}

if (isset($_POST["login"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // Validasi username dan password
    if ($user === "usahabj" && $pass === "usahaku123") {
        // Set session jika login sukses
        $_SESSION["login"] = true;
        $_SESSION["login_success"] = "Login Berhasil! Selamat datang di dashboard.";
    
        // Redirect ke halaman admin
        header("Location: admin/dashboard.php");
        exit;
    } else {
        echo '<script>';
        echo 'alert("Login Gagal! Username atau password salah.");';
        echo 'window.location.href="index.php";';
        echo '</script>';
        exit;
    }    
}
