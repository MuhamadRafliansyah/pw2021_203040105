<?php
//Muhamad Rafliansyah
//203040105
//shift kamis 08:00 - 09:00
?>

<?php
$jawabanIsset = "Isset adalah = Suatu fungsi untuk mengecekapakah sebuah variable sudah dibuat atau belum dan akan menghasilkan boolean true or false. <br> <br>";
$jawabanEmpty = "Empty adalah = Suatu fungsi untuk mengecek sebuah varible sudah ada isinya atau tidak.";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;


function soal($style)
{
    echo "<div class = $style>
    <h1>" . $GLOBALS['isset'] . "</h1>
    <h1>" . $GLOBALS['empty'] . "</h1>
    </div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>latihan2b_203040105</title>
    <style>
        .center {
            border: 1px solid black;
            padding-left: 10px;
            font-size: 8px;
            color: goldenrod;
            font-family: monospace;
            background-color: #222222;
        }
    </style>
</head>

<body>
    <?php
    echo soal("center");
    ?>
</body>

</html>