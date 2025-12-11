<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Usaha Bangun Jaya</title>
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
            <li><a href="pesanan.php"><i class='bx bxs-cart'></i> Data Terjual</a></li>
            <li><a href="penghasilan.php" class="active"><i class='bx bxs-wallet'></i> Penghasilan</a></li>
            <li><a href="../logout_proses.php"><i class='bx bxs-log-out'></i>Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Penghasilan</h1>
            <p>Kelola rentang tanggal untuk mengecek keuntungan dalam beberapa periode.</p>
        </header>

        <div class="data-keuntungan">
            <form method="POST" action="penghasilan_hitung.php" class="form-keuntungan">
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" id="tanggal_selesai" required>
                </div>

                <div class="form-actions">
                    <button type="submit" name="create" class="btn btn-save">Save</button>
                    <button type="reset" class="btn btn-reset">Reset</button>
                </div>
            </form>

            <div class="table-container">
                <table class="keuntungan-table" border="1" cellspacing="0" cellpadding="10">
                    <thead>
                        <tr>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Total Pendapatan</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../koneksi.php';
                            $data = mysqli_query($conn, "SELECT * FROM keuntungan");
                            while($a = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $a['tanggal_mulai']; ?></td>
                            <td><?php echo $a['tanggal_selesai']; ?></td>
                            <td><?php echo $a['total_pendapatan']; ?></td>
                            <td><a href="penghasilan_delete.php?id_keuntungan=<?php echo $a['id_keuntungan']; ?>"><i class='bx bx-trash'></i></a></td>
                        </tr>
                        <?php 
                            } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>