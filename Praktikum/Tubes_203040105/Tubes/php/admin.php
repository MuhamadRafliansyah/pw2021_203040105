<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

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

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>admin</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    
    <!-- admin -->
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-20 col-lg-15">
                    <div class="card-body">
                    <div class="card-body">
                    <h3 class="mb-10">Data Bengkel Otomotif</h3>
                    <form action="" method="post">
    <div class="add">
        <a href="tambah.php"><button type="button" class="btn btn-success">Tambah Data</button></a>
        <br><br>
    </div>

    <div class="logout">
        <a href="logout.php"><button type="button" class="btn btn-warning">Logout</button></a>
    </div>
    
<form action ="" method="get">

</form>

<form action ="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" class="btn btn-info" name="cari">Cari!</button>
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
                <a href="ubah.php?id=<?= $otf['id'] ?>"><button type="button" class="btn btn-primary">Ubah</button></a>
                <a href="hapus.php?id=<?= $otf['id'] ?> " onclick="return confirm('Hapus Data??')"><button type="button" class="btn btn-danger">Hapus</button></a>
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
    
    </div>
            </div>
        </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    </body>
</html>