<?php
include "koneksi.php";

// Validasi parameter id_data
if (isset($_GET['id_data']) && !empty($_GET['id_data'])) {
    // Escape string untuk mencegah SQL Injection
    $id_data = mysqli_real_escape_string($conn, $_GET['id_data']);

    // Query untuk menghapus data
    $query = "DELETE FROM data WHERE id_data='$id_data'";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        // Redirect dengan pesan sukses
        header("Location: data.php?status=success&message=Data berhasil dihapus");
    } else {
        // Redirect dengan pesan error
        header("Location: data.php?status=error&message=Gagal menghapus data: " . mysqli_error($conn));
    }
} else {
    // Redirect jika parameter id_data tidak valid
    header("Location: data.php?status=error&message=ID data tidak valid");
}

exit;
?>
