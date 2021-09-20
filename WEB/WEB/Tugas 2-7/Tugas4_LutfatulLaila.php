<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		Jumlah Bintang: <input type="number" name="bintang">
		<br />
		<input type="submit" name="submit" value="kirim">
	</form>
</body>
</html>
<?php 
	if(isset($_POST['submit'])){
		$star =  $_POST['bintang'];

		for ($h=1; $h<=$star; $h++) { 
			for ($e=1; $e<=$h ; $e++) { 
				echo "*";
			}
			echo "<br>";
		}
	}

?>