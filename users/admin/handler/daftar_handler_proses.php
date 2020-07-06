<?php
session_start();

// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['s_admin'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$query = "select * from users";

$hasil = mysqli_query($db, $query);
mysqli_connect_error();
// ... menampung semua data kategori
$data_handler = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_event
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_handler[] = $row;
}