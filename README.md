# Cahaya Ilmu - Online Bookstore Cart

Sistem kasir sederhana untuk toko buku online **Cahaya Ilmu**.  
Proyek ini dibuat sebagai studi kasus pembelajaran dasar pemrograman dengan **PHP**.

## ✨ Fitur
- Input data pelanggan (nama, status member).
- Input data buku (judul, jumlah, harga satuan).
- Perhitungan total harga otomatis.
- Diskon 10% untuk pelanggan member.
- Cetak struk pembelian dalam format sederhana.

## 🛠️ Teknologi
- PHP 7/8
- HTML (opsional untuk tampilan di browser)

## 📂 Struktur Project
project/
- │── kasir_toko_buku.php # Halaman utama / eksekusi struk
- │── README.md # Dokumentasi project

## 🚀 Cara Menjalankan
1. Clone repository ini:
   ```bash
   git clone https://github.com/username/nama-repo.git
Masuk ke folder project:

cd nama-repo
Jalankan project menggunakan PHP built-in server:

php -S localhost:8000
Buka browser dan akses:
http://localhost:8000


📋 Contoh Output
- ===== STRUK PEMBELIAN =====
- Nama Pelanggan : Budi Santoso
- Judul Buku     : Dasar-Dasar Pemrograman Web
- Jumlah Buku    : 2
- Harga Satuan   : Rp 85.000
- Total Awal     : Rp 170.000
- Member         : Ya
- Diskon         : Rp 17.000
- Total Bayar    : Rp 153.000
- ===========================
