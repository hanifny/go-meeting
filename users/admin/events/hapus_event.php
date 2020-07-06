<?php

include '../../../connection.php';

$id = $_GET['id'];

$query = "DELETE FROM events WHERE id = $id";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('location: daftar_event.php');
} else {
    header('location: tambah_event.php');
}