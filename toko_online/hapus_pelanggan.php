<?php 
    if(($_GET['id_pelanggan'])){
        include "koneksi.php";
        $qry_hapus = mysqli_query($conn, "DELETE FROM pelanggan WHERE id_pelanggan = '".$_GET['id_pelanggan']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus Pelanggan');location.href='tampil_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus Pelanggan');location.href='tampil_pelanggan.php';</script>";
        }
    }
?>
