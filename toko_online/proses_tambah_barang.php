<?php 
include 'koneksi.php';

$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
 

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$tempdir = "assets/";
 
if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_barang.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 10440700){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], $tempdir.$xx);
		mysqli_query($conn, "INSERT INTO produk VALUES(NULL,'$nama_produk','$deskripsi','$harga','$xx')");
		header("location:tampil_barang.php?alert=berhasil");
	}else{
		header("location:tambah_barang.php?alert=gagak_ukuran");
	}
}