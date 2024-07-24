<!DOCTYPE html>
<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Daftar Pegawai</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
</head>

<body>
    <div class="layout-container">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card p-3">


                    <form method="POST" action="insert.php">
                        <h2>Tambah Data</h2>
                        <table class="mb-2">
                            <tr>
                                <td><label for="nama">Nama</label></td>
                                <td>:</td>
                                <td><input type="text" id="nama" name="nama" class="form-control"></td>
                            </tr>

                            <tr>
                                <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                                <td>:</td>
                                <td> <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="alamat">Alamat</label></td>
                                <td>:</td>
                                <td><textarea name="alamat" id="alamat" class="form-control"></textarea></td>
                            </tr>

                            <tr>
                                <td><label for="tempat_lahir">Tempat Lahir</label></td>
                                <td>:</td>
                                <td><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                                <td>:</td>
                                <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><label for="nomer_seluler">Nomer Seluler</label></td>
                                <td>:</td>
                                <td><input type="text" name="nomer_seluler" id="nomer_seluler" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><label for="status_perkawinan">Status Perkawinan</label></td>
                                <td>:</td>
                                <td> <select name="status_perkawinan" id="status_perkawinan" class="form-select">
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Sudah Menikah">Sudah Menikah</option>
                                    </select>
                                </td>
                            </tr>
                        </table>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="list.php" class="btn btn-warning">Kembali</a>

                    </form>

                </div>
            </div>
        </div>
    </div>


</body>

</html>