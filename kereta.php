<?php

    include 'connect.php';

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
  <body style="margin-top:50px;">

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="halamanutama.php">Kereta Api Indonesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="halamanutama.php">Home</a>
            <a class="nav-link" href="penumpang.php">Penumpang</a>
            <a class="nav-link" href="petugas.php">Petugas</a>
            <a class="nav-link active" href="kereta.php">Kereta</a>
            <a class="nav-link" href="stasiun.php">Stasiun</a>
            <a class="nav-link" href="tiket.php">Tiket</a>
            <a class="nav-link" href="transaksi.php">Transaksi</a>
            <a class="nav-link" href="jadwal.php">Jadwal</a>
          </div>
        </div>
      </div>
    </nav>

    <h1 class="judul" id="judul" style="padding-top:20px;">Informasi Kereta</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="formkereta.php" class="text-light">Tambah Kereta</a></button>
    </div>

    <table class="table table-hover" style="width: 70%; margin-left:auto; margin-right:auto">
        <thead>
            <tr>
                <th scope="col">ID Kereta</th>
                <th scope="col">Nama Kereta</th>
                <th scope="col">Jenis</th>
                <th scope="col">Brand</th>
                <th scope="col">Tahun Produksi</th>
                <th scope="col">Jarak Tempuh</th>
                <th scope="col">Kapasitas</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $sql="SELECT * FROM tbl_kereta";
                $result=mysqli_query($conn, $sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id_ka=$row['id_ka'];
                        $nama_ka=$row['nama_ka'];
                        $jenis=$row['jenis'];
                        $brand=$row['brand'];
                        $tahun_produksi=$row['tahun_produksi'];
                        $jarak_tempuh=$row['jarak_tempuh'];
                        $kapasitas=$row['kapasitas'];

                        echo '<tr>
                        <th scope="row">'.$id_ka.'</th>
                        <td>'.$nama_ka.'</td>
                        <td>'.$jenis.'</td>
                        <td>'.$brand.'</td>
                        <td>'.$tahun_produksi.'</td>
                        <td>'.$jarak_tempuh.'</td>
                        <td>'.$kapasitas.'</td>
                        <td>
                            <button class="btn btn-danger"><a href="deletekereta.php?hapusidka='.$id_ka.'" class="text-light">Hapus</a></button>
                            <button class="btn btn-primary"><a href="updatekereta.php?updateidka='.$id_ka.'" class="text-light">Sunting</a></button>
                        </td>
                        </tr>';
                    }
                }

            ?>
        </tbody>
    </table>
  </body>
</html>