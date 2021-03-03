<?php
// Muhamad Rafliansyah
// 203040105
// Shift Kamis 08.00 - 09.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1c_203040105</title>
    <style>
        .kotak {
            border: black 2px;
        }
        div {
            background-color: salmon;
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            border: black solid 3px;
            line-height: 50px;
            text-align: center;
            margin: 0px 5px 10px 0px;
        }
    </style>
</head>
<body>
<?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($z = 1; $z <= $i; $z++) : ?>
            <div><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>