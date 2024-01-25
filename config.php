<?php
class Database
{
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $db = "pendaftaransiswa";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    public function register($username, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($this->koneksi, "INSERT INTO `users`(`username`, `password`) VALUES ('$username', '$hashed_password')");
    }

    public function login($username, $password)
    {
        $result = mysqli_query($this->koneksi, "SELECT * FROM `users` WHERE `username`='$username'");
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            return true;
        } else {
            // Login failed
            return false;
        }
    }
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM calonsiswa ");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }

    public function tambah($nama, $alamat, $jenis_kelamin, $agama, $sekolah_asal)
    {
        mysqli_query($this->koneksi, "INSERT INTO `calonsiswa`(`nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) 
		VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal' )");
    }

    public function update($id, $nama, $alamat, $jenis_kelamin, $agama, $sekolah_asal)
	{
		mysqli_query($this->koneksi, "UPDATE `calonsiswa` SET `nama`='$nama', `alamat`='$alamat', `jenis_kelamin`='$jenis_kelamin', `agama`='$agama', `sekolah_asal`='$sekolah_asal' WHERE `id`='$id'");

	}
    public function edit($id)
	{
		$data = mysqli_query($this->koneksi, "SELECT * FROM calonsiswa WHERE id=$id");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
    public function delete($id)
	{
		mysqli_query($this->koneksi, "DELETE FROM calonsiswa WHERE id='$id'");
	}


}
?>