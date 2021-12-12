<?php

    include 'connect.php';

    if(isset($_POST['submit'])){
        $id_stasiun = $_POST['id_stasiun'];
        $nama_stasiun = $_POST['nama_stasiun'];
        $kota = $_POST['kota'];

        $sql="INSERT INTO tbl_stasiun (id_stasiun, nama_stasiun, kota) VALUES('$id_stasiun', '$nama_stasiun', '$kota')";
        $result = mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil ditambahkan";
            header('location:stasiun.php');
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

    <title>Stasiun - Kereta Api Indonesia</title>
  </head>
  <body>
    <h1 class="judul" id="judul">Tambah Data Stasiun</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container" style="margin-top: 20px;">
    <form method="post">
  <div class="mb-3">
    <label>ID Stasiun</label>
    <input type="text" class="form-control" name="id_stasiun" placeholder="Masukkan ID stasiun (3 huruf kapital)" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Nama Stasiun</label>
    <input type="text" class="form-control" name="nama_stasiun" placeholder="Masukkan nama stasiun" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Kota</label>
    <input type="text" class="form-control" name="kota" placeholder="Masukkan kota asal stasiun" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Tambah Stasiun</button>
</form>
    </div>
  </body>
</html>