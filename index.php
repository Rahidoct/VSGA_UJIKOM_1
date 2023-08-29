<?php include 'config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Uji Kompetensi Praktek">
    <meta name="author" content="Rahmat Hidayat">
    <title>Document Ujikom VSGA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-primary rounded shadow-sm">
            <img src="assets/img/logo.png" alt="" width="48" height="48" style="margin-right: 10px;">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">PENGAJUAN BEASISWA AKADEMIK DAN NON-AKADEMIK</h1>
                <small>versi beta</small>
            </div>
        </div>
        <br>
        <?php include "config/page.php"; ?>
        <div class="card rounded shadow-sm">
            <div class="card-header bg-primary">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a id="pilihan-beasiswa" class="nav-link <?=isset($index)?'active':'';?>" href="index.php">PILIHAN BEASISWA</a>
                </li>
                <li class="nav-item">
                    <a id="daftar-beasiswa" class="nav-link <?=isset($daftar)?'active':'';?>" href="?registrasi_beasiswa">DAFTAR</a>
                </li>
                <li class="nav-item">
                    <a id="hasil-beasiswa" class="nav-link <?=isset($hasil)?'active':'';?>" href="?hasil_pengajuan_beasiswa">HASIL</a>
                </li>
                </ul>
            </div>
            <?php include ($views); ?>
        </div>

        <footer class="py-3">
            <div class="d-flex flex-column flex-sm-row justify-content-between py-2 my-4 border-top">
            <p>&copy; 2023 Copyright Rahmat Hidayat | All rights reserved.</p>
            <p class="text-end">
                <img src="assets/img/logo-lsp.png" alt="" style="width: 160px; height: 30px">
            </p>
            </div>
        </footer>
        
    </main>
    <script>
        const pilihanBeasiswa = document.getElementById('pilihan-beasiswa');
        const daftarBeasiswa = document.getElementById('daftar-beasiswa');
        const hasilBeasiswa = document.getElementById('hasil-beasiswa');

        if (<?= isset($index) ? 'true' : 'false'; ?>) {
            pilihanBeasiswa.classList.add('text-primary');
        } else {
            pilihanBeasiswa.classList.add('text-white');
        }

        if (<?= isset($daftar) ? 'true' : 'false'; ?>) {
            daftarBeasiswa.classList.add('text-primary');
        } else {
            daftarBeasiswa.classList.add('text-white');
        }

        if (<?= isset($hasil) ? 'true' : 'false'; ?>) {
            hasilBeasiswa.classList.add('text-primary');
        } else {
            hasilBeasiswa.classList.add('text-white');
        }
    </script>
</body>
</html>