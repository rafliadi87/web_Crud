<?php 
//Untuk akses fungsi di file function.php
require_once '../function/function.php';

$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$brg = query("SELECT * FROM barang WHERE id_barang = $id") ;
if (isset($_POST['submit'])){
    if(ubah_barang($_POST) > 0){
        echo  "<script>
        alert('Data Berhasil Diedit');
        document.location.href='../frontend/barang.php';
        </script>";

    }else {
        echo  "<script>
        alert('Data Gagal Diedit');
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
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-4">
                <?php 
                    foreach ($brg as $row){
                ?>
                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $row["id_barang"]?>">
                <div class="form-group">
                    <label for="nama">Nama Barang :</label>
                    <input name="nama" type="text" class="form-control" id="nama" value="<?= $row["nama_barang"]?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Barang :</label>
                    <input name="harga" type="text" class="form-control" id="harga" value="<?= $row["harga"]?>">
                </div>
                <div class="form-group">
                    <label for="stok">Stok Barang :</label>
                    <input name="stok" type="number" class="form-control" id="stok" value="<?= $row["stok"]?>">
                </div>
                <div>
                    <label for="id_supplier" style="margin-right: 150px">ID Supplier</label>
                    <select name="id_supplier" id="id_supplier">
                        <?php 
                        $supplier = query("SELECT * FROM supplier");
                        foreach ($supplier as $sup) : ?>
                            <option value="<?= $sup['id_supplier']; ?>" <?php if ($sup['id_supplier'] == $row['id_supplier']) echo 'selected'; ?>>
                                <?= $sup['nama_supplier']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <a href="../frontend/barang.php" class="btn btn-danger">Batal</a>
                    <button class="btn btn-success" type="submit" name="submit">Simpan</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>