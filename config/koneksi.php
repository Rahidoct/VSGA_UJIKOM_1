<?php
    // membuat konfigurasi database untuk penyimpanan data
    $hostname   = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "db_ujikom";

    $koneksi = mysqli_connect($hostname, $username, $password, $database) or die (mysqli_error($koneksi));
?>