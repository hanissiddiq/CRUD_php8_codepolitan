<?php
include("koneksi.php");

$id = $_GET["id"];
$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id = $id");
$pegawai = mysqli_fetch_assoc($query);

// echo "<pre>";
// print_r($pegawai);
?>

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

<html>

<body>
    <!-- 
    <h3><?php echo $pegawai["nama"] ?></h3>

    <label for="">Jenis Kelamin : </label>
    <label for=""><?php echo $pegawai["jenis_kelamin"] ?></label></br>

    <label for="">Alamat : </label>
    <label for=""><?php echo $pegawai["alamat"] ?></label></br>

    <label for="">Tempat Lahir : </label>
    <label for=""><?php echo $pegawai["tempat_lahir"] ?></label></br>

    <label for="">Tanggal Lahir : </label>
    <label for=""><?php echo date("d/m/Y", strtotime($pegawai["tanggal_lahir"])) ?></label></br>

    <label for="">Nomer Seluler : </label>
    <label for=""><?php echo $pegawai["nomer_seluler"] ?></label></br>

    <label for="">Status Perkawinan : </label>
    <label for=""><?php echo $pegawai["status_perkawinan"] ?></label></br>

 -->


    <!-- / Content -->
    <div class="layout-container">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img src=<?php if ($pegawai["jenis_kelamin"] == "Laki-Laki") {
                                                echo "assets/img/avatars/9.png";
                                            } else echo "assets/img/avatars/10.png"; ?> height="120" width="120" alt="" class="img-fluid rounded mb-3 mt-4">

                                <div class="user-info text-center">
                                    <h4><?php echo $pegawai["nama"] ?></h4>

                                </div>
                                <h5 class="pb-3 border-bottom mb-3">Details</h5>
                                <div class="info-container">
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-3">
                                            <span class="fw-semibold text-heading me-2">Jenis Kelamin:</span>
                                            <span><?php echo $pegawai["jenis_kelamin"] ?></span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-semibold text-heading me-2">Alamat:</span>
                                            <span><?php echo $pegawai["alamat"] ?></span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-semibold text-heading me-2">Tempat Lahir:</span>
                                            <span><?php echo $pegawai["tempat_lahir"] ?></span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-semibold text-heading me-2">Tanggal Lahir:</span>
                                            <span><?php echo date("d-M-Y", strtotime($pegawai["tanggal_lahir"])) ?></span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-semibold text-heading me-2">Nomer Seluler:</span>
                                            <span><?php echo $pegawai["nomer_seluler"] ?></span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-semibold text-heading me-2">Status Perkawinan</span>
                                            <span class=<?php
                                                        if ($pegawai["status_perkawinan"] == "Sudah Menikah") {
                                                            echo "'badge bg-label-success'";
                                                        } else echo "'badge bg-label-danger'"; ?>>
                                                <?php echo $pegawai["status_perkawinan"] ?>
                                            </span>
                                        </li>
                                        <div class="d-flex justify-content-center">
                                            <a href="Vedit.php?id=<?php echo $pegawai["id"] ?>" class="btn btn-primary me-3">Edit</a>
                                            <a href="list.php" class="btn btn-warning">Kembali</a>
                                        </div>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
</body>

</html>