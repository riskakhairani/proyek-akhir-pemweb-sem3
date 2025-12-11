<?php
    include '../koneksi.php';
    $id_jenis = $_GET['id_jenis'];
    $data = mysqli_query($conn, "SELECT * FROM jenis WHERE id_jenis='$id_jenis'");
    $row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang - Usaha Bangun Jaya</title>
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
        <div class="content">
            <h3>Edit Jenis Barang</h3>
            <form method="POST" action="update_jenis.php">
            <table border="0" cellpadding="2">
                <input type="hidden" name="id_jenis" value="<?php echo $row['id_jenis']; ?>">
                <tr align="left">
                    <td>Jenis Barang</td>
                    <td>:</td>
                    <td><input type="text" name="jenis_barang" value="<?php echo $row['jenis_barang']; ?>"></td>
                </tr>
                <tr align="left">
                    <td>Photo</td>
                    <td>:</td>
                    <td><input type="file" name="foto_barang" value="<?php echo $row['foto_barang']; ?>"></td>
                </tr>
                <tr align="left">
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="create" value="Save">
                        <input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</body>
</html>