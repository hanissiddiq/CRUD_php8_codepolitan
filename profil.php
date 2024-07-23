<?php
include ("koneksi.php");

$id = $_GET["id"];
$query = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id = $id");
$pegawai = mysqli_fetch_assoc($query);

// echo "<pre>";
// print_r($pegawai);
?>

<html>
    <body>

        <h3><?php echo $pegawai["nama"]?></h3>

        <label for="">Jenis Kelamin : </label>
        <label for=""><?php echo $pegawai["jenis_kelamin"]?></label></br>

        <label for="">Alamat : </label>
        <label for=""><?php echo $pegawai["alamat"]?></label></br>

        <label for="">Tempat Lahir : </label>
        <label for=""><?php echo $pegawai["tempat_lahir"]?></label></br>

        <label for="">Tanggal Lahir : </label>
        <label for=""><?php echo date("d/m/Y", strtotime($pegawai["tanggal_lahir"]))?></label></br>

        <label for="">Nomer Seluler : </label>
        <label for=""><?php echo $pegawai["nomer_seluler"]?></label></br>

        <label for="">Status Perkawinan : </label>
        <label for=""><?php echo $pegawai["status_perkawinan"]?></label></br>

    </body>
</html>