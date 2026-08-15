<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka.
// $nama = "Willy Sianturi";
// echo 'Halo, nama saya $nama';

// Operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabungan string / concatenation / concat
// .
// $nama_depan = "Willy";
// $nama_belakang = "Sianturi";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Willy";
// $nama .= " ";
// $nama .= "Sianturi";
// echo $nama;

// Perbandingan
// <, >, <=, >==, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 ==+ "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);