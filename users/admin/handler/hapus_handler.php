<?php

include '../../../connection.php';

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = $id";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('location: daftar_handler.php');
} else {
    header('location: tambah_handler.php');
}