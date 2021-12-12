<?php

    include 'connect.php';

    $id_jadwal=$_GET['updateidjadwal'];

    $sql="SELECT * FROM tbl_jadwal WHERE id_jadwal=$id_jadwal";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $id_jadwal=$row['id_jadwal'];
    $id_ka=$row['id_ka'];
    $id_stasiun=$row['id_stasiun'];
    $jadwal=$row['jadwal'];

    if(isset($_POST['submit'])){
        #$id_jadwal = $_POST['id_jadwal'];
        $id_ka = $_POST['id_ka'];
        $id_stasiun = $_POST['id_stasiun'];
        $jadwal = $_POST['jadwal'];

        $sql="UPDATE tbl_jadwal SET id_ka=$id_ka, id_stasiun='$id_stasiun', jadwal='$jadwal' WHERE id_jadwal=$id_jadwal";
        $result = mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil ditambahkan";
            header('location:jadwal.php');
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

    <title>Jadwal - Kereta Api Indonesia</title>
  </head>
  <body>
    <h1 class="judul" id="judul">Tambah Data Jadwal</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container" style="margin-top: 20px;">
    <form method="post">
  <div class="mb-3">
    <label>ID Kereta</label>
    <input type="number" class="form-control" name="id_ka" placeholder="Masukkan ID Kereta" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $id_ka;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>ID Stasiun</label>
    <input type="text" class="form-control" name="id_stasiun" placeholder="Masukkan ID Stasiun" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $id_stasiun;
    ?>"/>
  </div>
  <div class="mb-3">
    <label>ID Stasiun</label>
    <input type="text" class="form-control" name="jadwal" placeholder="Masukkan ID Stasiun" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off" value="<?php
        echo $jadwal;
    ?>"/>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Sunting Jadwal</button>
</form>
    </div>
  </body>
</html>