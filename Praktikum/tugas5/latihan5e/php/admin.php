<?php
//menghubungkan dengan file php lainnya
require 'functions.php';

//melakuakan query
$otomotif = query("SELECT * FROM otomotif");


if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $otomotif= query("SELECT * FROM otomotif WHERE
            nama LIKE '%$keyword%' OR
            price LIKE '%$keyword%' OR
            categori LIKE '%$keyword%' ");
} else {
    $otomotif = query("SELECT * FROM otomotif");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5e</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    
<form action ="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
</form>

    <table border="1" cellpadding="13" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Opsi</th>
        <th>Img</th>
        <th>Nama</th>
        <th>Description</th>
        <th>Price</th>
        <th>Categori</th>
    </tr>
<?php if (empty($otomotif)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data tidak ditemukan</h1>
        </td>
    </tr>
<?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($otomotif as $otf) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href=""><button>Ubah</button</a>
                <a href="ubah.php?id=<?= $otf['id'] ?>
                <a href="hapus.php?id=<?= $otf['id'] ?> " onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?= $otf['img']; ?>" alt=""></td>
            <td><?= $otf['nama']; ?></td>
            <td><?= $otf['description']; ?></td>
            <td><?= $otf['price']; ?></td>
            <td><?= $otf['categori']; ?></td>
            </tr>
            <?php $i++; ?>
    <?php endforeach; ?>
    <?php endif; ?>
    </table>
</body>
</html>