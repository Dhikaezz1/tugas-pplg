<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id    = $_POST['id'];
$nama        = $_POST['nama'];
$username = $_POST['username'];
$password      = $_POST['password'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: tabeluser.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>