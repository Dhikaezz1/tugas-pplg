<?php
require_once('koneksi.php');
if($_POST){
	try {
		$sql = "INSERT INTO buku (judul,penerbit,pengarang,tahun,kategori_id,harga) VALUES ('".$_POST['judul']."','".$_POST['penerbit']."','".$_POST['pengarang']."','".$_POST['tahun']."','".$_POST['kategori_id']."','".$_POST['harga']."')";
		if(!$koneksi->query($sql)){
			echo $koneksi->error;
			die();
		}

	} catch (Exception $e) {
		echo $e;
		die();
	}
	  echo "<script>
	window.location.href='index.php?page=crud/index';
	</script>";
}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" value="" class="form-control" name="judul">
			</div>
			<div class="form-group">
				<label>Penerbit</label>
				<input type="text" value="" class="form-control" name="penerbit">
			</div>
			<div class="form-group">
				<label>Pengarang</label>
				<input type="text" value="" class="form-control" name="pengarang">
			</div>
			<div class="form-group">
				<label>Tahun</label>
				<input type="text" value="" class="form-control" name="tahun">
			</div>
			<div class="form-group">
				<label>Kategori_id</label>
				<input type="text" value="" class="form-control" name="kategori_id">
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input type="text" value="" class="form-control" name="harga">
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="create" value="Create">
		</form>
	</div>
</div>