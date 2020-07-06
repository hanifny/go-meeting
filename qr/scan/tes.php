<?php 
	if (isset($_POST['y'])) {
		echo $_POST['y'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Presensi Rapat dengan Scan QR Code</h1>
	<form action="dapat_id.php" method="post" id="form">
		<input type="hidden" name="y" id="y">
	</form>
	<h3>Petunjuk :</h3>
	<h6>1. Scan Code QR</h6>
	<h6>2. Click tombol di bawah ini</h6>
	<button id="btn">Click me!</button>
	<hr>
        <canvas></canvas>
        <hr>
        <ul></ul>
		<script type="text/javascript" src="js/qrcodelib.js"></script>
        <script type="text/javascript" src="js/webcodecamjs.js"></script>
        <script type="text/javascript">
        	var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var arg = {
                resultFunction: function(result) {
                	var aChild = document.createElement('li');
                	
                    var y = result.code;
                    document.querySelector('body').appendChild(aChild);

            		function click() {
						document.getElementById("y").value = y;
						document.getElementById("form").submit();
					}
					var klik = document.getElementById("btn");
					klik.addEventListener("click", click);
		        }
		    };
            new WebCodeCamJS("canvas").init(arg).play();
        </script>
</body>
        
</html>