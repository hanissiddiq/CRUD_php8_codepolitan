<?php
include("koneksi.php");

$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomer_seluler = $_POST["nomer_seluler"];
$status_perkawinan = $_POST["status_perkawinan"];

echo "<pre>";
print_r($_POST);

try {
    mysqli_query($koneksi,
            "INSERT INTO pegawai 
            (nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,nomer_seluler,status_perkawinan)
            VALUES 
            ('$nama', '$jenis_kelamin', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$nomer_seluler','$status_perkawinan')");

            header("Location:list.php");
    
} catch (Exception $e) {
    echo "</br> Gagal Insert Database: " . $e->getMessage();
}
