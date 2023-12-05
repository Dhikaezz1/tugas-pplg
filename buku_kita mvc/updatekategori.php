<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id    = $_POST['id'];
$kategori    = $_POST['nama_kategori'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE kategori SET nama_kategori = '$kategori' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tabelkategori.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>