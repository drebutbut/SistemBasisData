<?php

    include 'connect.php';

    if(isset($_POST['submit'])){
        #$id_transaksi = $_POST['id_transaksi'];
        $nik = $_POST['nik'];
        $id_petugas = $_POST['id_petugas'];

        $sql="INSERT INTO tbl_pelaksanaan (id_transaksi, nik, id_petugas) VALUES('', '$nik', '$id_petugas')";
        $result = mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil ditambahkan";
            header('location:transaksi.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"/>

    <title>Transaksi - Kereta Api Indonesia</title>
  </head>
  <body>
    <h1 class="judul" id="judul">Tambah Data Transaksi</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container" style="margin-top: 20px;">
    <form method="post">
  <div class="mb-3">
    <label>NIK</label>
    <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>ID Petugas</label>
    <input type="text" class="form-control" name="id_petugas" placeholder="Masukkan ID petugas" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Tambah Transaksi</button>
</form>
    </div>
  </body>
</html>