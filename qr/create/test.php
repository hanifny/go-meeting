<?php
	include "qrlib.php";

	//membuat QR code dengan tulisan di bawah ini
	QRcode::png("Hanif", "image.png", "H", 20, 10);
	echo "<img src='image.png' />";
?>