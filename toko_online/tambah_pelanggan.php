<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
        .container{
            width: 80%;
            margin: 0 auto;
            margin-top: 5vh;

        }
        .container h3{
            text-align: center;
            color : blue;
            font-family : 'Montserrat';
        }
        .container .form-btn{
            margin-top: 3vh;
            background-color: Black;
            padding: 10px;
        }
        .container .form-btn:hover{
            background-color: red;
            color: navy;
        }
    </style>
<body>
<div class="container">
    <h3>Tambah Pelanggan</h3>
    <form action="proses_tambah_pelanggan.php" method="post">
        id pelanggan :
        <input type="text" name="id_pelanggan" value="" class="form-control">
        nama :
        <input type="text" name="nama" value="" class="form-control">
        alamat :
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        telp :
        <input type="text" name="telp" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Pelanggan" class="form-btn btn btn-primary">
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>