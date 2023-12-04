<?php
if($_POST){
    $id_pelanggan = $_POST['id_pelanggan']; // Assuming you have the ID passed via POST
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];
    
    if(empty($nama_pelanggan)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tapil_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update = mysqli_query($conn,"UPDATE pelanggan SET nama_pelanggan='".$nama_pelanggan."', alamat='".$alamat."', username='".$username."', telp='".$telp."' WHERE id_pelanggan = '".$id_pelanggan."' ");
            if($update){
                echo "<script>alert('Sukses update Pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update Pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        } else {
            $update = mysqli_query($conn,"UPDATE pelanggan SET nama_pelanggan='".$nama_pelanggan."', alamat='".$alamat."', username='".$username."', telp='".$telp."', password='".$password."' WHERE id_pelanggan = '".$id_pelanggan."' ");
            if($update){
                echo "<script>alert('Sukses update Pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update Pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        }
    }
}
?>
