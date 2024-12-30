<?php
session_start();
if(!isset($_SESSION['masuk'])){
header("location: login.php");

}
?>

<!-- Tambahkan library jsPDF dan html2canvas -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
     <style>
         #kanan {
          margin-left: 300px;
         }
     </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">AKADEMIK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Mahasiswa</a>
        </li>


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexProdi.php">Prodi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexUser.php">User</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexDosen.php">Dosen</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=""> | </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="mahasiswa.php">Data Mahasiswa</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="prodi.php">Data Prodi</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="user.php">Data User</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="dosen.php">Data Dosen</a>
        </li>


      </ul>
      <ul class="navbar-nav" ms-auto>
        <li class="navbar-item">
            <a id="kanan"class="nav-link active" href="logout.php">Logout (<?= $_SESSION['nama']?>)</a>

        </li>
      </ul>
    </div>
  </div>
</nav>