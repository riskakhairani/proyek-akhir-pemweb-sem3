<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usaha Bangun Jaya</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="../css/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Faculty+Glyphic&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <h1 class="logo">Usaha Bangun Jaya</h1>
            <nav>
                <ul>
                    <li><a href="#" class="active">Beranda</a></li>
                    <li><a href="#products">Produk</a></li>
                    <li><a href="#order">Order</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="../logout_proses.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Selamat Datang di Usaha Bangun Jaya</h2>
            <p>Partner terpercaya Anda untuk kebutuhan bahan bangunan dan perlengkapan konstruksi.</p>
            <a href="#products" class="btn">Belanja Sekarang</a>
        </div>
    </section>

    <section id="products" class="products">
        <div class="container">
            <h2>Produk Kami</h2>
            <div class="product-carousel">
                <button class="carousel-control prev">&#10094;</button>
                <div class="product-grid">
                    <?php
                    include '../koneksi.php';
                    $data = mysqli_query($conn, "SELECT jenis.jenis_barang, jenis.foto_barang FROM jenis");
                    while ($a = mysqli_fetch_array($data)) {
                    ?>
                        <div class="product-card">
                            <?php echo "<img src='../foto/" . $a['foto_barang'] . "' style='width:200px;height:200px;'>"; ?>
                            <h3><?php echo $a['jenis_barang']; ?></h3>
                            <a href="?jenis_barang=<?php echo urlencode($a['jenis_barang']); ?>#detail_produk" class="btn">Lihat Detail</a>
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control next">&#10095;</button>
            </div>
        </div>
    </section>

    <section id="detail_produk" class="detail_produk">
        <div class="container">
            <h2>Detail Produk</h2>
            <div class="product-detail">
                <div class="product-card-detail" data-aos="fade-up" data-aos-duration="1000">
                    <center>
                        <table border="1" cellspacing="0" cellpadding="10">
                            <tr align="center">
                                <td>Nama Barang</td>
                                <td>Ukuran</td>
                                <td>Warna</td>
                                <td>Stok Aktif</td>
                                <td>Harga</td>
                                <td>Order</td>
                            </tr>
                            <?php
                            if (isset($_GET['jenis_barang'])) {
                                $jenis_barang = $_GET['jenis_barang'];
                                $data = mysqli_query(
                                    $conn,
                                    "SELECT jenis.jenis_barang, data.id_data, data.nama_barang, data.ukuran, data.satuan_ukuran, data.warna, data.stok_awal, data.satuan_stok, data.harga_jual 
                                    FROM jenis 
                                    JOIN data ON jenis.jenis_barang = data.jenis_barang 
                                    WHERE jenis.jenis_barang = '$jenis_barang';"
                                );

                                while ($b = mysqli_fetch_array($data)) {
                            ?>
                                    <tr align="center">
                                        <td><?php echo $b['nama_barang']; ?></td>
                                        <td><?php echo $b['ukuran'] . " " . $b['satuan_ukuran']; ?></td>
                                        <td><?php echo $b['warna']; ?></td>
                                        <td><?php echo $b['stok_awal'] . " " . $b['satuan_stok']; ?></td>
                                        <td><?php echo $b['harga_jual']; ?></td>
                                        <td><a href="?id_data=<?php echo urlencode($b['id_data']); ?>#order" class="btn"><i class='bx bx-cart-add'></i></a></td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<p>Silakan pilih jenis produk dari daftar produk kami di atas.</p>";
                            }
                            ?>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section id="order" class="order">
        <div class="container">
            <h2>Order</h2>
            <div class="pembelian">
                <center>
                    <form method="post" action="order_proses.php">
                        <?php
                        if (isset($_GET['id_data'])) {
                            $id_data = $_GET['id_data'];
                            $data = mysqli_query(
                                $conn,
                                "SELECT jenis.jenis_barang, data.id_data, data.nama_barang, data.ukuran, data.satuan_ukuran, data.warna, data.harga_jual
                            FROM data 
                            JOIN jenis ON data.jenis_barang = jenis.jenis_barang
                            WHERE data.id_data = $id_data;"
                            );
                            if ($b = mysqli_fetch_array($data)) {
                                // Tampilkan detail produk
                        ?>
                                <input type="hidden" name="id_data" value="<?php echo $b['id_data']; ?>">
                                <input type="hidden" name="nama_barang" value="<?php echo $b['nama_barang']; ?>">
                                <input type="hidden" name="ukuran" value="<?php echo $b['ukuran']; ?>">
                                <input type="hidden" name="satuan_ukuran" value="<?php echo $b['satuan_ukuran']; ?>">
                                <input type="hidden" name="warna" value="<?php echo $b['warna']; ?>">
                                <input type="hidden" name="harga_jual" value="<?php echo $b['harga_jual']; ?>">
                                <table>
                                    <tr>
                                        <td>Jenis Barang</td>
                                        <td>:</td>
                                        <td><?php echo $b['jenis_barang']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>:</td>
                                        <td><?php echo $b['nama_barang']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran</td>
                                        <td>:</td>
                                        <td><?php echo $b['ukuran'] . " " . $b['satuan_ukuran']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Warna</td>
                                        <td>:</td>
                                        <td><?php echo $b['warna']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Harga per Unit</td>
                                        <td>:</td>
                                        <td><?php echo "Rp " . number_format($b['harga_jual'], 2); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Anda</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama_pembeli" required></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Stok Beli</td>
                                        <td>:</td>
                                        <td><input type="text" name="stok_keluar" min="1" required></td>
                                    </tr>
                                </table>
                                <input type="submit" name="submit_order" value="Order Sekarang">
                        <?php
                            } else {
                                echo "<p>Produk tidak ditemukan.</p>";
                            }
                        } else {
                            echo "<p>Silakan pilih produk terlebih dahulu.</p>";
                        }
                        ?>
                    </form>
                </center>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Usaha Bangun Jaya berkomitmen untuk menyediakan bahan bangunan berkualitas tinggi yang dapat memenuhi semua kebutuhan konstruksi Anda.</p>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Kontak Kami</h2>
            <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami.</p>
            <a href="https://api.whatsapp.com/send?phone=6282165266171" class="btn"><i class='bx bxl-whatsapp'></i> Kontak WhatsApp</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Usaha Bangun Jaya.</p>
        </div>
    </footer>

    <script>
        AOS.init();
        const prevButton = document.querySelector('.carousel-control.prev');
        const nextButton = document.querySelector('.carousel-control.next');
        const productGrid = document.querySelector('.product-grid');

        // Tentukan lebar setiap item (product card)
        const itemWidth = document.querySelector('.product-card').offsetWidth;
        const gap = 20; // Jarak antar item, sama dengan gap di CSS
        const itemsVisible = 3; // Jumlah item yang terlihat dalam sekali tampilan

        // Hitung total lebar yang harus digeser (itemWidth + gap)
        const shiftAmount = itemWidth + gap;

        prevButton.addEventListener('click', () => {
            // Geser grid ke kiri
            const currentTransform = parseFloat(window.getComputedStyle(productGrid).transform.split(',')[4]) || 0;
            productGrid.style.transform = `translateX(${currentTransform + shiftAmount}px)`;
        });

        nextButton.addEventListener('click', () => {
            // Geser grid ke kanan
            const currentTransform = parseFloat(window.getComputedStyle(productGrid).transform.split(',')[4]) || 0;
            productGrid.style.transform = `translateX(${currentTransform - shiftAmount}px)`;
        });
    </script>
</body>

</html>