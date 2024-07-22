<?php
include("koneksi.php");

$query = mysqli_query($koneksi,"SELECT * FROM pegawai");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Nama Pegawai</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>No Telp</th>
                <th>Status Perkawinan</th>
            </tr>
        </thead>
        <?php foreach ($result as $index => $pegawai):?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><?php echo $pegawai["nama"] ?></td>
                <td><?php echo $pegawai["jenis_kelamin"] ?></td>
                <td><?php echo $pegawai["alamat"] ?></td>
                <td><?php echo $pegawai["tempat_lahir"] ?></td>
                <td><?php echo $pegawai["tanggal_lahir"] ?></td>
                <td><?php echo $pegawai["nomer_seluler"] ?></td>
                <td><?php echo $pegawai["status_perkawinan"] ?></td>
            </tr>
        <?php endforeach?>
    </table>
    
</body>
</html>