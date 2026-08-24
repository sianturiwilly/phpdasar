<?php
require 'functions.php';

// Perbaikan: Ubah "regiter" menjadi "register"
if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0) {
        // Perbaikan: Menambahkan petik tunggal penutup di akhir pesan alert
        echo "<script>
                alert('User baru berhasil ditambahkan.');
                document.location.href = 'login.php'; // Opsional: arahkan ke halaman login
              </script>";
    } else {
        echo mysqli_error($conn);
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
<h1>Halaman Registrasi</h1>

<form action="" method="post">
    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" required autocomplete="off">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
        </li>
        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2" required>
        </li>
        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul>
</form>

</body>
</html>