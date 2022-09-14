<?php 
    include "header_toko.php";
?>
<h2>Daftar Produk</h2>
<?php
    if($_SESSION['level'] == "petugas"){
        ?>
            <a href="tambah_produk.php" class="btn btn-primary">Tambah Produk</a>
        <?php
    }
?>

<div class="row">
    <?php 
    include "koneksitoko.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
    ?>

    <?php
        while($dt_produk=mysqli_fetch_array($qry_produk)){
    ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="tb/<?=$dt_produk['foto_produk']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                <p class="card-text"><?=substr($dt_produk['harga'], 0,20)?></p>
                <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,20)?></p>

            <?php

            if($_SESSION['level']=="pelanggan"){
                ?>
                    <a href="beli.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">beli</a>
                <?php
            }
            ?>
                
                
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer_toko.php";
?>