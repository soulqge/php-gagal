<!DOCTYPE html>
    <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <?php 
        include "koneksi.php";
        $qry_get_siswa=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
        $dt_siswa=mysqli_fetch_array($qry_get_siswa);
        ?>
        <h3>Update Barang</h3>
        <form action="proses_ubah_barang.php" method="post">
            <input type="hidden" name="id_produk" value= "<?=$dt_siswa['id_produk']?>">
            Nama Motor :
            <input type="text" name="nama_produk" value=   "<?=$dt_siswa['nama_produk']?>" class="form-control">
            Deskripsi : 
            <textarea name="deskripsi" class="form-control" rows="4"><?=$dt_siswa['deskripsi']?></textarea>
            Harga : 
            <input type="text" name="harga" value="<?=$dt_siswa['harga']?>" class="form-control">
            <br>
            <input type="submit" name="simpan" value="Ubah Barang" class="btn btn-primary">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
    </html>
