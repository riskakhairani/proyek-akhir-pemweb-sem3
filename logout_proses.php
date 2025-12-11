<?php
session_start();

// Hapus session login untuk logout
session_unset(); // Menghapus semua variabel session
session_destroy(); // Menghancurkan session

// Tunda redirect selama beberapa detik untuk menampilkan alert
echo '<script>';
echo 'alert("Anda Berhasil Logout");';
echo 'window.location.href = "index.php";'; // Redirect setelah alert
echo '</script>';
exit;
