<?php

    include 'connect.php';

    $id_ka=$_GET['updateidka'];

    $sql="SELECT * FROM tbl_kereta WHERE id_ka=$id_ka";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $id_ka=$row['id_ka'];
    $nama_ka=$row['nama_ka'];
    $jenis=$row['jenis'];
    $brand=$row['brand'];
    $tahun_produksi=$row['tahun_produksi'];
    $jarak_tempuh=$row['jarak_tempuh'];
    $kapasitas=$row['kapasitas'];

    if(isset($_POST['submit'])){
        #$id_ka = $_POST['id_ka'];
        $nama_ka = $_POST['nama_ka'];
        $jenis = $_POST['jenis'];
        $brand = $_POST['brand'];
        $tahun_produksi = $_POST['tahun_produksi'];
        $jarak_tempuh = $_POST['jarak_tempuh'];
        $kapasitas = $_POST['kapasitas'];

        $sql="UPDATE tbl_kereta SET nama_ka='$nama_ka', jenis='$jenis', brand='$brand', tahun_produksi=$tahun_produksi, jarak_tempuh=$jarak_tempuh, kapasitas=$kapasitas WHERE id_ka=$id_ka";
        $result = mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil disunting";
            header('location:kereta.php');
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

    <title>Kereta - Kereta Api Indonesia</title>
  </head>
  <body>
    <h1 class="judul" id="judul">Tambah Data Kereta</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container" style="margin-top: 20px;">
    <form method="post">
  <div class="mb-3">
    <label>ID Kereta</label>
    <?php
        echo $id_ka;
    ?>
  </div>
  <div class="mb-3">
    <label>Nama Kereta</label>
    <input type="text" class="form-control" name="nama_ka" placeholder="Masukkan nama kereta" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $nama_ka;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>Jenis</label>
    <select class="form-control" name="jenis" autocomplete="off" value="<?php
        echo $jenis;
    ?>">
        <option value="Kereta Api">Kereta Api</option>
        <option value="Kereta Listrik">Kereta Listrik</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Brand</label>
    <input type="text" class="form-control" name="brand" placeholder="Masukkan brand kereta" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $brand;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>Tahun Produksi</label>
    <input type="number" class="form-control" name="tahun_produksi" placeholder="Masukkan tahun produksi kereta" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $tahun_produksi;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>Jarak Tempuh</label>
    <input type="number" class="form-control" name="jarak_tempuh" placeholder="Masukkan jarak kereta kereta" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $jarak_tempuh;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>Kapasitas</label>
    <input type="number" class="form-control" name="kapasitas" placeholder="Masukkan kapasitas kereta" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $kapasitas;
    ?>"/>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Sunting Kereta</button>
</form>
    </div>
  </body>
</html>