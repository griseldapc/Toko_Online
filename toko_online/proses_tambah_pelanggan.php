<?php
if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    
    if(empty($id_pelanggan)){
        echo "<script>alert('id pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('telp tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksitoko.php";
        $insert=mysqli_query($conn,"insert into pelanggan (id_pelanggan, nama, alamat, telp) value ('".$id_pelanggan."','".$nama."','".$alamat."','".$telp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>