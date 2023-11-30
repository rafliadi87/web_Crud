<?php 
//Untuk akses fungsi di file function.php
require_once '../function/function.php';

$supplier = query("SELECT * FROM supplier");
if (isset($_POST['tambah'])){
    if(tambah_barang($_POST) > 0){
        echo  "<script>
        alert('Data Berhasil Ditambahkan');
        document.location.href='../frontend/barang.php';
        </script>";
    }else {
        echo  "<script>
        alert('Data Gagal Ditambahkan');
        document.location.href='../frontend/barang.php';
        </script>";
    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-4">
        <h1>Tambah Barang</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Barang</label>
                    <input type="number" class="form-control" name="harga" id="harga" required>
                </div>
                <div class="form-group">
                    <label for="harga">Stok Barang</label>
                    <input type="number" class="form-control" name="stok" id="stok" required>
                </div>
                <div class="m-1">
                    <label for="id_supplier">ID Supplier</label>
                    <select name="id_supplier" id="id_supplier">
                        <?php foreach ($supplier as $sup) : ?>
                        <option value="<?= $sup['id_supplier']; ?>">
                        <?= $sup['nama_supplier']; ?>
                        </option>
                        <?php endforeach; ?>
                    
                    </select>
                </div>
                <a href="../frontend/barang.php" class="btn btn-danger">Batal</a>
                <button class="btn btn-success" type="submit" name="tambah">Tambah</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>