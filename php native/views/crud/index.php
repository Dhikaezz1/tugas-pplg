<?php
require_once('koneksi.php');

$query = "SELECT * FROM buku";
$urlcrud = "index.php?page=crud/";
?>
<div class="row">
	<div class="col-lg-12">
		<a href="<?= $urlcrud.'create' ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		<table class="table table-hover table-bordered" style="margin-top: 10px">
			<tr class="success">
				<th width="50px">No</th>
				<th>judul</th>
				<th>penerbit</th>
				<th>pengarang</th>
				<th>tahun</th>
				<th>kategori_id</th>
				<th>harga</th>
				<th style="text-align: center;">aksi</th>
			</tr>
			<?php
			if($data=mysqli_query($koneksi,$query)){
				$a=1;
				while($obj=mysqli_fetch_object($data)){
					?>
					<tr>
						<td><?= $a ?></td>
						<td><?= $obj->judul ?></td>
						<td><?= $obj->penerbit ?></td>
						<td><?= $obj->pengarang ?></td>
						<td><?= $obj->tahun ?></td>
						<td><?= $obj->kategori_id ?></td>
						<td><?= $obj->harga ?></td>
						<td style="text-align: center;">
						<a href="<?= $urlcrud.'hapus&id='.$obj->id ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="<?= $urlcrud.'edit&id='.$obj->id ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
						</td>
					</tr>
					<?php
					$a++;
				}
				mysqli_free_result($data);
			}
			?>
		</table>
	</div>
</div>
<?php
mysqli_close($koneksi);
?>