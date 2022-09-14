<?php 
include 'koneksitoko.php';
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$ekstensi =  array('png','jpg','jpeg','gif','JPG');
$filename = $_FILES['foto_produk']['name'];
$ukuran = $_FILES['foto_produk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_produk.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx =$filename;
		move_uploaded_file($_FILES['foto_produk']['tmp_name'], 'foto_produk/'.''.$filename);
		mysqli_query($conn, "INSERT INTO produk VALUES(NULL,'$nama_produk','$deskripsi','$harga','$xx')");
		echo "<script>alert('Sukses menambahkan produk');location.href='tambah_produk.php';</script>";
	}else{
		echo "<script>alert('File melebihi kapasitas yang ditentukan');location.href='tambah_produk.php';</script>";
	}
}
?>