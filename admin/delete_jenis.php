<?php
    include "../koneksi.php";
    $id_jenis = $_GET['id_jenis'];
    
    // Ambil nama jenis_barang berdasarkan id_jenis
    $result = mysqli_query($conn, "SELECT jenis_barang FROM jenis WHERE id_jenis='$id_jenis'");
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $jenis_barang = $row['jenis_barang'];
    } else {
        die("Error retrieving jenis_barang: " . mysqli_error($conn));
    }
    
    // Hapus record dari tabel jenis
    $deleteJenisQuery = "DELETE FROM jenis WHERE id_jenis='$id_jenis'";
    if (!mysqli_query($conn, $deleteJenisQuery)) {
        die("Error deleting record from jenis: " . mysqli_error($conn));
    }
    
    // Hapus record dari tabel data yang terkait dengan jenis_barang
    $deleteDataQuery = "DELETE FROM data WHERE jenis_barang='$jenis_barang'";
    if (!mysqli_query($conn, $deleteDataQuery)) {
        die("Error deleting record from data: " . mysqli_error($conn));
    }
    
    header("location:lihat_jenis.php");
?>
