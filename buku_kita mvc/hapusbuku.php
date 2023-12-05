<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id = '$id'";

if($connection->query($query)) {
    header("location: tabelbuku.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>