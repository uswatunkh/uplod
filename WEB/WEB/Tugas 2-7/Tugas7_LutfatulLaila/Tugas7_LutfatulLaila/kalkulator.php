<!DOCTYPE html>
<html>

<head>
	<title>Kalkulator Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
</head>

<body>
	<div class="kalkulator">
		<h2 class="tittle">Kalkulator Sederhana</h2>
		<form method="post" action="kalkulator.php">
			<input type="text" name="bilangan1" class="bilangan" autocomplete="off" placeholder="Bilangan Pertama" required />
			<input type="text" name="bilangan2" class="bilangan" autocomplete="off" placeholder="Bilangan Kedua" required />
			<select class="option" name="operasi">
				<option value="">Pilih Operasi</option>
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="button">
			<input type="submit" name="reset" value="Reset" class="button">
		</form>
		<?php
		if (isset($_POST['hitung'])) {
			$bilangan1 = $_POST['bilangan1'];
			$bilangan2 = $_POST['bilangan2'];
			$operasi = $_POST['operasi'];

			if ($operasi == "tambah") {
				$hasil = $bilangan1 + $bilangan2;
			} else if ($operasi == "kurang") {
				$hasil = $bilangan1 - $bilangan2;
			} else if ($operasi == "kali") {
				$hasil = $bilangan1 * $bilangan2;
			} else if ($operasi == "bagi") {
				$hasil = $bilangan1 / $bilangan2;
			} else {
				$hasil = "Pilih Operasi Dulu";
			}
		}
		?>
		<?php if (isset($_POST['hitung'])) { ?>
			<input type="text" value="<?php echo $hasil; ?>" placeholder="Hasil" class="bilangan">
		<?php } else { ?>
			<input type="text" value="" placeholder="Hasil" class="bilangan">
		<?php } ?>
	</div>
</body>

</html>