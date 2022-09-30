<?php
// Willi
// Belajar PHP untuk PEMULA | 6. FUNCTION
// Date: Untuk menampilkan tanggal dalam format tertentu.
// echo date("l, d-M-y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970.
// echo time();
// echo date("l", time()+60*60*24*100);

// mktime
// Membuat sendiri detik.
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,1,19,1993));

// strtotime
echo date ("l", strtotime("19 January 1993"));
?>