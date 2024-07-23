<?php
include("koneksi.php");

$id = $_GET["id"];
$query = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id = $id");
$pegawai = mysqli_fetch_assoc($query);

// echo "<pre>";
// print_r($pegawai);
?>

<html>
    <body>
        <h2>Ubah Data</h2>
    <form action="update.php" method="POST"  >
        
        <input type="text" name="id" value="<?php echo $pegawai["id"]; ?>">
        <label for="">Nama :</label>
        <input type="text" name="nama" value="<?php echo $pegawai['nama'];?>">
        <br>
        
        <label for="">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="">
            <option value="Laki-Laki" 
                <?php if ($pegawai['jenis_kelamin'] == "Laki-Laki") 
                { echo "selected";} ?>>Laki-Laki
            </option>
            <option value="Perempuan"
            <?php if ($pegawai['jenis_kelamin'] == "Perempuan") 
                { echo "selected";} ?>>Perempuan</option>
        </select>
       </br>
        <label for="">Alamat</label>
        <textarea name="alamat"> <?php echo $pegawai['alamat'];?> </textarea>
        </br>
        <label for="">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="<?php echo $pegawai['tempat_lahir'];?>">
        </br>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="<?php echo $pegawai['tanggal_lahir'];?>">
        </br>
        <label for="">Nomer Seluler</label>
        <input type="text" name="nomer_seluler" value="<?php echo $pegawai['nomer_seluler'];?>">
       </br>
        <label for="">Status Perkawinan</label>
        <select name="status_perkawinan" id="">
            <option value="Belum Menikah" 
                <?php if ($pegawai['status_perkawinan'] == "Belum Menikah") 
                { echo "selected";} ?>>Belum Menikah</option>
            <option value="Sudah Menikah"
                <?php if ($pegawai['status_perkawinan'] == "Sudah Menikah") 
                { echo "selected";} ?>>Sudah Menikah</option>
        </select>
        </br>
        <button type="submit">Ubah</button>
        <a href="list.php">Kembali</a>
        </form>
    </body>
</html>