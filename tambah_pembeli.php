<?php 
//Untuk akses fungsi di file function.php
require_once '../function/function.php';

$pembeli = query("SELECT * FROM pembeli");
if (isset($_POST['tambah'])){
    if(tambah_pembeli($_POST) > 0){
        echo  "<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href='../frontend/pembeli.php';
        </script>";
    }else {
        echo  "<script>
        alert('Data Gagal Ditambahkan');
        document.location.href='../frontend/pembeli.php';
        </script>";
    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-4">
        <h1>Tambah Pembeli</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama_pembeli">Nama Pembeli</label>
                    <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" required>
                </div>
                <div class="form-group">
                    <label for="jk">JK</label>
                    <input type="number" class="form-control" name="jk" id="jk" required>
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telpon</label>
                    <input type="number" class="form-control" name="telp" id="telp" required>
                </div>
                <div class="form-group mb-1">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                </div>
                <!-- <div class="form-group mb-1">
                    <label for="jumlah_transaksi">Jumlah Transaksi</label>
                    <input type="number" class="form-control" name="jumlah_transaksi" id="jumlah_transaksi" required>
                </div> -->
                <a href="../frontend/pembeli.php" class="btn btn-danger">Batal</a>
                <button class="btn btn-success" type="submit" name="tambah">Tambah</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>