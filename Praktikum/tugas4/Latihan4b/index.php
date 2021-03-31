<?php
/*
Muhamad Rafliansyah
203040105
SHIFT Kamis 08:00 - 09:00
*/
?>

<?php 
//Menghubungkan dengan file php lainnya
require 'php/functions.php';

//Melakukan query
$otomotif = query("SELECT * FROM otomotif")
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4b</title>
</head>
    <link rel = "stylesheet" href = "style.css">
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
            <th>No</th>
            <th>Img</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Categori</th>
            </tr>
            <?php $i = 1 ?>
    <?php foreach($otomotif as $otf): ?>
                    <tr>
                        <td><?=$i; ?></td>
                        <td><img src="assets/img/<?=$otf["img"]; ?>"></td>
                        <td><?= $otf["nama"];?></td>
                        <td><?= $otf["description"]; ?></td>
                        <td><?= $otf["price"]; ?></td>
                        <td><?= $otf["categori"]; ?></td>
                    </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>
</body>
</html>