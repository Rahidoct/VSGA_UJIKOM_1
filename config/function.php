<?php
function upload_berkas() {
    // Inisialisasi pesan kesalahan
    $uploadError = '';

    // Cek kesalahan unggahan berkas
    if ($_FILES['file_berkas']['error'] !== UPLOAD_ERR_OK) {
        $uploadError = 'Gagal mengupload dokumen: Terjadi kesalahan selama proses unggah.';
    } else {
        $namafile   = $_FILES['file_berkas']['name'];
        $ukuranfile = $_FILES['file_berkas']['size'];
        $tmpname    = $_FILES['file_berkas']['tmp_name'];
        $tipefile   = $_FILES['file_berkas']['type'];

        // Mengecek tipe file yang diizinkan (PDF atau DOCX)
        $eksfilevalid = ['pdf', 'docx'];
        $eksfile      = pathinfo($namafile, PATHINFO_EXTENSION); // Menggunakan pathinfo untuk mendapatkan ekstensi
        $eksfile      = strtolower($eksfile);

        if (!in_array($eksfile, $eksfilevalid) || ($tipefile !== 'application/pdf' && $tipefile !== 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
            $uploadError = 'Gagal mengupload dokumen, yang kamu upload bukan dokumen PDF atau DOCX :(';
        } elseif ($ukuranfile > 1000000) {
            $uploadError = 'Gagal mengupload dokumen, ukuran file terlalu besar :(';
        } else {
            // Jika lolos pengecekkan, file siap diupload
            // Generate nama file baru    
            $namafilebaru = uniqid() . '.' . $eksfile;
            $tujuanfile = '../assets/file/' . $namafilebaru;
            
            // Memindahkan berkas hanya setelah semua validasi selesai
            if (move_uploaded_file($tmpname, $tujuanfile)) {
                // Mengembalikan nama file baru jika berhasil diunggah
                return $namafilebaru;
            } else {
                $uploadError = 'Gagal mengupload dokumen: Terjadi kesalahan saat menyimpan berkas.';
            }
        }
    }

    // Mengembalikan pesan kesalahan (jika ada)
    return $uploadError;
}
?>