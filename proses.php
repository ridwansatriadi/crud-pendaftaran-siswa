<?php
include 'config.php';
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah($_POST['nama'], $_POST['alamat'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['sekolah_asal']);
    header("location:index.php");

} elseif ($aksi == 'update') {
    $db->update($_POST['id'], $_POST['nama'],$_POST['alamat'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['sekolah_asal']);
    header("location:index.php");

} elseif ($aksi == 'hapus') {
    $db->delete($_GET['id']);
    header("location:index.php");
}

// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     // Call the login function
//     $login_successful = $db->login($username, $password);
//     if ($login_successful) {----
//         echo "Login successful!";
//         header("location:index.php");

//         // Here, you can redirect the user to another page or perform further actions
//     } else {
//         echo "Login failed. Please check your credentials.";
//     }

//     if (isset($_POST['register'])) {
//         $username = $_POST['username'];
//         $password = $_POST['password'];
    
//         // Call the register function
//         $database->register($username, $password);
//         echo "Registration successful!";
//         header("location:index.php");

//     }


?>