<?php
// Array
// Variabel yang dapat memiliki banyak nilai.
// Elemen pada array boleh memiliki tipe berbeda.
// Pasangan antara key dan value
// Key-ny adalah index, yang dimulai dari 0.

// Membuat Array
// Cara lama
$hari = array("Senin", "Selasa", "Rabu");
// Cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada Array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>