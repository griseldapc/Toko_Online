<?php 
    session_start();
    include "koneksitoko.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        $lama_pengiriman=5; //satuan hari
        $tgl_sampai=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_pengiriman),date('Y')));
        mysqli_query($conn,"insert into pembelian_produk (id_petugas,tanggal_bayar,tanggal_sampai) value('".$_SESSION['id_petugas']."','".date('Y-m-d')."','".$tgl_sampai."')");
         $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_pembelian_produk (id_pembelian_produk,id_produk,qty) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil checkout produk");location.href="history_pembelian.php"</script>';
    }
?>