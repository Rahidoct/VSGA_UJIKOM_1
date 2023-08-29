<?php 
    if(isset($_GET['registrasi_beasiswa'])){
        $daftar = true;
        $views = 'views/daftar.php';
    }
    else if(isset($_GET['hasil_pengajuan_beasiswa'])){
        $hasil = true;
        $views = 'views/hasil.php';
    }
    else{
        $index = true;
        $views = 'views/index.php';
    }
?>