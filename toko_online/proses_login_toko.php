<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $level=$_POST['level'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login_toko.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login_toko.php';</script>";
        } else {
            include "koneksitoko.php";
            $qry_login=mysqli_query($conn,"select * from petugas where username = '".$username."' and password = '".$password."' and level = '".$level."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();

                if($dt_login['level']=="petugas"){
                    $_SESSION['id_petugas']=$dt_login['id_petugas'];
                    $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
                    $_SESSION['level']= "petugas";
                    $_SESSION['status_login']=true;
                    header("location: home_toko.php");
                }else if($dt_login['level'] == "pelanggan"){
                    $_SESSION['id_petugas']=$dt_login['id_petugas'];
                    $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
                    $_SESSION['level']= "pelanggan";
                    $_SESSION['status_login']=true;
                    header("location: home_toko.php");
                }
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login_toko.php';</script>";
            }
        }
    }
?>