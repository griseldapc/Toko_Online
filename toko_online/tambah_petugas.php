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
    <h3>Tambah Petugas</h3>
    <form action="proses_tambah_petugas.php" method="post">
        id petugas :
        <input type="text" name="id_petugas" value="" class="form-control">
        nama petugas :
        <input type="text" name="nama_petugas" value="" class="form-control">
        username :
        <input type="text" name="username" value="" class="form-control">
        password :
        <input type="text" name="password" value="" class="form-control">
        level : 
        <select name="level" class="form-control">
            <option></option>
            <option value="petugas">Petugas</option>
            <option value="pelanggan">Pelanggan</option>
        </select>
        <input type="submit" name="simpan" value="Tambah Petugas" class="form-btn btn btn-primary">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>