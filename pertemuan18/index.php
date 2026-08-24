<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// 1. Cek apakah ada keyword pencarian dari URL (GET)
$keyword = isset($_GET["keyword"]) ? $_GET["keyword"] : "";

// 2. Hitung jumlah total data (sesuai pencarian jika ada)
if (!empty($keyword)) {
    // Query hitung data hasil pencarian
    $jumlahData = count(query("SELECT * FROM mahasiswa WHERE 
                    nama LIKE '%$keyword%' OR 
                    nim LIKE '%$keyword%' OR 
                    email LIKE '%$keyword%' OR 
                    jurusan LIKE '%$keyword%'"));
} else {
    // Total seluruh data jika tidak ada pencarian
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
}

// 3. Konfigurasi Pagination
$jumlahDataPerHalaman = 3;
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"]) && !empty($_GET["halaman"])) ? (int)$_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// 4. Query untuk mengambil data sesuai halaman dan keyword
if (!empty($keyword)) {
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE 
                    nama LIKE '%$keyword%' OR 
                    nim LIKE '%$keyword%' OR 
                    email LIKE '%$keyword%' OR 
                    jurusan LIKE '%$keyword%' 
                    LIMIT $awalData, $jumlahDataPerHalaman");
} else {
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<!-- Form diset ke method="get" -->
<form action="" method="get">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off" value="<?= htmlspecialchars($keyword); ?>">
    <button type="submit">Cari</button>
</form>
<br><br>

<!-- Navigasi Pagination -->
<?php if($jumlahHalaman > 1) : ?>

    <!-- Tombol Sebelumnya -->
    <?php if($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>&keyword=<?= urlencode($keyword); ?>">&laquo;</a>
    <?php endif; ?>

    <!-- Angka Halaman -->
    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>&keyword=<?= urlencode($keyword); ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>&keyword=<?= urlencode($keyword); ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <!-- Tombol Selanjutnya -->
    <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>&keyword=<?= urlencode($keyword); ?>">&raquo;</a>
    <?php endif; ?>

<?php endif; ?>

<br><br>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php if(empty($mahasiswa)) : ?>
        <tr>
            <td colspan="7" align="center">Data tidak ditemukan.</td>
        </tr>
    <?php else : ?>
        <?php $i = $awalData + 1; ?>
        <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
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
    <?php endif; ?>

</table>

</body>
</html>