<?php
session_start();

// Cek jika ada session untuk pesan sukses login
if (isset($_SESSION["login_success"])) {
    echo '<script>alert("' . $_SESSION["login_success"] . '");</script>';
    unset($_SESSION["login_success"]); // Hapus session setelah ditampilkan
}

// Cek jika belum login, redirect ke halaman login
if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Usaha Bangun Jaya</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="shortcut icon" href="../css/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../css/logo.png" alt="Logo Usaha Bangun Jaya" class="logo-img">
        </div>
        <ul>
            <li><a href="dashboard.php" class="active"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
            <li><a href="data.php"><i class='bx bxs-box'></i> Data Barang</a></li>
            <li><a href="pesanan.php"><i class='bx bxs-cart'></i> Data Terjual</a></li>
            <li><a href="penghasilan.php"><i class='bx bxs-wallet'></i> Penghasilan</a></li>
            <li><a href="../logout_proses.php"><i class='bx bxs-log-out'></i> Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Selamat Datang, Admin!</h1>
            <p>Kelola toko Anda dengan efisien menggunakan dashboard ini.</p>
        </header>
        <div class="cards">
            <div class="card">
                <h3>Total Barang</h3>
                <p>
                    <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "SELECT COUNT(*) AS total_barang FROM data");
                        $data = mysqli_fetch_array($query);
                        echo $data['total_barang'];
                    ?>
                </p>
            </div>
            <div class="card">
                <h3>Total Pembelian</h3>
                <p>
                    <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "SELECT COUNT(*) AS total_pembelian FROM penjualan");
                        $data = mysqli_fetch_array($query);
                        echo $data['total_pembelian'];
                    ?>
                </p>
            </div>
            <div class="card">
                <h3>Pendapatan</h3>
                <p>
                    <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "SELECT SUM(keuntungan) AS total_pendapatan FROM penjualan");
                        $data = mysqli_fetch_array($query);
                        echo "Rp. " . number_format($data['total_pendapatan'], 0, ',', '.');
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>