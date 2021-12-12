<?php

    include 'connect.php';

    if(isset($_POST['submit'])){
        $id_petugas=$_POST['id_petugas'];
        $nama_petugas = $_POST['nama_petugas'];
        $jabatan = $_POST['jabatan'];

        $sql="INSERT INTO tbl_petugas (id_petugas, nama_petugas, jabatan) VALUES('$id_petugas', '$nama_petugas', '$jabatan')";
        $result = mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil ditambahkan";
            header('location:petugas.php');
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

    <title>Petugas - Kereta Api Indonesia</title>
  </head>
  <body>
    <h1 class="judul" id="judul">Tambah Data Petugas</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container" style="margin-top: 20px;">
    <form method="post">
  <div class="mb-3">
    <label>ID Petugas</label>
    <input type="number" class="form-control" name="id_petugas" placeholder="Masukkan ID Petugas anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Nama Petugas</label>
    <input type="text" class="form-control" name="nama_petugas" placeholder="Masukkan nama anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Jabatan</label>
    <input type="text" class="form-control" name="jabatan" placeholder="Masukkan jabatan anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Tambah Petugas</button>
</form>
    </div>
  </body>
</html>