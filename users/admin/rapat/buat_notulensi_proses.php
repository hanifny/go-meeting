<?php
session_start();
if (!isset($_SESSION['s_admin'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$id = $_POST['id'];
$notulensi = $_POST['notulensi'];

$query = "UPDATE rapat 
    SET 
        notulensi = '$notulensi'
    WHERE id = $id";

$hasil = mysqli_query($db, $query);
//var_dump(mysqli_error($db)); exit();
if ($hasil == true) {
    header('Location: daftar_rapat.php');
} else {
    header('Location: buat_notulensi.php');
}