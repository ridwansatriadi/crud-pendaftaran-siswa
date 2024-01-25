<?php
include("../layout/app.php");
include("config.php");
$db = new Database();
?>
<title>Pendaftaran Siswa Baru | SMK Coding</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Data Siswa yang Sudah Mendaftar</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <a href="form-daftar.php" class="btn btn-primary mb-3">[+] Tambah Baru</a>
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th>Tindakan</th>
                        </tr>
                        <tr>
                            <?php
                            $data = 1;
                            foreach ($db->tampil_data() as $dat) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $data++; ?>
                                </td>
                                <td>
                                    <?php echo $dat['nama']; ?>
                                </td>
                                <td>
                                    <?php echo $dat['alamat']; ?>
                                </td>
                                <td>
                                    <?php echo $dat['jenis_kelamin']; ?>
                                </td>
                                <td>
                                    <?php echo $dat['agama']; ?>
                                </td>
                                <td>
                                    <?php echo $dat['sekolah_asal']; ?>
                                </td>
                                <td>
                                    <a href="form-edit.php?id=<?php echo $dat['id']; ?>&aksi=edit"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="proses.php?id=<?php echo $dat['id']; ?>&aksi=hapus"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include("../layout/footer.php");
?>