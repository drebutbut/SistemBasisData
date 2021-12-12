<?php

    include 'connect.php';

    $id_transaksi=$_GET['updateidtransaksi'];

    $sql="SELECT * FROM tbl_pelaksanaan WHERE id_transaksi=$id_transaksi";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $id_transaksi=$row['id_transaksi'];
    $nik=$row['nik'];
    $id_petugas=$row['id_petugas'];

    if(isset($_POST['submit'])){
        #$id_transaksi = $_POST['id_transaksi'];
        $nik = $_POST['nik'];
        $id_petugas = $_POST['id_petugas'];

        $sql="UPDATE tbl_pelaksanaan SET nik=$nik, id_petugas=$id_petugas WHERE id_transaksi=$id_transaksi";
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
    <h1 class="judul" id="judul">Sunting Data Transaksi</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container" style="margin-top: 20px;">
    <form method="post">
  <div class="mb-3">
    <label>ID Transaksi</label>
    <?php
        echo $id_transaksi;
    ?>
  </div>
  <div class="mb-3">
    <label>NIK</label>
    <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $nik;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>ID Petugas</label>
    <input type="text" class="form-control" name="id_petugas" placeholder="Masukkan ID petugas" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $id_petugas;
    ?>"/>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Sunting Transaksi</button>
</form>
    </div>
  </body>
</html>