<?php
include("koneksi.php");
$id = $_GET["id"];


try {
    mysqli_query($koneksi,
            "DELETE FROM pegawai 
            
            WHERE id = $id");

            header("Location:list.php");
    
} catch (Exception $e) {
    echo "</br> Gagal Hapus Data : " . $e->getMessage();
}