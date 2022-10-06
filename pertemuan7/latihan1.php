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
        "gambar" => "Cristiano_Ronaldo_Portugal.jpg"
    ],
    [
        "nama" => "Willi",
        "nim" => "55411549",
        "jurusan" => "Teknik Informatika",
        "email" => "willymusermufc@hotmail.com",
        "gambar" => "willi1.jpg"
    ],
    [
        "nama" => "Nike Ratnadilla",
        "nim" => "74452033",
        "jurusan" => "Psikologi",
        "email" => "nike1975@gmail.com",
        "gambar" => "294121575_117873404309820_8737278965127091866_n.jpg"
    ],
    [
        "nama" => "Nike Ardilla",
        "nim" => "54029399",
        "jurusan" => "Hukum",
        "email" => "nikeardilla5@gmail.com",
        "gambar" => "gadis_ayu.jpg"
    ],
    [
        "nama" => "Harry Kane",
        "nim" => "34002877",
        "jurusan" => "Teknik Elektro",
        "email" => "harrykane@gmail.com",
        "gambar" => "36002911_10155277558837447_5597773740373966848_n.jpg"
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