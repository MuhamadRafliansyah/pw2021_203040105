<?php
/*
 Muhamad Rafliansyah
203040105
https://github.com/MuhamadRafliansyah/pw2021_203040105.git
Pertemuan 5 
*/
?>

<?php  
$mahasiswa = [
	["Muhamad Rafliansyah", "203040105", "Teknik nformatika", "rafliansyah20001@gmail.com"], ["farhan alfauzi", "203040083", "Teknik nformatika", "farhanalfauzi123@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $mhs) {?>
	
	<ul>
		<li>Nama : <?php echo $mhs[0]; ?></li>
		<li>NRP : <?php echo $mhs[1]; ?></li>
		<li>Jurusan : <?php echo $mhs[2]; ?></li>
		<li>Email : <?php echo $mhs[3]; ?></li>
	</ul>
<?php } ?>
</body>
</html>

