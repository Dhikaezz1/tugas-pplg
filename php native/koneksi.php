<?php
$koneksi = new mysqli('localhost', 'root', '','buku_kita');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>