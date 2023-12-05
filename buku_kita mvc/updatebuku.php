<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id    = $_POST['id'];
$judul        = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$pengarang      = $_POST['pengarang'];
$tahun       = $_POST['tahun'];
$kategori      = $_POST['kategori_id'];
$harga       = $_POST['harga'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET judul = '$judul', penerbit = '$penerbit', pengarang = '$pengarang', tahun = '$tahun', kategori_id = '$kategori', harga = '$harga' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tabelbuku.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>