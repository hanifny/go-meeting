<?php
session_start();

// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['s_handler'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$query3 = "SELECT rapat.id, rapat.id_event, rapat.tanggal, rapat.keterangan, rapat.id_event, events.nama
FROM rapat
INNER JOIN events ON rapat.id_event=events.id;";
  $hasil3 = mysqli_query($db, $query3);
  mysqli_connect_error();
  // ... menampung semua data event
  $daftar_rapat = array();

  // ... tiap baris dari hasil query dikumpulkan ke $data_event
  while ($row3 = mysqli_fetch_assoc($hasil3)) {
      $daftar_rapat[] = $row3;
  }

$query3 = "SELECT *
FROM events";
  $hasil3 = mysqli_query($db, $query3);
  mysqli_connect_error();
  // ... menampung semua data event
  $data_event = array();

  // ... tiap baris dari hasil query dikumpulkan ke $data_event
  while ($row3 = mysqli_fetch_assoc($hasil3)) {
      $data_event[] = $row3;
  }



  $query_final = "SELECT * FROM detail_presensi";
  $result_final = mysqli_query($db, $query_final);
  mysqli_connect_error();
  //menampung daftar hadir
  $daftar_hadir = array();
  //menampilkan semua nilai
  while ($baris = mysqli_fetch_assoc($result_final)) {
    # code...
    $daftar_hadir[] = $baris;
  }

$query_id_rapat = "SELECT id from rapat order by id desc LIMIT 1";
$result_id_rapat = mysqli_query($db, $query_id_rapat);
$get_id = mysqli_fetch_assoc($result_id_rapat);
