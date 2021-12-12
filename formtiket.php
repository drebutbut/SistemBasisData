<?php

    include 'connect.php';

    if(isset($_POST['submit'])){
        #$id_tiket = $_POST['id_tiket'];
        $id_ka = $_POST['id_ka'];
        $id_petugas = $_POST['id_petugas'];
        $nik = $_POST['nik'];
        $nama_penumpang = $_POST['nama_penumpang'];
        $asal = $_POST['asal'];
        $tujuan = $_POST['tujuan'];
        $waktu = $_POST['waktu'];
        $no_bangku = $_POST['no_bangku'];
        $kelas = $_POST['kelas'];
        $harga = $_POST['harga'];

        $sql="INSERT INTO tbl_tiket (id_tiket, id_ka, id_petugas, nik, nama_penumpang, asal, tujuan, waktu, no_bangku, kelas, harga) VALUES('', '$id_ka', '$id_petugas', '$nik', '$nama_penumpang', '$asal', '$tujuan', '$waktu', '$no_bangku', '$kelas', '$harga')";
        $result = mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil ditambahkan";
            header('location:tiket.php');
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

    <title>Tiket - Kereta Api Indonesia</title>
  </head>
  <body>
    <h1 class="judul" id="judul">Tambah Data Tiket</h1>
    <h2 class="judul" id="subjudul">Kereta Api Indonesia</h2>
    <br/>

    <div class="container" style="margin-top: 20px;">
    <form method="post">
  <div class="mb-3">
    <label>ID Kereta</label>
    <input type="number" class="form-control" name="id_ka" placeholder="Masukkan ID kereta anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
  <label>ID Petugas</label>
    <input type="number" class="form-control" name="id_petugas" placeholder="Masukkan ID petugas yang melayani anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
  <label>NIK</label>
    <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Nama Penumpang</label>
    <input type="text" class="form-control" name="nama_penumpang" placeholder="Masukkan nama anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Asal</label>
    <input type="text" class="form-control" name="asal" placeholder="Masukkan ID stasiun asal anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Tujuan</label>
    <input type="text" class="form-control" name="tujuan" placeholder="Masukkan ID stasiun tujuan anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Waktu</label>
    <input type="text" class="form-control" name="waktu" placeholder="Masukkan waktu keberangkatan anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
    <label>Nomor Bangku</label>
    <input type="number" class="form-control" name="no_bangku" placeholder="Masukkan nomor bangku anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <div class="mb-3">
  <label>Kelas</label>
    <select class="form-control" name="kelas">
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Harga Tiket</label>
    <input type="number" class="form-control" name="harga" placeholder="Masukkan harga tiket anda" style="margin-top: 0px; margin-bottom: 0px;" autocomplete="off"/>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Tambah Tiket</button>
</form>
    </div>
  </body>
</html>