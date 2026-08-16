<?php
$mahasiswa = [
    ["Willy Sianturi", "92316073", "Sistem Informasi", "prajudiwilliam10@gmail.com"],
    ["Darwis Purba", "93320003", "Hukum", "darwis93@gmail.com"],
    ["Dwijudio Immanuel", "92510105", "Kedokteran", "dio95@gmail.com"]
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
        <li>Nama: <?= $mhs[0]; ?></li>
        <li>NIM: <?= $mhs[1]; ?></li>
        <li>Jurusan: <?= $mhs[2]; ?></li>
        <li>Email: <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>