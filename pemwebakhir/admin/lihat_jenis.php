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
        <div class="jenis_barang">
            <center>
            <h2>Daftar Jenis Barang</h2>
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th>Jenis Barang</th>
                    <th>Foto Barang</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <?php
                        include '../koneksi.php';
                        $data = mysqli_query($conn, "SELECT * FROM jenis;");
                        while($a = mysqli_fetch_array($data)){
                    ?>
                    <td><?php echo $a['jenis_barang'];?></td>
                    <td><?php echo "<img src='../foto/".$a['foto_barang']."' style='width:90px;height:120px;'>"; ?></td>
                    <td><a href="edit_jenis.php?id_jenis=<?php echo $a['id_jenis']; ?>"><i class='bx bx-edit'></i></a>
                        <a href="delete_jenis.php?id_jenis=<?php echo $a['id_jenis']; ?>"><i class='bx bx-trash'></i></a></td>
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