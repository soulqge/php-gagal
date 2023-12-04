<?php
if($_POST){
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
     
    if(empty($nama_produk)){
        echo "<script>alert('Nama Produk Tidak Boleh Kosong');location.href='tampil_barang.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('Harga Harus Diisi');location.href='tampil_barang.php';</script>";
    } else {
        include "koneksi.php";     
        $update = mysqli_query($conn,"UPDATE produk SET nama_produk='".$nama_produk."', deskripsi='".$deskripsi."',harga='".$harga."' WHERE id_produk = '".$id_produk."' ");
        if($update){
        echo "<script>alert('Sukses update Barang');location.href='tampil_barang.php';</script>";
        } else {
        echo "<script>alert('Gagal update Barang');location.href='ubah_barang.php?id_produk=".$id_produk."';</script>";
        }
        
    }
}
?>
