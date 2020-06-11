<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['s_admin'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama    = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$no_hp	= $_POST['no_hp'];
$level	= 2;

$query = "INSERT INTO users (username, password, nama, jabatan, no_hp, level) 
    VALUES ('$username', '$password', '$nama', '$jabatan', '$no_hp', '$level')";
$hasil = mysqli_query($db, $query);
if ($hasil == true) {
    header('Location: daftar_peserta.php');
} else {
    header('Location: tambah_peserta.php');
}
