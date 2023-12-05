<?php
require_once('koneksi.php');
try {
	$sql = "DELETE FROM buku WHERE id=".$_GET['id'];
	$koneksi->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
  echo "<script>
	window.location.href='index.php?page=crud/index';
	</script>";
?>