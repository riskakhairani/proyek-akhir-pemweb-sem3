<?php
    $jenis_barang = $_POST["jenis_barang"];
    $nama_barang = $_POST["nama_barang"];
    $ukuran = $_POST["ukuran"];
    $satuan_ukuran = $_POST["satuan_ukuran"];
    $warna = $_POST["warna"];
    $stok_awal = $_POST["stok_awal"];
    $satuan_stok = $_POST["satuan_stok"];
    $harga_pokok = $_POST["harga_pokok"];
    $harga_jual = $_POST["harga_jual"];

    include "../koneksi.php";
    mysqli_query($conn, "insert into data(jenis_barang, nama_barang, ukuran, satuan_ukuran, warna, stok_awal, satuan_stok, harga_pokok, harga_jual)
    values ('$jenis_barang', '$nama_barang', '$ukuran', '$satuan_ukuran', '$warna', '$stok_awal', '$satuan_stok', '$harga_pokok', '$harga_jual')");
    echo '<script>alert("Data Berhasil disimpan")</script>';
    include "data.php";
?>