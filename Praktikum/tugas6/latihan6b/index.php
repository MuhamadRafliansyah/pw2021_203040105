<?php
/*
Muhamad Rafliansyah
203040105
SHIFT Kamis 08:00 - 09:00
*/
?>

<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$otomotif = query("SELECT * FROM otomotif")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Latihan6b</title>
</head>
<body>
                <a href="php/login.php">
                    <button type="">Masuk ke halaman admin</button>
                </a>
<div class="container">
    <?php foreach ($otomotif as $otf) : ?>
            <p class="nama ">
                <a href="php/detail.php?id=<?= $otf['id'] ?>">
                    <?= $otf["nama"] ?>
                </a>
                
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>