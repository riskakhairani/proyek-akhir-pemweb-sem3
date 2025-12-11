<?php
    $jenis_barang = $_POST["jenis_barang"];
    $foto_barang = $_POST["foto_barang"];

    include "../koneksi.php";
    mysqli_query($conn, "insert into jenis(jenis_barang, foto_barang)
    values ('$jenis_barang', '$foto_barang')");
    echo '<script>alert("Data Berhasil disimpan")</script>';
    include "data.php";
?>