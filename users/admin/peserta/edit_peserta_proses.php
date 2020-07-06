<?php
session_start();
if (!isset($_SESSION['s_admin'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama     = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$no_hp    = $_POST['no_hp'];

$query = "UPDATE users
    SET username = '$username',
    	password = '$password',
    	nama = '$nama',
        jabatan = '$jabatan',
        no_hp = '$no_hp'
    WHERE id = $id";

$hasil = mysqli_query($db, $query);
//var_dump(mysqli_error($db)); exit();
if ($hasil == true) {
    header('Location: daftar_peserta.php');
} else {
    header('Location: tambah_peserta.php');
}