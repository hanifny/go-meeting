<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['s_handler'])) {
    header('Location: ../../../index.php');
    exit();
}

include '../../../connection.php';

$id_rapat = $_POST['id_rapat'];
$event = $_POST['event'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];

$query = "INSERT INTO rapat (id, tanggal, keterangan, id_event) 
    	  VALUES ('$id_rapat', '$tanggal', '$keterangan', '$event')";
$hasil = mysqli_query($db, $query);


//ambil id rapat
$query10 = "SELECT id from rapat order by id desc limit 1";
$hasil10 = mysqli_query($db, $query10);
$data10 = mysqli_fetch_assoc($hasil10);

//simpan id rapat
$idrapat = $data10['id'];

//ambil data id user
$query11 = "SELECT id from users order by id asc";
$hasil11 = mysqli_query($db, $query11);
mysqli_connect_error();

// ... 
while ($row = mysqli_fetch_assoc($hasil11)) {
    # code...
    $iduser = $row['id'];
	$query3 = "INSERT INTO presensi (id_rapat, id_event, id_user) VALUES ('$idrapat', '$event', '$iduser')";
	$hasil3 = mysqli_query($db, $query3);
}

if ($hasil == true) {
    header('Location: daftar_rapat.php');
} else {
    header('Location: tambah_rapat.php');
}

/*
<!--
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo $id_rapat;
	echo " "; 
	echo $event;
	echo " ";
	echo $tanggal;
	echo " ";
	echo $keterangan 
	?>
</body>
</html>
-->

