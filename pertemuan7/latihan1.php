<?php
// SUPERRGLOBAL
// variabel global milik PHP.
// merupakan Array Associative
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>