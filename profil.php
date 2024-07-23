<?php
include ("koneksi.php");

$id = $_GET["id"];
$query = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id = $id");
$pegawai = mysqli_fetch_assoc($query);

echo "<pre>";
print_r($pegawai);