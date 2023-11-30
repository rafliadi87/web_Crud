<?php
//Untuk akses fungsi di file function.php
require_once '../function/function.php';

// mengambil id dari url/get
$id = $_GET["id"];

if(hapus_pembeli($id) > 0){
    echo " <script>
    alert('Data Berhasil Dihapus');
    document.location.href = '../frontend/pembeli.php';
    </script>
    ";
} else{
echo " <script>
    alert('Data Gagal Dihapus');
    document.location.href = '../frontend/pembeli.php';
    </script>
    ";
}

?>