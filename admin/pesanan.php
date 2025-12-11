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
            <li><a href="data.php"><i class='bx bxs-box'></i> Data Barang</a></li>
            <li><a href="pesanan.php" class="active"><i class='bx bxs-cart'></i> Data Terjual</a></li>
            <li><a href="penghasilan.php"><i class='bx bxs-wallet'></i> Penghasilan</a></li>
            <li><a href="../logout_proses.php"><i class='bx bxs-log-out'></i> Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Data Terjual</h1>
            <p>Kelola produk-produk yang telah terjual.</p>
        </header>
        <div class="data_terjual">

        <center>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Tanggal Pembelian</th>
                <th>Nama Pembeli</th>
                <th>Nama Barang</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Jumlah</th>
                <th>Uang Masuk</th>
            </tr>
            <tr>
                <?php
                    include '../koneksi.php';
                    $data = mysqli_query($conn, "SELECT * FROM penjualan;");
                    while($a = mysqli_fetch_array($data)){
                ?>
                <td><?php echo $a['tanggal_pembelian'];?></td>
                <td><?php echo $a['nama_pembeli']; ?></td>
                <td><?php echo $a['nama_barang'];?></td>
                <td><?php echo $a['ukuran'];?>
                    <?php echo $a['satuan_ukuran'];?></td>
                <td><?php echo $a['warna'];?></td>
                <td><?php echo $a['stok_keluar'];?>
                <td><?php echo $a['uang_masuk'];?></td>
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