<?php 
// $mahasiswa = [
//     ["Willy Sianturi", "92316073", "Sistem Informasi", "prajudiwilliam10@gmail.com"],
//     ["Darwis Purba", "93320003", "Hukum", "darwis93@gmail.com"]
// ];

// Array Associative
// Definisinya sama seperti array numerika, kecuali
// Key-nya adalah string yang kita buat sendiri.
$mahasiswa = [
    [
        "nama" => "Willy Sianturi",
        "nim" => "92316073",
        "email" => "prajudiwilliam10@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "willy.jpg",
    ],
    [
        "nama" => "Darwis Purba",
        "nim" => "93320003",
        "email" => "darwis93@gmail.com",
        "jurusan" => "Hukum",
        "gambar" => "darwis.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NIM: <?= $mhs["nim"]; ?></li>
        <li>Jurusan: <?= $mhs["email"]; ?></li>
        <li>Email: <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>