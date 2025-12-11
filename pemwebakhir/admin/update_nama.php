<?php
    include '../koneksi.php';
    $id_data = $_POST['id_data'];
    $jenis_barang = $_POST["jenis_barang"];
    $nama_barang = $_POST["nama_barang"];
    $ukuran = $_POST["ukuran"];
    $satuan_ukuran = $_POST["satuan_ukuran"];
    $warna = $_POST["warna"];
    $stok_awal = $_POST["stok_awal"];
    $satuan_stok = $_POST["satuan_stok"];
    $harga_pokok = $_POST["harga_pokok"];
    $harga_jual = $_POST["harga_jual"];

mysqli_query($conn, "UPDATE data SET
    jenis_barang='$jenis_barang',
    nama_barang='$nama_barang',
    ukuran='$ukuran',
    satuan_ukuran='$satuan_ukuran',
    warna='$warna',
    stok_awal='$stok_awal',
    satuan_stok='$satuan_stok',
    harga_pokok='$harga_pokok',
    harga_jual='$harga_jual'
    WHERE id_data='$id_data'");

echo '<script>alert("Data Berhasil diperbarui"); window.location.href = "data.php";</script></script>';
?>
