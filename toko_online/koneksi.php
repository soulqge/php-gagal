<?php

$conn=mysqli_connect('localhost','root','','toko_online');

if (mysqli_connect_error()){
    printf("Koneksi Gagal : %s/n",mysqli_connect_error());
    exit();
}
?>