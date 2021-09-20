<?php 
function penjumlahan($bilangan1,$bilangan2){ //fungsi untuk melakukan penjumlahan
	$hasil = $bilangan1 + $bilangan2;
	return $hasil;
}

function pengurangan($bilangan1,$bilangan2){ //fungsi untuk melakukan pengurangan
	$hasil = $bilangan1 - $bilangan2;
	return $hasil;
}

function perkalian($bilangan1,$bilangan2){ //fungsi untuk melakukan perkalian
	$hasil = $bilangan1 * $bilangan2;
	return $hasil;
}
function pembagian($bilangan1,$bilangan2){ //fungsi untuk melakukan pembagian
	$hasil = $bilangan1 / $bilangan2;
	return $hasil;
}

$bilangan1 = 9; //memberikan nilai pada bilangan 1
$bilangan2 = 3; //memberikan nilai pada bilangan 2

echo "bilangan 1 : ".$bilangan1;
echo "<br>";
echo "bilangan 2 : ".$bilangan2;
echo "<br>";
echo "===================================================";
echo "<br>";
echo "hasil penjumlahan adalah : ".penjumlahan($bilangan1, $bilangan2); //menampilkan hasil penjumlahan dan memanggil fungsi penjumlahan dengan memberikan nilai yang diambil dari variabel
echo "<br>";
echo "hasil Pengurangan adalah : ".pengurangan($bilangan1, $bilangan2); //menampilkan hasil pengurangan dan memanggil fungsi pengurangan dengan memberikan nilai yang diambil dari variabel
echo "<br>";
echo "hasil perkalian adalah : ".perkalian($bilangan1, $bilangan2); //menampilkan hasil perkalian dan memanggil fungsi perkalian dengan memberikan nilai yang diambil dari variabel
echo "<br>";
echo "hasil pembagian adalah : ".pembagian($bilangan1, $bilangan2); //menampilkan hasil pembagian dan memanggil fungsi penmbagian dengan memberikan nilai yang diambil dari variabel

 ?>