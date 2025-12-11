# 🏗️ Usaha Bangun Jaya - Sistem Manajemen Toko Bangunan

Aplikasi web berbasis PHP untuk manajemen toko bahan bangunan "Usaha Bangun Jaya" dengan fitur lengkap untuk admin dan pembeli.

## 📋 Deskripsi Proyek

Sistem manajemen toko bangunan yang memungkinkan admin untuk mengelola produk, jenis produk, pesanan, dan perhitungan penghasilan. Pembeli dapat melihat katalog produk dan melakukan pemesanan secara online.

## ✨ Fitur Utama

### 👨‍💼 Panel Admin
- **Dashboard Admin**: Tampilan overview dan navigasi menu admin
- **Manajemen Data Produk**: 
  - CRUD (Create, Read, Update, Delete) data produk
  - Pencarian produk berdasarkan nama
  - Pencarian produk berdasarkan jenis
- **Manajemen Jenis Produk**:
  - Tambah, edit, dan hapus jenis produk
  - Lihat detail jenis produk
- **Manajemen Pesanan**: 
  - Lihat dan kelola pesanan pembeli
- **Perhitungan Penghasilan**:
  - Hitung dan kelola laporan penghasilan
  - Hapus data penghasilan

### 🛒 Panel Pembeli
- **Halaman Utama**: Tampilan katalog produk dengan desain modern
- **Form Pemesanan**: Sistem order produk yang user-friendly
- **Navigasi Lengkap**: Beranda, Produk, Order, Tentang Kami, Kontak

### 🔐 Autentikasi
- Sistem login dengan session management
- Logout dengan konfirmasi
- Proteksi halaman admin dari akses tidak sah

## 🛠️ Teknologi yang Digunakan

- **Backend**: PHP (Native)
- **Database**: MySQL
- **Frontend**: HTML5, CSS3
- **Icons**: Boxicons
- **Animation**: AOS (Animate On Scroll)
- **Fonts**: Google Fonts (Faculty Glyphic)

## 📁 Struktur Direktori

```
pemwebakhir/
├── admin/                      # Folder halaman admin
│   ├── dashboard.php          # Dashboard admin
│   ├── data.php               # Halaman manajemen data produk
│   ├── data_s_nama.php        # Pencarian produk by nama
│   ├── data_s_jenis.php       # Pencarian produk by jenis
│   ├── data_t_nama.php        # Tambah produk by nama
│   ├── data_t_jenis.php       # Tambah produk by jenis
│   ├── data_hapus.php         # Hapus data produk
│   ├── lihat_jenis.php        # Lihat jenis produk
│   ├── edit_jenis.php         # Edit jenis produk
│   ├── update_jenis.php       # Update jenis produk
│   ├── delete_jenis.php       # Hapus jenis produk
│   ├── edit_nama.php          # Edit nama produk
│   ├── update_nama.php        # Update nama produk
│   ├── delete_nama.php        # Hapus nama produk
│   ├── pesanan.php            # Manajemen pesanan
│   ├── penghasilan.php        # Halaman penghasilan
│   ├── penghasilan_hitung.php # Hitung penghasilan
│   └── penghasilan_delete.php # Hapus data penghasilan
├── css/                        # Folder stylesheet
│   ├── dashboard.css          # Style dashboard admin
│   ├── home.css               # Style halaman pembeli
│   ├── login.css              # Style halaman login
│   ├── read.css               # Style halaman read data
│   └── logo.png               # Logo aplikasi
├── foto/                       # Folder untuk menyimpan foto produk
├── pembeli/                    # Folder halaman pembeli
│   ├── home.php               # Halaman utama pembeli
│   └── order_proses.php       # Proses pemesanan
├── index.php                   # Halaman login
├── koneksi.php                 # Konfigurasi database
├── login_proses.php            # Proses autentikasi login
├── logout_proses.php           # Proses logout
├── form.php                    # Form tambahan
└── README.md                   # Dokumentasi proyek
```

## 🚀 Cara Instalasi

### Prasyarat
- XAMPP (atau server lokal lain dengan PHP & MySQL)
- Web Browser (Chrome, Firefox, Edge, dll)

### Langkah Instalasi

1. **Clone atau Download Proyek**
   ```bash
   # Letakkan folder di htdocs XAMPP
   C:\xampp\htdocs\pemwebakhir
   ```

2. **Buat Database**
   - Buka phpMyAdmin (`http://localhost/phpmyadmin`)
   - Buat database baru dengan nama: `pemwebakhir`
   - Import file SQL jika tersedia, atau buat tabel sesuai kebutuhan

3. **Konfigurasi Database**
   - Buka file `koneksi.php`
   - Sesuaikan konfigurasi jika diperlukan:
   ```php
   $conn = mysqli_connect('localhost', 'root', '', 'pemwebakhir');
   ```

4. **Jalankan Aplikasi**
   - Start Apache dan MySQL di XAMPP Control Panel
   - Buka browser dan akses: `http://localhost/pemwebakhir`

## 🔑 Akun Login Default

```
Username: usahabj
Password: saleh123
```

> ⚠️ **Penting**: Ganti username dan password default setelah instalasi untuk keamanan!

## 💻 Cara Penggunaan

### Login Admin
1. Akses `http://localhost/pemwebakhir`
2. Masukkan username dan password
3. Klik tombol Login
4. Anda akan diarahkan ke Dashboard Admin

### Manajemen Produk
1. Login sebagai admin
2. Pilih menu "Data" di sidebar
3. Gunakan fitur:
   - **Tambah**: Untuk menambah produk baru
   - **Edit**: Untuk mengubah data produk
   - **Hapus**: Untuk menghapus produk
   - **Cari**: Untuk mencari produk berdasarkan nama/jenis

### Manajemen Pesanan
1. Login sebagai admin
2. Pilih menu "Pesanan" di sidebar
3. Lihat dan kelola pesanan dari pembeli

### Halaman Pembeli
- Akses langsung ke `http://localhost/pemwebakhir/pembeli/home.php`
- Jelajahi produk dan lakukan pemesanan

## 🎨 Fitur Desain

- ✅ Responsive Design
- ✅ Modern UI/UX
- ✅ Animasi AOS (Animate On Scroll)
- ✅ Icon Boxicons yang menarik
- ✅ Custom Fonts dari Google Fonts

## 🔒 Keamanan

- Session-based authentication
- Protected admin pages
- Auto-redirect untuk user yang tidak terautentikasi
- Session management untuk logout

## 📱 Screenshot

> Tambahkan screenshot aplikasi Anda di sini untuk dokumentasi yang lebih baik

## 🤝 Kontribusi

Proyek ini dibuat untuk tugas akhir Pemrograman Web. Saran dan masukan sangat diterima!

## 📝 Catatan Pengembangan

- Versi PHP: 7.x atau lebih tinggi
- Database: MySQL 5.x atau lebih tinggi
- Server: Apache (XAMPP)

## 👨‍💻 Developer

Dikembangkan sebagai tugas akhir mata kuliah Pemrograman Web

## 📄 Lisensi

Proyek ini dibuat untuk keperluan edukasi

---

<div align="center">
  <strong>🏗️ Usaha Bangun Jaya</strong><br>
  Solusi Manajemen Toko Bangunan Modern
</div>
