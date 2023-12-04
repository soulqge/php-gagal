<?php
if($_POST){
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $telp=$_POST['telp'];
    $password= $_POST['password'];
    if(empty($nama_pelanggan)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    }
    elseif(empty($telp)){
        echo "<script>alert('Nomor Telepon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } 
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn, "INSERT INTO pelanggan VALUES(NULL,'$nama_pelanggan','$alamat','$username','$telp','$password')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Pelanggan');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>
        