<?php
    include '../koneksi.php';
    $id_data = $_GET['id_data'];
    $data = mysqli_query($conn, "SELECT * FROM data WHERE id_data='$id_data'");
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
            <h3>Edit Barang</h3>
            <form method="POST" action="update_nama.php">
            <table border="0" cellpadding="2">
                <input type="hidden" name="id_data" value="<?php echo $row['id_data']; ?>">
                <tr align="left">
                    <td>Jenis Barang</td>
                    <td>:</td>
                    <td><select name="jenis_barang">
                        <?php
                        $users = mysqli_query($conn, "SELECT jenis_barang FROM data");
                        while ($user = mysqli_fetch_array($users)) {
                            $selected = ($user['jenis_barang'] == $row['jenis_barang']) ? 'selected' : '';
                            echo "<option value='" . $user['jenis_barang'] . "' $selected>" . $user['jenis_barang'] . "</option>";
                        }
                        ?>
                        </select></td>
                </tr>
                <tr align="left">
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>"></td>
                </tr>
                <tr align="left">
                    <td>Ukuran</td>
                    <td>:</td>
                    <td><input type="text" name="ukuran" value="<?php echo $row['ukuran']; ?>">
                        <input type="radio" name="satuan_ukuran" value="cm" <?php if($row['satuan_ukuran'] == 'cm') echo 'checked'; ?>>cm
                        <input type="radio" name="satuan_ukuran" value="inch" <?php if($row['satuan_ukuran'] == 'inch') echo 'checked'; ?>>inch
                        <input type="radio" name="satuan_ukuran" value="" <?php if($row['satuan_ukuran'] == '') echo 'checked'; ?>>-</td>
                </tr>
                <tr align="left">
                    <td>Warna</td>
                    <td>:</td>
                    <td><select name="warna">
                        <option value="hitam" <?php if($row['warna'] == 'hitam') echo 'selected'; ?>>Hitam</option>
                        <option value="merah" <?php if($row['warna'] == 'merah') echo 'selected'; ?>>Merah</option>
                        <option value="abu-abu" <?php if($row['warna'] == 'abu-abu') echo 'selected'; ?>>Abu-abu</option>
                        <option value="cokelat" <?php if($row['warna'] == 'cokelat') echo 'selected'; ?>>Cokelat</option>
                        <option value="biru" <?php if($row['warna'] == 'biru') echo 'selected'; ?>>Biru</option>
                        <option value="kuning" <?php if($row['warna'] == 'kuning') echo 'selected'; ?>>Kuning</option>
                        <option value="hijau" <?php if($row['warna'] == 'hijau') echo 'selected'; ?>>Hijau</option>
                        <option value="perunggu" <?php if($row['warna'] == 'perunggu') echo 'selected'; ?>>Perunggu</option>
                        <option value="" <?php if($row['warna'] == '') echo 'selected'; ?>>-</option>
                        </select></td>
                </tr>
                <tr align="left">
                    <td>Stok</td>
                    <td>:</td>
                    <td><input type="text" name="stok_awal" value="<?php echo $row['stok_awal']; ?>">
                        <input type="radio" name="satuan_stok" value="pcs" <?php if($row['satuan_stok'] == 'pcs') echo 'checked'; ?>>Pcs
                        <input type="radio" name="satuan_stok" value="kg" <?php if($row['satuan_stok'] == 'kg') echo 'checked'; ?>>Kg
                        <input type="radio" name="satuan_stok" value="liter" <?php if($row['satuan_stok'] == 'liter') echo 'checked'; ?>>Liter
                        <input type="radio" name="satuan_stok" value="meter" <?php if($row['satuan_stok'] == 'meter') echo 'checked'; ?>>Meter</td>
                </tr>
                
                <tr align="left">
                    <td>Harga Pokok</td>
                    <td>:</td>
                    <td><input type="text" name="harga_pokok" value="<?php echo $row['harga_pokok']; ?>"></td>
                </tr>
                <tr align="left">
                    <td>Harga Jual</td>
                    <td>:</td>
                    <td><input type="text" name="harga_jual" value="<?php echo $row['harga_jual']; ?>"></td>
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