<?php
// Data transaksi
$nama_pelanggan = "Budi Santoso";
$judul_buku     = "Dasar-Dasar Pemrograman Web";
$jumlah_buku    = 2;
$harga_satuan   = 85000;
$member         = true; // true artinya pelanggan adalah member

// Fungsi untuk menghitung total harga awal
function hitungTotal($jumlah, $harga) {
    return $jumlah * $harga;
}

// Fungsi untuk menghitung diskon (10% untuk member)
function hitungDiskon($total, $member) {
    if ($member) {
        return $total * 0.10; // diskon 10%
    } else {
        return 0;
    }
}

// Fungsi untuk mencetak struk
function cetakStruk($nama, $buku, $jumlah, $harga, $total, $diskon, $total_bayar, $member) {
    echo "===== STRUK PEMBELIAN =====\n";
    echo "Nama Pelanggan : $nama \n";
    echo "Judul Buku     : $buku \n";
    echo "Jumlah Buku    : $jumlah \n";
    echo "Harga Satuan   : Rp " . number_format($harga, 0, ',', '.') . "\n";
    echo "Total Awal     : Rp " . number_format($total, 0, ',', '.') . "\n";
    echo "Member         : " . ($member ? "Ya" : "Tidak") . "\n";
    echo "Diskon         : Rp " . number_format($diskon, 0, ',', '.') . "\n";
    echo "Total Bayar    : Rp " . number_format($total_bayar, 0, ',', '.') . "\n";
    echo "===========================\n";
}

// Proses perhitungan
$total_harga = hitungTotal($jumlah_buku, $harga_satuan);
$diskon      = hitungDiskon($total_harga, $member);
$total_bayar = $total_harga - $diskon;

// Cetak hasil struk
cetakStruk($nama_pelanggan, $judul_buku, $jumlah_buku, $harga_satuan, $total_harga, $diskon, $total_bayar, $member);
?>
