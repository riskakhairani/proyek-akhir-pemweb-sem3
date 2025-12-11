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
            <center>
                <h2>Tambah Jenis Barang</h2>
                <form method="POST" action="data_s_jenis.php" class="form-barang">
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" name="jenis_barang" id="jenis_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_barang">Photo</label>
                        <input type="file" name="foto_barang" id="foto_barang">
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="create" class="btn btn-save">Save</button>
                        <button type="reset" class="btn btn-reset">Reset</button>
                    </div>
                </form>
            </center>
        </div>
    </div>
</body>
</html>
