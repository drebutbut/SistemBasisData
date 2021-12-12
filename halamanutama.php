<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"/>

    <title>Kereta Api Indonesia</title>
  </head>
  <body style="margin: 50px;">

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="halamanutama.php">Kereta Api Indonesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="halamanutama.php">Home</a>
            <a class="nav-link" href="penumpang.php">Penumpang</a>
            <a class="nav-link" href="petugas.php">Petugas</a>
            <a class="nav-link" href="kereta.php">Kereta</a>
            <a class="nav-link" href="stasiun.php">Stasiun</a>
            <a class="nav-link" href="tiket.php">Tiket</a>
            <a class="nav-link" href="transaksi.php">Transaksi</a>
            <a class="nav-link" href="jadwal.php">Jadwal</a>
          </div>
        </div>
      </div>
    </nav>

    <h1 class="judul" id="judul" style="padding-top:20px;">Kereta Api Indonesia</h1>
    <h2 class="judul" id="subjudul">Temukan perjalanan anda</h2>
    <br/>

    <h2 class="header" id="header-2">Data Penumpang</h2>
    <p id="text-main">Buat, temukan, ubah, dan hapus data penumpang anda.</p>
    <a class="btn btn-primary" href="penumpang.php" role="button" id="button-cari">Cari Penumpang</a>

    <h2 class="header" id="header-2">Data Petugas</h2>
    <p id="text-main">Buat, temukan, ubah, dan hapus data petugas anda.</p>
    <a class="btn btn-primary" href="petugas.php" role="button" id="button-cari">Cari Petugas</a>

    <h2 class="header" id="header-2">Data Kereta</h2>
    <p id="text-main">Temukan informasi kereta yang akan anda gunakan untuk berpergian.</p>
    <a class="btn btn-primary" href="kereta.php" role="button" id="button-cari">Cari Kereta</a>

    <h2 class="header" id="header-2">Data Stasiun</h2>
    <p id="text-main">Temukan informasi stasiun tempat anda akan berangkat dan tiba.</p>
    <a class="btn btn-primary" href="stasiun.php" role="button" id="button-cari">Cari Stasiun</a>

    <h2 class="header" id="header-2">Data Tiket</h2>
    <p id="text-main">Temukan informasi tiket anda </p>
    <a class="btn btn-primary" href="tiket.php" role="button" id="button-cari">Cari Tiket</a>

    <h2 class="header" id="header-2">Data Transaksi</h2>
    <p id="text-main">Lihat detail transaksi anda.</p>
    <a class="btn btn-primary" href="transaksi.php" role="button" id="button-cari">Cari Transaksi</a>

    <h2 class="header" id="header-2">Data Jadwal</h2>
    <p id="text-main">Cari tahu dari mana kereta anda akan berangkat berdasarkan ID kereta.</p>
    <a class="btn btn-primary" href="jadwal.php" role="button" id="button-cari">Cari Jadwal</a>
  </body>
</html>