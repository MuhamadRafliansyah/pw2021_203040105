<?php
/*
Muhamad Rafliansyah
203040105
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php 
//Menghubungkan ke server Database
$conn = mysqli_connect("localhost","root","") or die ("Koneksi ke DB gagal");
//Memilih Database
$check = mysqli_select_db($conn, "otomotif") or die ("database salah");
//Melakukan query dari database
$result = mysqli_query($conn, "SELECT * FROM otomotif");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4a</title>
</head>
    <link rel = "stylesheet" href = "css/style.css">
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
    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?=$i ?></td>
                        <td><img src="assets/img/<?=$row["img"]; ?>"></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["description"] ?></td>
                        <td><?= $row["price"] ?></td>
                        <td><?= $row["categori"]; ?></td>
                    </tr>
                <?php $i++; ?>
            <?php endwhile; ?>

        </table>
    </div>
</body>
</html>