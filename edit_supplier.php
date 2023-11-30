<?php 
//Untuk akses fungsi di file function.php
require_once '../function/function.php';

$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$pli = query("SELECT * FROM supplier WHERE id_supplier = $id") ;
if (isset($_POST['submit'])){
    if(ubah_supplier($_POST) > 0){
        echo  "<script>
        alert('Data Berhasil Diedit');
        document.location.href='../frontend/supplier.php';
        </script>";

    }else {
        echo  "<script>
        alert('Data Gagal Diedit');
        document.location.href='../frontend/supplier.php';
        </script>";

    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-4">
                <?php 
                    foreach ($pli as $row){
                ?>
                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $row["id_supplier"]?>">
                <div class="form-group">
                    <label for="nama">Nama Supplier :</label>
                    <input name="nama" type="text" class="form-control" id="nama" value="<?= $row["nama_supplier"]?>">
                </div>
                <div class="form-group">
                    <label for="telp">No Telp :</label>
                    <input name="no_telp" type="number" class="form-control" id="no_telp" value="<?= $row["no_telp"]?>">
                </div>
                <div class="form-group mb-1">
                    <label for="alamat">Alamat :</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $row["alamat"]?>">
                </div>
                    <a href="../frontend/supplier.php" class="btn btn-danger">Batal</a>
                    <button class="btn btn-success" type="submit" name="submit">Simpan</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>