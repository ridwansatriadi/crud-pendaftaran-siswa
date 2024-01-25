<?php
include("../layout/app.php");
?>
<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Pendaftaran Siswa Baru</h4>
        </div>
        <div class="card-body">
            <form action="proses.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="stok" placeholder="nama lengkap" />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="alamat" ></textarea>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select class="form-control" name="agama" id="agama" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal" name="sekolah_asal"
                        placeholder="nama sekolah" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>