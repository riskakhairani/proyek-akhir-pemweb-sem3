-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2024 pada 14.19
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemwebakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `jenis_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `ukuran` float DEFAULT NULL,
  `satuan_ukuran` enum('cm','inch','') DEFAULT NULL,
  `warna` enum('hitam','merah','abu-abu','cokelat','biru','kuning','hijau','perunggu','') DEFAULT NULL,
  `stok_awal` int(3) NOT NULL,
  `satuan_stok` enum('pcs','kg','liter','meter') NOT NULL,
  `harga_pokok` int(6) NOT NULL,
  `harga_jual` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id_data`, `jenis_barang`, `nama_barang`, `ukuran`, `satuan_ukuran`, `warna`, `stok_awal`, `satuan_stok`, `harga_pokok`, `harga_jual`) VALUES
(1, 'Kulit Syntetic', 'Spon', 0, '', 'hitam', 37, 'meter', 30000, 37000),
(2, 'Kulit Syntetic', 'Spon', 0, '', 'merah', 35, 'meter', 30000, 37000),
(3, 'Kulit Syntetic', 'Spon', 0, '', 'biru', 26, 'meter', 30000, 37000),
(4, 'Kulit Syntetic', 'Spon', 0, '', 'kuning', 20, 'meter', 30000, 37000),
(5, 'Kulit Syntetic', 'Spon', 0, '', 'hijau', 20, 'meter', 30000, 37000),
(6, 'Kulit Syntetic', 'Myo', 0, '', 'hitam', 33, 'meter', 47000, 55000),
(7, 'Kulit Syntetic', 'Myo', 0, '', 'abu-abu', 21, 'meter', 47000, 55000),
(8, 'Kulit Syntetic', 'Myo', 0, '', 'cokelat', 19, 'meter', 47000, 55000),
(9, 'Kulit Syntetic', 'MBTech', 0, '', 'hitam', 18, 'meter', 125000, 140000),
(10, 'Kulit Syntetic', 'Aston', 0, '', 'merah', 21, 'meter', 27000, 35000),
(11, 'Kulit Syntetic', 'Napa Silk', 0, '', 'cokelat', 17, 'meter', 90000, 110000),
(12, 'Kulit Syntetic', 'Napa Silk', 0, '', 'kuning', 14, 'meter', 90000, 110000),
(13, 'Paku', 'Paku Kayu', 0.5, 'inch', '', 20, 'kg', 14000, 20000),
(14, 'Paku', 'Paku Kayu', 1, 'inch', '', 15, 'kg', 14000, 20000),
(15, 'Paku', 'Paku Kayu', 1.5, 'inch', '', 12, 'kg', 14000, 20000),
(16, 'Paku', 'Paku Kayu', 2, 'inch', '', 8, 'kg', 14000, 20000),
(17, 'Paku', 'Paku Antik', 0, '', 'kuning', 15, 'pcs', 25000, 45000),
(18, 'Paku', 'Paku Antik', 0, '', 'perunggu', 9, 'pcs', 25000, 45000),
(19, 'Paku', 'Paku Sepatu', 0, '', '', 18, 'pcs', 7000, 12000),
(20, 'Cairan', 'Sanding', 0, '', '', 15, 'liter', 40000, 50000),
(21, 'Cairan', 'Sherlak Cair', 0, '', '', 18, 'liter', 31000, 40000),
(22, 'Cairan', 'Clear', 0, '', '', 14, 'liter', 37000, 55000),
(23, 'Busa', 'Busa Biasa', 1, 'cm', 'kuning', 10, 'pcs', 17500, 25000),
(24, 'Busa', 'Busa Biasa', 2, 'cm', 'kuning', 8, 'pcs', 35000, 50000),
(25, 'Busa', 'Busa Biasa', 3, 'cm', 'kuning', 13, 'pcs', 52500, 75000),
(26, 'Busa', 'Busa Biasa', 4, 'cm', 'kuning', 6, 'pcs', 70000, 100000),
(27, 'Busa', 'Busa Biasa', 1, 'cm', 'biru', 15, 'pcs', 21500, 30000),
(28, 'Busa', 'Busa Biasa', 2, 'cm', 'biru', 25, 'pcs', 43000, 60000),
(29, 'Busa', 'Busa Biasa', 3, 'cm', 'biru', 18, 'pcs', 64500, 90000),
(30, 'Busa', 'Busa Biasa', 4, 'cm', 'biru', 11, 'pcs', 86000, 120000),
(31, 'Busa', 'Busa Premium', 1, 'cm', 'kuning', 15, 'pcs', 31000, 45000),
(32, 'Busa', 'Busa Premium', 2, 'cm', 'kuning', 19, 'pcs', 62000, 90000),
(33, 'Busa', 'Busa Premium', 3, 'cm', 'kuning', 9, 'pcs', 93000, 135000),
(34, 'Busa', 'Busa Premium', 1, 'cm', 'biru', 13, 'pcs', 26000, 48000),
(35, 'Busa', 'Busa Premium', 2, 'cm', 'biru', 13, 'pcs', 52000, 96000),
(36, 'Busa', 'Busa Premium', 3, 'cm', 'biru', 7, 'pcs', 78000, 144000),
(37, 'Busa', 'Busa Lapis', 0.5, 'cm', '', 8, 'meter', 12000, 17000),
(38, 'Busa', 'Busa Lapis', 1, 'cm', '', 25, 'meter', 23000, 30000),
(39, 'Cairan', 'Thinner Biasa', 0, '', '', 20, 'liter', 17000, 20000),
(40, 'Cairan', 'Thinner Premium', 0, '', '', 19, 'liter', 23000, 25000),
(41, 'Cairan', 'Spirtus', 0, '', '', 15, 'liter', 8000, 17000),
(42, 'Tenda', 'Orchid', 0, '', 'hitam', 15, 'meter', 50000, 65000),
(43, 'Tenda', 'Unica', 0, '', 'hitam', 18, 'meter', 55000, 65000),
(44, 'Tenda', 'Unica', 0, '', 'hijau', 5, 'meter', 55000, 65000),
(45, 'Tenda', 'Royal', 0, '', 'hitam', 25, 'pcs', 40000, 48000),
(46, 'Tenda', 'Royal', 0, '', 'hijau', 16, 'meter', 40000, 48000),
(47, 'Ukiran', 'Ukiran Kipas', 0, '', 'hitam', 18, 'pcs', 7000, 10000),
(48, 'Ukiran', 'Mahkota Besar', 0, '', '', 9, 'pcs', 145000, 165000),
(49, 'Ukiran', 'Padi', 0, '', '', 15, 'pcs', 14000, 17000),
(50, 'Triplek', 'Triplek No3', 0, '', '', 7, 'pcs', 40000, 50000),
(51, 'Triplek', 'Triplek No4', 0, '', '', 6, 'pcs', 42000, 60000),
(52, 'Triplek', 'Triplek No5', 0, '', '', 11, 'pcs', 55000, 75000),
(53, 'Triplek', 'Ulir No2', 0, '', '', 20, 'pcs', 7000, 10000),
(54, 'Triplek', 'Ulir No3', 0, '', '', 27, 'pcs', 13000, 15000),
(56, 'Material', 'Lem Q-Bond', 0, '', '', 15, 'pcs', 17000, 25000),
(57, 'Material', 'Lem Fox Besar', 0, '', '', 11, 'pcs', 18000, 23000),
(58, 'Material', 'Lem Fox Kecil', 0, '', '', 23, 'pcs', 11000, 14000),
(59, 'Material', 'Kancing', 0, '', '', 125, 'pcs', 650, 1000),
(60, 'Material', 'Kertas Pasir', 0, '', '', 50, 'meter', 5000, 10000),
(61, 'Triplek', 'Ulir No4', 0, '', '', 17, 'pcs', 14000, 16000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_barang` varchar(15) NOT NULL,
  `foto_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis_barang`, `foto_barang`) VALUES
(1, 'Kulit Syntetic', 'Kulit Syntetic.jpg'),
(2, 'Paku', 'Paku.jpg'),
(3, 'Cairan', 'Cairan.jpg'),
(4, 'Busa', 'Busa.jpg'),
(5, 'Material', 'Material.jpg'),
(6, 'Tenda', 'Tenda.jpg'),
(7, 'Triplek', 'Triplek.jpg'),
(8, 'Ukiran', 'Ukiran.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuntungan`
--

CREATE TABLE `keuntungan` (
  `id_keuntungan` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `total_pendapatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keuntungan`
--

INSERT INTO `keuntungan` (`id_keuntungan`, `tanggal_mulai`, `tanggal_selesai`, `total_pendapatan`) VALUES
(1, '2024-12-12', '2024-12-14', 95000),
(2, '2024-12-14', '2024-12-20', 237250);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_jual` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL DEFAULT current_timestamp(),
  `nama_pembeli` varchar(50) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `ukuran` float DEFAULT NULL,
  `satuan_ukuran` enum('cm','inch','') DEFAULT NULL,
  `warna` enum('hitam','merah','abu-abu','cokelat','biru','kuning','hijau','perunggu','') DEFAULT NULL,
  `stok_keluar` int(3) NOT NULL,
  `uang_masuk` int(6) NOT NULL,
  `keuntungan` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_jual`, `tanggal_pembelian`, `nama_pembeli`, `nama_barang`, `ukuran`, `satuan_ukuran`, `warna`, `stok_keluar`, `uang_masuk`, `keuntungan`) VALUES
(1, '2024-12-13', 'Uwaa', 'Myo', 0, '', 'cokelat', 4, 220000, 32000),
(2, '2024-12-13', 'Najmi', 'Paku Kayu', 1, 'inch', '', 3, 60000, 18000),
(3, '2024-12-13', 'Teguh', 'Sherlak Cair', 0, '', '', 5, 200000, 45000),
(4, '2024-12-15', 'Buyung', 'Busa Biasa', 1, 'cm', 'biru', 5, 150000, 42500),
(5, '2024-12-15', 'Ucok', 'Busa Lapis', 0.5, 'cm', '', 7, 119000, 35000),
(6, '2024-12-15', 'Rangkuti', 'Kancing', 0, '', '', 25, 25000, 8750),
(7, '2024-12-15', 'Rosidah', 'Unica', 0, '', 'hijau', 6, 390000, 60000),
(8, '2024-12-15', 'Rahmat', 'Triplek No4', 0, '', '', 3, 180000, 54000),
(9, '2024-12-15', 'Aan', 'Padi', 0, '', '', 4, 68000, 12000),
(10, '2024-12-15', 'Budi', 'Kertas Pasir', 0, '', '', 5, 50000, 25000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `jenis_barang` (`jenis_barang`);

--
-- Indeks untuk tabel `keuntungan`
--
ALTER TABLE `keuntungan`
  ADD PRIMARY KEY (`id_keuntungan`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_jual`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keuntungan`
--
ALTER TABLE `keuntungan`
  MODIFY `id_keuntungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
