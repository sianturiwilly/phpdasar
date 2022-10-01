<?php
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
        "nim" => "91078933",
        "jurusan" => "Hukum",
        "email" => "darwispurba93@gmail.com",
        "gambar" => "darwis.jpg"
    ],
    [
        "nama" => "Willi",
        "nim" => "55411549",
        "jurusan" => "Teknik Informatika",
        "email" => "willymusermufc@hotmail.com",
        "gambar" => "willi1.jpg"
    ],
    [
        "nama" => "Nike Ardilla",
        "nim" => "27121975",
        "jurusan" => "Hukum",
        "email" => "nikeardilla@gmail.com",
        "gambar" => "gadis_ayu.jpg"
    ],
    [
        "nama" => "David Beckham",
        "nim" => "25519334",
        "jurusan" => "Teknik Industri",
        "email" => "davidbeckham75@gmail.com",
        "gambar" => "BKZKTrQCAAAt12l.jpg"
    ],
    [
        "nama" => "Serly Armeliana Delvi",
        "nim" => "91154498",
        "jurusan" => "Teknik Informatika",
        "email" => "delviserly@gmail.com",
        "gambar" => "IMG-20220901-WA0001.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>