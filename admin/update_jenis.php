<?php
include '../koneksi.php';
$id_jenis = $_POST['id_jenis'];
$jenis_barang = $_POST['jenis_barang'];
$foto_barang = $_POST['foto_barang'];

mysqli_query($conn, "UPDATE jenis SET
    jenis_barang='$jenis_barang',
    foto_barang='$foto_barang'
    WHERE id_jenis='$id_jenis'");

echo '<script>alert("Data Berhasil diperbarui"); window.location.href = "lihat_jenis.php";</script>';
?>
