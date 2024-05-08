<?php
// Pertemuan 2 - PHP Dsasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka.
// $nama = "Willi Sianturi";
// echo "Halo, nama saya $nama";

// Operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / concatenation / concat
// .
// $nama_depan = "Willi";
// $nama_belakang = "Sianturi";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x = 5;
// echo $x;
// $nama = "Willi";
// $nama .= " ";
// $nama .= "Sianturi";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>