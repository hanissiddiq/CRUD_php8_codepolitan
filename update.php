<?php
include("koneksi.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomer_seluler = $_POST["nomer_seluler"];
$status_perkawinan = $_POST["status_perkawinan"];

// // echo "<pre>";
// print_r($id);
// // die;

try {
    mysqli_query(
        $koneksi,
        "UPDATE pegawai 
            SET nama ='$nama',
                jenis_kelamin ='$jenis_kelamin',
                alamat ='$alamat',
                tempat_lahir ='$tempat_lahir',
                tanggal_lahir ='$tanggal_lahir',
                nomer_seluler ='$nomer_seluler',
                status_perkawinan ='$status_perkawinan'
            WHERE id = $id"
    );

    header("Location:list.php");
} catch (Exception $e) {
    echo "</br> Gagal Update Database: " . $e->getMessage();
}
