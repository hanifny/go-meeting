<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['s_admin'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$nama     = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$tanggal    = $_POST['tanggal'];

$query = "INSERT INTO events (nama, deskripsi, tanggal) 
    VALUES ('$nama', '$deskripsi', '$tanggal')";
$hasil = mysqli_query($db, $query);
if ($hasil == true) {
    header('Location: daftar_event.php');
} else {
    header('Location: tambah_event.php');
}
