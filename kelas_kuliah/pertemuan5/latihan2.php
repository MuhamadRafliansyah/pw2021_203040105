<?php
/*
 Muhamad Rafliansyah
203040105
https://github.com/MuhamadRafliansyah/pw2021_203040105.git
Pertemuan 5
*/
?>


<?php 
// pengulangan pada array
// for / foreach
$angka = [3,6,4,5,8,10,21];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan2</title>
</head>
<style>
	.kotak {
		width: 50px;
		height: 50px;
		background-color: salmon;
		text-align: center;
		line-height: 50px;
		margin: 3px;
		float: left;
	}
	.clear { clear: both; }
</style>
<body>
	<?php for($i = 0; $i < count($angka); $i++) { ?>
		<div class="kotak"><?php echo $angka[$i]; ?></div>
	<?php } ?>


	<div class="clear"></div>

	<?php foreach ($angka as $a) { ?>
		<div class="kotak"><?php echo $a; ?></div>
	<?php } ?>

	<div class="clear"></div>

	<?php foreach ($angka as $a) : ?>
		<div class="kotak"><?php echo $a; ?></div>
	<?php endforeach; ?>
	
</body>
</html>