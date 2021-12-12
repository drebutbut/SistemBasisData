<?php

    include 'connect.php';

    $nik=$_GET['updatenik'];

    $sql="SELECT * FROM tbl_penumpang WHERE nik=$nik";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $nik=$row['nik'];
    $nama_penumpang=$row['nama_penumpang'];
    $alamat=$row['alamat'];
    $umur=$row['umur'];

    if(isset($_POST['submit'])){
        #$nik = $_POST['nik'];
        $nama_penumpang = $_POST['nama_penumpang'];
        $alamat = $_POST['alamat'];
        $umur = $_POST['umur'];

        $sql="UPDATE tbl_penumpang SET nama_penumpang='$nama_penumpang', alamat='$alamat', umur=$umur WHERE nik=$nik";
        $result = mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil disunting";
            header('location:penumpang.php');
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

    <title>Sunting Penumpang - Kereta Api Indonesia</title>
  </head>
  <body>
    <h1 class="judul" id="judul">Sunting Data Penumpang</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container" style="margin-top: 20px;">
    <form method="post">
  <div class="mb-3">
    <label>NIK</label>
    <?php
        echo $nik;
    ?>
  </div>
  <div class="mb-3">
    <label>Nama Penumpang</label>
    <input type="text" class="form-control" name="nama_penumpang" placeholder="Masukkan nama anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
      echo $nama_penumpang;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
      echo $alamat;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>Umur</label>
    <input type="number" class="form-control" name="umur" placeholder="Masukkan umur anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
      echo $umur;
    ?>"/>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Sunting Data</button>
</form>
    </div>
  </body>
</html>