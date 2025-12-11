<?php
    include "../koneksi.php";
    $tanggal_mulai = $_POST["tanggal_mulai"];
    $tanggal_selesai = $_POST["tanggal_selesai"];

    // Hitung total pendapatan dari transaksi berdasarkan rentang tanggal
    $query = "SELECT SUM(keuntungan) AS total_pendapatan 
              FROM penjualan 
              WHERE tanggal_pembelian BETWEEN '$tanggal_mulai' AND '$tanggal_selesai'";
    $result = mysqli_query($conn, $query);
    $total_pendapatan = mysqli_fetch_assoc($result)['total_pendapatan'] ?? 0;

    // Simpan laporan ke database
    mysqli_query($conn, "INSERT INTO keuntungan (tanggal_mulai, tanggal_selesai, total_pendapatan) 
                         VALUES ('$tanggal_mulai', '$tanggal_selesai', '$total_pendapatan')");

    echo '<script>alert("Data Berhasil disimpan")</script>';
    include "penghasilan.php";
?>
