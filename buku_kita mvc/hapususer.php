<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM user WHERE id = '$id'";

if($connection->query($query)) {
    header("location: tabeluser.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>