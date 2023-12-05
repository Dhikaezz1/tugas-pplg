<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>Tambah Buku</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="simpan.php" method="POST">
                <div class="form-group">
                  <label>Judul</label>
                  <input autocomplete="off" type="text" name="judul"  placeholder="Masukkan Judul" class="form-control">
                  <input type="hidden" name="id">
                </div>

                <div class="form-group">
                  <label>Penerbit</label>
                  <input autocomplete="off" type="text" name="penerbit"  placeholder="Masukkan Nama Penerbit" class="form-control">
                </div>

                <div class="form-group">
                  <label>Pengarang</label>
                  <input autocomplete="off" type="text" name="pengarang"  placeholder="Masukkan Nama Pengarang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tahun</label>
                  <input autocomplete="off" type="number" name="tahun"  placeholder="Masukkan Tahun" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kategori</label>
                  <input autocomplete="off" type="text" name="kategori_id"  placeholder="Masukkan Kategori" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input autocomplete="off" type="number" name="harga"  placeholder="Masukkan Harga" class="form-control">
                </div>
                
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>