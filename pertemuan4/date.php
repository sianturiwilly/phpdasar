<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu.
// echo date("l, d-M-Y");

// Time
// UNIX TimeStamp / EPOCH
// Detik yang sudah berlalu sejak 1 Januari 1970.
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// Membuat sendiri detik.
// mktime(0,0,0,0,0,0,0)
// Jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,1,19,1993));

// strtotome
echo date("l", strtotime("19 January 1993"));
?>