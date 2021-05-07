<?php
require 'functions.php';
$otomotif = query("SELECT * FROM otomotif");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Latihan5a</title>
    <style>
        img {
    max-width: 100px;
}
.table {
        width:100px;
        padding: 10px;
        font-family: arial;
        text-align: center;
        }
    th {
        background-color: black;
        color: blue;
        }
    .ubah {
        background-color: black;
        color: white;
    }
    .hapus {
        background-color: black;
        color: white;
    }
    </style>
    <i class="baseline-style"></i>
</head>
<body>
<div class="container">
    <table cellpadding="10" cellpading="0" border="1">

        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Img</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Categori</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($otomotif as $otf) : ?>
        <tr>
        <td><?= $i; ?></td>
        <td>
            <a href=""><button class="ubah">Ubah</button</a>
            <a href=""><button class="ubah">Hapus</button</a>
        </td>
        <td><img src="../assets/img/<?=$otf['img']; ?>" alt=""></td>
        <td><?= $otf['nama']; ?></td>
        <td><?= $otf['description']; ?></td>
        <td><?= $otf['price']; ?></td>
        <td><?= $otf['categori']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>