<?php
include("koneksi.php");

$query = mysqli_query($koneksi,"SELECT * FROM pegawai");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

echo "<pre>";
print_r($result);