<?php
/*
Muhamad Rafliansyah
203040105
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php 
$pemain_bola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan3b_203040105</title>
    <style> 
    .table {
        border: 2px solid black;
        padding: 10px;
        text-align: left;
        font-family: arial;
        width: 30%;
    }
    </style>
</head>
<body>
<div class="table">
<table>
    <h3>Daftar Pemain Bola Terkenal</h3>
    <ol>
        <?php foreach($pemain_bola as $pb) {
            echo "<li>$pb</li>";
        }
        ?>
    </ol>

    <?php 
    array_push($pemain_bola, "Luca Modric", "Sadio Mane");
    sort($pemain_bola);
    ?>
    <h3>Daftar Pemain Bola Terkenal Baru</h3>
    <ol>
        <?php foreach($pemain_bola as $pb) {
            echo "<li>$pb</li>";
        }
        ?>
    </ol>
</div>
</body>
</html>