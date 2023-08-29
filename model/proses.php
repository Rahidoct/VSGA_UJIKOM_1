<?php

include '../config/koneksi.php';
include '../config/function.php';

$nama_lengkap = '';
$email = '';
$nomor_hp = '';
$semester = '';
$ipk = '';
$pilihan_beasiswa = '';
$file_berkas = '';
$status_ajuan = '';

$ipk_message = '';
$file_berkas = $_FILES['file_berkas'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $nomor_hp = $_POST['nomor_hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $pilihan_beasiswa = $_POST['pilihan_beasiswa'];
    $file_berkas_result = upload_berkas();
    $status_ajuan = 'Belum Diverifikasi'; // Secara otomatis diset sebagai "Belum Diverifikasi"

    // Validasi IPK
    if ($ipk < 3) {
        $ipk_message = 'IPK tidak memenuhi syarat';
    } else {
        // Query untuk memasukkan data ke dalam tabel jika IPK memenuhi syarat
        $insert = "INSERT INTO pendaftaran_beasiswa (nama_lengkap, email, nomor_hp, semester, ipk, pilihan_beasiswa, file_berkas, status_ajuan)
                VALUES ('$nama_lengkap', '$email', '$nomor_hp', '$semester', '$ipk', '$pilihan_beasiswa', '$file_berkas_result', '$status_ajuan')";

        if ($koneksi->query($insert) === TRUE) {
            header('Location:../?hasil_pengajuan_beasiswa');
        } else {
            echo "Error: " . $insert . "<br>" . $koneksi->error;
        }
    }

    // Tutup koneksi
    $koneksi->close();
}
?>