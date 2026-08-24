<?php

require_once __DIR__ . '/../vendor/autoload.php';
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Memberikan warna abu-abu muda pada baris genap */
        tr:nth-child(even) {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>';

        $i = 1;
        foreach($mahasiswa as $row) {
            $html .= '<tr>
                <td>' . $i++ . '</td>
                <td><img src="img/' . $row["gambar"] . '" width="50"></td>
                <td>' . $row["nim"] . '</td>
                <td>' . $row["nama"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>' . $row["jurusan"] . '</td>
            </tr>';
        }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);

?>