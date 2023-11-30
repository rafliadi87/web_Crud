<?php
function koneksi(){
    $conn = mysqli_connect("localhost", "root", "", "penjualan");
    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah_barang($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "INSERT INTO barang (nama_barang, harga, stok, id_supplier) VALUES ('$nama', '$harga', '$stok', '$id_supplier')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}


function hapus_barang($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id");
    return mysqli_affected_rows($conn);
}

function ubah_barang($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $supplier = $data['id_supplier'];

    $sql = "UPDATE barang SET 
            nama_barang = '$nama',
            harga = '$harga',
            stok = '$stok',
            id_supplier = '$supplier'
            WHERE id_barang = '$id'
    ";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function tambah_pembeli($orang){
    $conn = koneksi();

    $nama = $orang['nama_pembeli'];
    $jk = $orang['jk'];
    $telp = $orang['telp'];
    $alamat = $orang['alamat'];
    // $jumlah_transaksi = $orang['jumlah_transaksi'];

    $sql = "INSERT INTO pembeli (nama_pembeli, jk, no_telp, alamat) VALUES ('$nama', '$jk', '$telp', '$alamat')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus_pembeli($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = $id");
    return mysqli_affected_rows($conn);
}

function ubah_pembeli($orang){
    $conn = koneksi();

    $id = $orang['id'];
    $nama = $orang['nama_pembeli'];
    $jk = $orang['jk'];
    $no_telp = $orang['no_telp'];
    $alamat = $orang['alamat'];

    $sql = "UPDATE pembeli SET 
            nama_pembeli = '$nama',
            jk = '$jk',
            no_telp = '$no_telp',
            alamat = '$alamat'
            WHERE id_pembeli = '$id'
    ";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function tambah_supplier($supplier){
    $conn = koneksi();

    $nama = $supplier['nama_supplier'];
    $telp = $supplier['no_telp'];
    $alamat = $supplier['alamat'];

    $sql = "INSERT INTO supplier (nama_supplier, no_telp, alamat) VALUES ('$nama', '$telp', '$alamat')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus_supplier($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = $id");
    return mysqli_affected_rows($conn);
}

function ubah_supplier($supplier){
    $conn = koneksi();

    $id = $supplier['id'];
    $nama = $supplier['nama_supplier'];
    $no_telp = $supplier['no_telp'];
    $alamat = $supplier['alamat'];

    $sql = "UPDATE supplier SET 
            nama_supplier = '$nama',
            no_telp = '$no_telp',
            alamat = '$alamat'
            WHERE id_supplier = '$id'
    ";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

?>