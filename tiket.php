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

    <title>Tiket - Kereta Api Indonesia</title>
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
            <a class="nav-link" href="kereta.php">Kereta</a>
            <a class="nav-link" href="stasiun.php">Stasiun</a>
            <a class="nav-link active" href="tiket.php">Tiket</a>
            <a class="nav-link" href="transaksi.php">Transaksi</a>
            <a class="nav-link" href="jadwal.php">Jadwal</a>
          </div>
        </div>
      </div>
    </nav>

    <h1 class="judul" id="judul" style="padding-top:20px;">Informasi Tiket</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="formtiket.php" class="text-light">Tambah Tiket</a></button>
    </div>

    <table class="table table-hover" style="width: 70%; margin-left:auto; margin-right:auto">
        <thead>
            <tr>
                <th scope="col">ID Tiket</th>
                <th scope="col">ID Kereta</th>
                <th scope="col">ID Petugas</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Penumpang</th>
                <th scope="col">Asal</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Waktu</th>
                <th scope="col">No Bangku</th>
                <th scope="col">Kelas</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $sql="SELECT * FROM tbl_tiket";
                $result=mysqli_query($conn, $sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id_tiket=$row['id_tiket'];
                        $id_ka=$row['id_ka'];
                        $id_petugas=$row['id_petugas'];
                        $nik=$row['nik'];
                        $nama_penumpang=$row['nama_penumpang'];
                        $asal=$row['asal'];
                        $tujuan=$row['tujuan'];
                        $waktu=$row['waktu'];
                        $no_bangku=$row['no_bangku'];
                        $kelas=$row['kelas'];
                        $harga=$row['harga'];

                        echo '<tr>
                        <th scope="row">'.$id_tiket.'</th>
                        <td>'.$id_ka.'</td>
                        <td>'.$id_petugas.'</td>
                        <td>'.$nik.'</td>
                        <td>'.$nama_penumpang.'</td>
                        <td>'.$asal.'</td>
                        <td>'.$tujuan.'</td>
                        <td>'.$waktu.'</td>
                        <td>'.$no_bangku.'</td>
                        <td>'.$kelas.'</td>
                        <td>'.$harga.'</td>
                        <td>
                            <button class="btn btn-danger"><a href="deletetiket.php?hapusidtiket='.$id_tiket.'" class="text-light">Hapus</a></button>
                            <button class="btn btn-primary"><a href="updatetiket.php?updateidtiket='.$id_tiket.'" class="text-light">Sunting</a></button>
                        </td>
                        </tr>';
                    }
                }

            ?>
        </tbody>
    </table>
  </body>
</html>