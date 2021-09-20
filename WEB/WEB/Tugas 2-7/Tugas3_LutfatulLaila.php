<?php
	for($angka=1; $angka<=100; $angka++) { // inisiasi bilangan yang akan ditampilkan menggunakan perulangan for
		if($angka %2 == 0){ // melakukan pembagian modulus 2 terhadap bilangan menggunakan percabangan if
			echo "$angka adalah Bilangan Genap <br>"; // kalimat akan ditampilkan jika bilangan habis dibagi 2
		} else {
			echo "$angka adalah Bilangan Ganjil <br>"; // kalimat akan ditampilkan jika bilangan dibagi 2 masih sisa
		}
	}
?>