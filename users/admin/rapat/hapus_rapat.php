<?php

include '../../../connection.php';

$id = $_GET['id'];
  $query2 = "SELECT *
      FROM detail_rapat
      WHERE id = $id";
  $result = mysqli_query($db, $query2);
  $rapat = mysqli_fetch_assoc($result);

$query11 = "SELECT id from users order by id asc";
$hasil11 = mysqli_query($db, $query11);
mysqli_connect_error();
while ($row = mysqli_fetch_assoc($hasil11)) {
    # code...
    $iduser = $row['id'];
	$query3 = "DELETE FROM presensi WHERE id_rapat=$id AND id_user=$iduser";
	$hasil3 = mysqli_query($db, $query3);
}

$query = "DELETE FROM rapat WHERE id = $id";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('location: daftar_rapat.php');
} else {
    header('location: tambah_rapat.php');
}