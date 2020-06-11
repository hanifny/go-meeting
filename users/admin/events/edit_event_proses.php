<?php
session_start();
if (!isset($_SESSION['s_admin'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];

$query = "UPDATE events 
    SET nama = '$nama',
        deskripsi = '$deskripsi',
        tanggal = '$tanggal'
    WHERE id = $id";

$hasil = mysqli_query($db, $query);
//var_dump(mysqli_error($db)); exit();
if ($hasil == true) {
    header('Location: daftar_event.php');
} else {
    header('Location: tambah_event.php');
}