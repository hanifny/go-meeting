<?php
session_start();
if (!isset($_SESSION['s_participant'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$qr_code = $_POST['y'];
$id_user = $_POST['id_user'];
$id_rapat = $_POST['id_rapat'];
$kehadiran = 'Hadir';


echo $qr_code;
echo $id_user;
echo $id_rapat;
echo $kehadiran;

if ($qr_code = 'hanif') {
	$query = "UPDATE presensi 
    SET kehadiran = '$kehadiran'
    WHERE id_rapat = $id_rapat AND id_user = $id_user";

	$hasil = mysqli_query($db, $query);
	//var_dump(mysqli_error($db)); exit();
	
	if ($hasil == true) {
	    header('Location: presensi.php');
	} else {
	    header('Location: presensi2.php');
	}
}

header('Location: presensi.php');
