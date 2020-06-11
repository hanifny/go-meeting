<?php
session_start();
include "connection.php";

// dari <input name="username" ...
$username = $_POST['username'];
$password = md5($_POST['password']);

// ... periksa username

$query = "SELECT * FROM users WHERE username = '$username'";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);

if ($data_user != null) {

    // ... jika hasil tidak null berarti user ketemu,
    // ... lanjut periksa password
    if ($password == $data_user['password']){
    	

if($data_user['level'] == 0){

	 $_SESSION['admin'] = $data_user;
			$_SESSION['s_admin']=$username;
			echo '<script language="javascript">alert("Selamat datang di Go Meeting"); document.location="users/admin/index.php";</script>';
		}else if ($data_user['level'] == 1){
			 $_SESSION['handler'] = $data_user;
			$_SESSION['s_handler']=$username;
			echo '<script language="javascript">alert("Selamat datang di Go Meeting"); document.location="users/handler/index.php";</script>';
		}
		else if ($data_user['level'] == 2){
			 $_SESSION['participant'] = $data_user;
			$_SESSION['s_participant']=$username;
			echo '<script language="javascript">alert("Selamat datang di Go Meeting"); document.location="users/participant/index.php";</script>';
		}
		}
	}
	else {
    header('Location: index.php');
}
?>
