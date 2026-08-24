<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Tombol cari ditekan.
if(isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <!-- CDN jQuery Resmi (versi 3.7.1) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>

    <style>
        /* CSS Khusus Cetak Browser (Ctrl+P) */
        @media print {
            .no-print, .aksi {
                display: none !important;
            }
        }
    </style>
</head>
<body>

<!-- Ditambahkan class "no-print" pada Logout dan Cetak -->
<a href="logout.php" class="no-print">Logout</a> | 
<a href="cetak.php" target="_blank" class="no-print">Cetak PDF</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php" class="no-print">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post" class="no-print">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari</button>

    <!-- Gambar loader -->
    <img src="img/loader.gif" class="loader" style="width: 20px; vertical-align: middle; display: none;">
</form>

<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td class="aksi">
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>

</body>
</html>