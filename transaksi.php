<?php
//Untuk akses fungsi di file function.php
require_once '../function/function.php';
$barang = query("SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="">TRANSAKSI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="data_barang.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_pembayaran.php">Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_pembeli.php">Pembeli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_supplier.php">Supplier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="data_transaksi.php">Transaksi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="isi">
   <h1>Data Transaksi</h1>
   <table class="table table-striped table-bordered text-center">
    <tr>
        <th>No</th>
        <th>ID Transaksi</th>
        <th>ID Barang</th>
        <th>ID Pembeli</th>
        <th>Tanggal</th>
        <th>Keterangan</th>
        <!-- <th>Aksi</th> -->
    </tr>
    <?php $i=1 ?>
    <?php foreach($barang as $pli) { ?>
    <tr> 
        <td><?= $i;?></td>
        <td><?= $pli['id_transaksi'];?></td>
        <td><?= $pli['id_barang'];?></td>
        <td><?= $pli['id_pembeli'];?></td>
        <td><?= $pli['tanggal'];?></td>
        <td><?= $pli['keterangan'];?></td>
        <!-- <td>
            <button class="btn btn-warning"><a href="">EDIT</a></button>
            <button class="btn btn-danger"><a href="">DELETE</a></button>
        </td> -->
    </tr>
    <?php $i++; ?>
    <?php } ?>
   </table>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>