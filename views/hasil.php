<div class="card-body m-3">
    <div class="container">
        <h5 class="card-title border-bottom border-success my-3">Hasil Pengajuan Beasiswa</h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Semester</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Jenis Beasiswa</th>
                    <th scope="col">Berkas</th>
                    <th scope="col">Status Ajuan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $n = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran_beasiswa") or die(mysqli_error($koneksi));
                while ($row = mysqli_fetch_array($query)):
                ?>
                <tr>
                    <th scope="row"><?php echo $n; ?></th>
                    <td><?php echo $row['nama_lengkap']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['nomor_hp']; ?></td>
                    <td><?php echo $row['semester']; ?></td>
                    <td><?php echo $row['ipk']; ?></td>
                    <td><?php echo $row['pilihan_beasiswa']; ?></td>
                    <td><a href='assets/file/<?php echo $row['file_berkas']; ?>' target='_blank'>Lihat File</a></td>
                    <td>
                        <?php
                        $statusAjuan = $row['status_ajuan'];
                        $textBg = '';
                        
                        if ($statusAjuan == 'Belum Diverifikasi') {
                            $textBg = 'text-bg-warning';
                        } elseif ($statusAjuan == 'Terverifikasi') {
                            $textBg = 'text-bg-success';
                        } elseif ($statusAjuan == 'Ditolak') {
                            $textBg = 'text-bg-danger';
                        }
                        
                        echo "<span class='badge rounded-pill $textBg'>$statusAjuan</span>";
                        ?>
                    </td>
                </tr>
                <?php
                $n++;
                endwhile;
                ?>
            </tbody>
        </table>
        <?php
        if (mysqli_num_rows($query) == 0) {
            echo "<p>Tidak ada data</p>";
        }
        ?>
    </div>
</div>