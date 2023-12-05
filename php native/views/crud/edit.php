<?php
require_once('koneksi.php');
if($_POST){

	$sql = "UPDATE buku SET id='".$_POST['id']."', penerbit='".$_POST['penerbit']."', pengarang='".$_POST['pengarang']."', tahun='".$_POST['tahun']."', kategori_id='".$_POST['kategori_id']."', harga='".$_POST['harga']."' WHERE id=".$_POST['id'];

	if ($koneksi->query($sql) === TRUE) {
	    echo "<script>
	window.location.href='index.php?page=crud/index';
	</script>";
	} else {
	    echo "Gagal: " . $koneksi->error;
	}

	$koneksi->close();
	
}else{
	$query = $koneksi->query("SELECT * FROM buku WHERE id=".$_GET['id']);

	if($query->num_rows > 0){
		$data = mysqli_fetch_object($query);
	}else{
		echo "data tidak tersedia";
		die();
	}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<input type="hidden" name="id" value="<?= $data->id ?>">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" value="<?= $data->judul ?>" class="form-control" name="judul">
			</div>
			<div class="form-group">
				<label>Penerbit</label>
				<input type="text" value="<?= $data->penerbit ?>" class="form-control" name="penerbit">
			</div>
			<div class="form-group">
				<label>Pengarang</label>
				<input type="text" value="<?= $data->pengarang ?>" class="form-control" name="pengarang">
			</div>
			<div class="form-group">
				<label>Tahun</label>
				<input type="text" value="<?= $data->tahun ?>" class="form-control" name="tahun">
			</div>
			<div class="form-group">
				<label>Kategori_id</label>
				<input type="text" value="<?= $data->kategori_id ?>" class="form-control" name="kategori_id">
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input type="text" value="<?= $data->harga ?>" class="form-control" name="harga">
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="Update" value="Update">
		</form>
	</div>
</div>
<?php
}
mysqli_close($koneksi);
?>