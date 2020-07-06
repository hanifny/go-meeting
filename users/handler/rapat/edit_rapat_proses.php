<?php
session_start();
if (!isset($_SESSION['s_handler'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE rapat 
    SET 
        tanggal = '$tanggal',
        keterangan = '$keterangan'
    WHERE id = $id";

$hasil = mysqli_query($db, $query);
//var_dump(mysqli_error($db)); exit();
if ($hasil == true) {
    header('Location: daftar_rapat.php');
} else {
    header('Location: tambah_rapat.php');
}