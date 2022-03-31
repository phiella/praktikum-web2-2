<?php
require_once "class_persegipanjang.php";
$persegi1 = new Persegipanjang(3, 6);
$persegi2 = new Persegipanjang(5, 17);

echo "Menghitung Luas Persegi Panjang";
echo "<br>";
echo "<br/>Luas Persegi Panjang dengan panjang ".$persegi1->panjang." dan lebar ".$persegi1->lebar." adalah ".$persegi1->getLuas()." cm";
echo "<br/>Luas Persegi Panjang dengan panjang ".$persegi2->panjang." dan lebar ".$persegi2->lebar." adalah ".$persegi2->getLuas()." cm";
echo "<br>";
echo "<br>";
echo "<br/>Menghitung Keliling Persegi Panjang";
echo "<br>";
echo "<br/>Keliling Persegi Panjang dengan panjang ".$persegi1->panjang." dan lebar ".$persegi1->lebar." adalah ".$persegi1->getKeliling()." cm";
echo "<br/>Keliling Persegi Panjang dengan panjang ".$persegi2->panjang." dan lebar ".$persegi2->lebar." adalah ".$persegi2->getKeliling()." cm";
?>
