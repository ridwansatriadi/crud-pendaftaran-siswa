<?php
include("../layout/app.php");
?>
<title>Formulir Edit Siswa | SMK Coding</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Siswa</h4>
        </div>
        <div class="card-body">
            <?php
            include 'config.php';
            $db = new database();
            foreach ($db->edit($_GET['id']) as $d) {
                ?>
                <form action="proses.php?aksi=update" method="post">
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="stok" placeholder="nama lengkap"
                            value="<?php echo $d['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"><?php echo $d['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($d['jenis_kelamin'] == 'laki-laki')
                            echo 'checked'; ?>> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($d['jenis_kelamin'] == 'perempuan')
                            echo 'checked'; ?>> Perempuan</label>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control" name="agama" id="agama">
                            <option <?php echo ($d['agama'] == 'Islam') ? "selected" : "" ?>>Islam </option>
                            <option <?php echo ($d['agama'] == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                            <option <?php echo ($d['agama'] == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                            <option <?php echo ($d['agama'] == 'Budha') ? "selected" : "" ?>>Budha</option>
                            <option <?php echo ($d['agama'] == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sekolah_asal">Sekolah </label>
                        <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal"
                            placeholder="nama sekolah" value="<?php echo $d['sekolah_asal'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="index.php" class="btn btn-secondary">Batal</a>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>