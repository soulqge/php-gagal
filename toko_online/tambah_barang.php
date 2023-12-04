<!DOCTYPE html>
<html>
<head>
	<title>Upload file menggunakan php mysqli</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Tambah Motor</h2>
		<form action="proses_tambah_barang.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Motor :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama Kendaraan" name="nama_produk" required="required">
			</div>
			<div class="form-group">
				<label>Deskripsi :</label>
				<textarea class="form-control" name="deskripsi" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>Harga :</label>
				<input type="number" class="form-control" placeholder="Masukkan Harga Kendaraan" name="harga" required="required">
			</div>
			<div class="form-group">
				<label>Foto Kendaraan :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>
 
</body>
</html>
