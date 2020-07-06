<?php
session_start();

// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['s_participant'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$query = "select id, nama, deskripsi, DATE_FORMAT(tanggal, '%d-%m-%Y' ) AS tanggal from events";

$hasil = mysqli_query($db, $query);
mysqli_connect_error();
// ... menampung semua data event
$data_event = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_event
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_event[] = $row;
}