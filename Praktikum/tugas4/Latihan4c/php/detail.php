<?php 

	// Mengecek apakah ada id yang dikirimkan
	// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$otomotif = query("SELECT * FROM otomotif WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail php</title>
	<style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        img {
            max-width: 150px;
			border: 4px solid black;
			padding: 10px;
			height: 100px;
        }
    </style>
</head>
<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?= $otomotif["img"]; ?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $otomotif["nama"]; ?></p>
			<p><?= $otomotif["description"]; ?></p>
			<p><?= $otomotif["price"]; ?></p>
			<p><?= $otomotif["categori"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>

</body>
</html>