<?php
try {
    $koneksi =mysqli_connect("localhost","root","","kepegawaian");
    echo "Berhasil Konek Database";
} catch (Exception $e) {
    echo "Gagal: " . $e->getMessage();
}
