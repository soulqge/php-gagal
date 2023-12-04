<?php 
    include "header.php";
?>
<h2>Daftar Motor</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_produk = mysqli_query($conn, "SELECT * FROM produk");
    while ($dt_produk = mysqli_fetch_array($qry_produk)) {
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="assets/<?= $dt_produk['foto_produk'] ?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?= $dt_produk['nama_produk'] ?></h5>
                <p class="card-text"><?= substr($dt_produk['deskripsi'], 0, 20) ?></p>
                <?php
                $formatted_price = "Rp. " . number_format($dt_produk['harga'], 0, '', '.');
                ?>
                <p class="card-text"><?= $formatted_price ?></p>
                <a href="beli_barang.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>