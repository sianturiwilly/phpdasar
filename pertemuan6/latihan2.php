<?php
// $mahasiswa = [
//     ["Willi Sianturi", "92316073", "Sistem Informasi", "prajudiwilliam10@gmail.com"],
//     ["Darwis Purba", "92418074", "Hukum", "darwispurba@gmail.com"],
//     ["Prajudi William Chrisdeardo", "55411549", "Teknik Informatika", "willyprajudi93@gmail.com"],
//     ["Nike Ardilla", "51900239", "Hukum", "nikeardilla@gmail.com"]
// ];

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri.
$mahasiswa = [
    [
        "nama" => "Willi Sianturi",
        "nim" => "92316073",
        "jurusan" => "Sistem Informasi",
        "email" => "prajudiwilliam10@gmail.com",
        "gambar" => "willi.jpg"
    ],
    [
        "nama" => "Darwis Purba",
        "nim" => "59918920",
        "jurusan" => "Hukum",
        "email" => "darwispurba@gmail.com",
        "gambar" => "Cristiano_Ronaldo_Portugal.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>