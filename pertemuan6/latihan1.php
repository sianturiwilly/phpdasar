<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    $angka = [[1,2,3],[4,5,6],[7,8,9]];
    ?>

    <?php foreach($angka as $a) : ?>
        <?php foreach($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>