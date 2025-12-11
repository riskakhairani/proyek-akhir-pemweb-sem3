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
                <h2>Tambah Nama Barang</h2>
                <form method="POST" action="data_s_nama.php">
                    <div class="form-barang">
                        <div class="form-group">
                            <label for="jenis_barang">Jenis Barang</label>
                            <select name="jenis_barang" id="jenis_barang">
                                <?php
                                include '../koneksi.php';
                                $data = mysqli_query($conn, "SELECT jenis_barang FROM jenis");
                                while ($a = mysqli_fetch_array($data)) {
                                    echo "<option value='" . $a['jenis_barang'] . "'>" . $a['jenis_barang'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" size="50">
                        </div>

                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" name="ukuran" id="ukuran">
                            <div class="radio-group">
                                <label><input type="radio" name="satuan_ukuran" value="cm"> cm</label>
                                <label><input type="radio" name="satuan_ukuran" value="inch"> inch</label>
                                <label><input type="radio" name="satuan_ukuran" value=""> - </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <select name="warna" id="warna">
                                <option value="hitam">Hitam</option>
                                <option value="merah">Merah</option>
                                <option value="abu-abu">Abu-abu</option>
                                <option value="cokelat">Cokelat</option>
                                <option value="biru">Biru</option>
                                <option value="kuning">Kuning</option>
                                <option value="hijau">Hijau</option>
                                <option value="perunggu">Perunggu</option>
                                <option value=""> -</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="stok_awal">Stok</label>
                            <input type="text" name="stok_awal" id="stok_awal">
                            <div class="radio-group">
                                <label><input type="radio" name="satuan_stok" value="pcs"> Pcs</label>
                                <label><input type="radio" name="satuan_stok" value="kg"> Kg</label>
                                <label><input type="radio" name="satuan_stok" value="liter"> Liter</label>
                                <label><input type="radio" name="satuan_stok" value="meter"> Meter</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga_pokok">Harga Pokok</label>
                            <input type="text" name="harga_pokok" id="harga_pokok" size="30">
                        </div>

                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="text" name="harga_jual" id="harga_jual" size="30">
                        </div>

                        <div class="form-actions">
                            <input type="submit" name="create" class="btn btn-save" value="Save">
                            <input type="reset" class="btn btn-reset" value="Reset">
                        </div>
                    </div>
                </form>
            </center>
        </div>
    </div>
</body>

</html>