<?php
include("koneksi.php");

$query = mysqli_query($koneksi,"SELECT * FROM pegawai");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($result);

?>


<!DOCTYPE html>

<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Daftar Pegawai</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

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
    <!-- Content -->   
    <!-- ######################## -->
    <div class="layout-container">
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                  <div style="display:flex; justify-content:space-between; flex-direction:row">
                    <h5 class="card-header">Daftar Nama Pegawai </h5>
                    <a href="Vadd.php" class="btn btn-primary" style="margin:8px 8px;">Tambah Data</a>
                    </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                              <thead class="table-light">
                                <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Jenis Kelamin</th>
                                  <th width="6">Alamat</th>
                                  <th>Tempat Lahir</th>
                                  <th>Tanggal Lahir</th>
                                  <th>No Telp</th>
                                  <th>Status Perkawinan</th>
                                  <th colspan="3">Aksi</th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                              <?php foreach ($result as $index => $pegawai):?>
                                <tr>
                                  <td><?php echo $index + 1 ?></td>
                                  <td><a href="profil.php?id=<?php echo $pegawai['id']?>"><?php echo $pegawai["nama"] ?></a></td>
                                  <td><?php echo $pegawai["jenis_kelamin"] ?></td>
                                  <td><?php echo $pegawai["alamat"] ?></td>
                                  <td><?php echo $pegawai["tempat_lahir"] ?></td>
                                  <td><?php echo date("d/m/Y",strtotime($pegawai["tanggal_lahir"]));?></td>
                                  <td><?php echo $pegawai["nomer_seluler"] ?></td>
                                  <td><?php echo $pegawai["status_perkawinan"] ?></td>

                                  <td>
                                    <a href="Vedit.php?id=<?php echo $pegawai["id"]?>">
                                      <span class="mdi mdi-square-edit-outline"></span>
                                    </a>
                                  </td>

                                  <td>
                                    <a href="delete.php?id=<?php echo $pegawai["id"]?>">
                                      <span class="mdi mdi-trash-can-outline text-danger"></span>
                                    </a>
                                  </td>
                                                         
                              <?php endforeach?>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- / Content -->

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




