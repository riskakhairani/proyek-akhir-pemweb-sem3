<?php
include '../koneksi.php';

if (isset($_POST['submit_order'])) {
    // Ambil data dari form
    $id_data = $_POST['id_data'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $nama_barang = $_POST['nama_barang'];
    $ukuran = $_POST['ukuran'];
    $satuan_ukuran = $_POST['satuan_ukuran'];
    $warna = $_POST['warna'];
    $stok_keluar = intval($_POST['stok_keluar']);
    $harga_jual = floatval($_POST['harga_jual']);

    // Ambil harga pokok dari tabel data
    $query_harga_pokok = "SELECT harga_pokok FROM data WHERE id_data = '$id_data'";
    $result_harga_pokok = mysqli_query($conn, $query_harga_pokok);
    
    if ($result_harga_pokok && mysqli_num_rows($result_harga_pokok) > 0) {
        $row = mysqli_fetch_assoc($result_harga_pokok);
        $harga_pokok = floatval($row['harga_pokok']);
    } else {
        echo '<script>alert("Gagal mendapatkan harga pokok.");</script>';
        exit;
    }

    // Hitung total harga dan keuntungan
    $uang_masuk = $stok_keluar * $harga_jual;
    $keuntungan = $uang_masuk - ($stok_keluar * $harga_pokok);

    // Mulai transaksi untuk memastikan konsistensi data
    mysqli_begin_transaction($conn);

    try {
        // Simpan data ke tabel penjualan
        $query_penjualan = "INSERT INTO penjualan (tanggal_pembelian, nama_pembeli, nama_barang, ukuran, satuan_ukuran, warna, stok_keluar, uang_masuk, keuntungan) 
                            VALUES (NOW(), '$nama_pembeli', '$nama_barang', '$ukuran', '$satuan_ukuran', '$warna', '$stok_keluar', '$uang_masuk', '$keuntungan')";
        if (!mysqli_query($conn, $query_penjualan)) {
            throw new Exception("Gagal menyimpan data penjualan: " . mysqli_error($conn));
        }

        // Kurangi stok di tabel data
        $query_update_stok = "UPDATE data SET stok_awal = stok_awal - $stok_keluar WHERE id_data = '$id_data'";
        if (!mysqli_query($conn, $query_update_stok)) {
            throw new Exception("Gagal memperbarui stok awal: " . mysqli_error($conn));
        }

        // Commit transaksi
        mysqli_commit($conn);

        echo '<script>alert("Pesanan berhasil dibuat! Total pembayaran: Rp ' . number_format($uang_masuk, 2) . '");</script>';
        echo '<script>window.location.href="home.php";</script>';
    } catch (Exception $e) {
        // Rollback transaksi jika terjadi kesalahan
        mysqli_rollback($conn);
        echo '<script>alert("Terjadi kesalahan: ' . $e->getMessage() . '");</script>';
    }
} else {
    echo '<script>alert("Form tidak valid.");</script>';
}
?>
