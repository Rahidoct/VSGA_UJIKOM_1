<div class="card-body m-3">
    <h5 class="card-title border-bottom border-success my-3">Form Registrasi Beasiswa</h5>
    <form action="model/proses.php" method="post" enctype="multipart/form-data" class="row g-3 my-3">
        <div class="col-md-6">
            <label for="nama_lengkap" class="form-label">Nama Lengkap <sup class="text-danger"><strong>*</strong></sup></label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email <sup class="text-danger"><strong>*</strong></sup></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-6">
            <label for="nomor_hp" class="form-label">Nomor HP <sup class="text-danger"><strong>*</strong></sup></label>
            <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" required>
        </div>
        <div class="col-md-4">
            <label for="semester" class="form-label">Semester <sup class="text-danger"><strong>*</strong></sup></label>
            <select id="semester" class="form-select" name="semester" required>
                <option value="">-- Pilih Semester --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="ipk" class="form-label">IPK <sup class="text-danger"><strong>*</strong></sup></label>
            <input type="number" step="0.01" class="form-control" id="ipk" name="ipk" required>
            <div id="ipkValidationMessage" class="text-danger"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label">Pilihan Beasiswa <sup class="text-danger"><strong>*</strong></sup></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pilihan_beasiswa" id="akademik" value="Akademik" disabled>
                <label class="form-check-label" for="akademik">Akademik</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pilihan_beasiswa" id="non_akademik" value="Non Akademik" disabled>
                <label class="form-check-label" for="non_akademik">Non Akademik</label>
            </div>
        </div>
        <div class="col-md-6">
            <label for="file_berkas" class="form-label">Upload Berkas Syarat <sup class="text-danger"><strong>*</strong></sup></label>
            <input class="form-control" type="file" id="file_berkas" name="file_berkas" disabled>
        </div>
        <div class="d-flex flex-start">
            <button type="submit" class="btn btn-primary me-3" id="daftarButton" disabled>DAFTAR</button>
            <button type="reset" class="btn btn-danger">BATAL</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('ipk').addEventListener('change', function () {
        var ipk = parseFloat(document.getElementById('ipk').value);
        var pilihanBeasiswa = document.getElementsByName('pilihan_beasiswa');
        var fileBerkas = document.getElementById('file_berkas');
        var daftarButton = document.getElementById('daftarButton');
        var ipkValidationMessage = document.getElementById('ipkValidationMessage'); // Menambah elemen pesan validasi

        if (ipk >= 3) {
            for (var i = 0; i < pilihanBeasiswa.length; i++) {
                pilihanBeasiswa[i].disabled = false;
            }
            fileBerkas.disabled = false;
            daftarButton.disabled = false;
            ipkValidationMessage.innerHTML = ''; // Menghilangkan pesan validasi jika IPK memenuhi syarat
        } else {
            for (var i = 0; i < pilihanBeasiswa.length; i++) {
                pilihanBeasiswa[i].disabled = true;
            }
            fileBerkas.disabled = true;
            daftarButton.disabled = true;
            ipkValidationMessage.innerHTML = 'IPK tidak memenuhi syarat.'; // Menampilkan pesan validasi
        }
    });
</script>
