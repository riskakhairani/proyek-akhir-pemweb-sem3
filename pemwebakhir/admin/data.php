<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang - Usaha Bangun Jaya</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/read.css">
    <link rel="shortcut icon" href="../css/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="sidebar">
        <div class="logo">
            <img src="../css/logo.png" alt="Logo Usaha Bangun Jaya" class="logo-img">
        </div>
        <ul>
            <li><a href="dashboard.php"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
            <li><a href="data.php" class="active"><i class='bx bxs-box'></i> Data Barang</a></li>
            <li><a href="pesanan.php"><i class='bx bxs-cart'></i> Data Terjual</a></li>
            <li><a href="penghasilan.php"><i class='bx bxs-wallet'></i> Penghasilan</a></li>
            <li><a href="../logout_proses.php"><i class='bx bxs-log-out'></i> Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Data Barang</h1>
            <p>Kelola produk yang tersedia di toko Anda.</p>
        </header>
        <div class="data_barang">
        <div class="kelompok_data">
            <div class="pilihan_data">
                <a href="data_t_jenis.php">Tambah Jenis Barang</a>
            </div>
            <div class="pilihan_data">
                <a href="lihat_jenis.php">Modifikasi Jenis Barang</a>
            </div>
            <div class="pilihan_data">
                <a href="data_t_nama.php">Tambah Barang</a>
            </div>
        </div>

        <center>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Jenis Barang</th>
                <th>Foto Barang</th>
                <th>Nama Barang</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Stok</th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php
                    include '../koneksi.php';
                    $data = mysqli_query($conn, "SELECT jenis.jenis_barang, jenis.foto_barang, data.id_data, data.nama_barang, data.ukuran, data.satuan_ukuran, data.warna, data.stok_awal, data.satuan_stok, data.harga_pokok, data.harga_jual FROM jenis JOIN data ON jenis.jenis_barang = data.jenis_barang;");
                    while($a = mysqli_fetch_array($data)){
                ?>
                <td><?php echo $a['jenis_barang'];?></td>
                <td><?php echo "<img src='../foto/".$a['foto_barang']."' style='width:90px;height:120px;'>"; ?></td>
                <td><?php echo $a['nama_barang'];?></td>
                <td><?php echo $a['ukuran'];?>
                    <?php echo $a['satuan_ukuran'];?></td>
                <td><?php echo $a['warna'];?></td>
                <td><?php echo $a['stok_awal'];?>
                    <?php echo $a['satuan_stok'];?></td>
                <td><?php echo $a['harga_pokok'];?></td>
                <td><?php echo $a['harga_jual'];?></td>
                <td><a href="edit_nama.php?id_data=<?php echo $a['id_data']; ?>"><i class='bx bx-edit'></i></a>
                    <a href="delete_nama.php?id_data=<?php echo $a['id_data']; ?>"><i class='bx bx-trash'></i></a></td>
            </tr>
                <?php 
                    }
                ?>
        </table>
        </center>
        </div>
    </div>
</body>
</html>