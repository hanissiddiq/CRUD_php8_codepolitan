
<html>
    <body>

    <form method="POST" action="insert.php" >
        <label for="">Nama :</label>
        <input type="text" name="nama">
        <br>
        

        <label for="">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
       </br>

        <label for="">Alamat</label>
        <textarea name="alamat" ></textarea>
        </br>

        <label for="">Tempat Lahir</label>
        <input type="text" name="tempat_lahir">
        </br>

        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir">
        </br>

        <label for="">Nomer Seluler</label>
        <input type="text" name="nomer_seluler">
       </br>

        <label for="">Status Perkawinan</label>
        <select name="status_perkawinan" id="">
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Sudah Menikah">Sudah Menikah</option>
        </select>
        </br>

        <button type="submit">Tambah</button>
        <a href="list.php">Kembali</a>

        </form>

    </body>
</html>