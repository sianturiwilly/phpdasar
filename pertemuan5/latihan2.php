<?php
// Pengulangan pada Array
// for / foreach
$angka = [9,1,20,8,15,100,55,44];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php for($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html>