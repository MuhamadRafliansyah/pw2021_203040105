<?php
/*
Muhamad Rafliansyah
203040105
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php
    $Otomotif = [
    [
        "picture" => "OZ.jpg",
        "nama" => "Velg OZ Racing",
        "description" => "Velg oz racing Italy",
        "price" => "Rp 50.000.000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "Accosatto.jpg",
        "nama" => "Kopling Accosatto",
        "description" => "Accosato Clutch/Kopling Accosato ukuran 21, pnp dengan cbr250rr",
        "price" => "Rp 2000,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "baut.jpg",
        "nama" => "Baut Lightech",
        "description" => "Screw Kit Blok Mesin ZX636 Lightec",
        "price" => "Rp 1600.000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "bautrem.jpg",
        "nama" => "Baut Banjo",
        "description" => "Bold baut kasar Lightech",
        "price" => "Rp 125000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "handleBrembo.jpg",
        "nama" => "Master Rem Brembo",
        "description" => "Brembo Rcs 15 untuk cbr150 R15 GSXR150 NMAX",
        "price" => "Rp 4000.0000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "tabungminyakrem.jpg",
        "nama" => "Tabung Minyak Rem",
        "description" => "Reservoir Fluid Brembo kecil",
        "price" => "Rp 300.000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "tutuptangki.jpg",
        "nama" => "Fuel cap Ninja 250FI",
        "description" => "Fuel cap ninja250fi 2018 zx25r Tracer",
        "price" => "Rp 750.000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "underbond.jpg",
        "nama" => "footstep",
        "description" => "Underbond Kawasaki Ninja250 Bpro",
        "price" => "Rp 1550.000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "KaliperBrembo.jpg",
        "nama" => "Kaliper Brembo",
        "description" => "Belakang untuk motor X-Max Grey Red logo",
        "price" => "Rp 2750.000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "underbondwr3.jpg",
        "nama" => "Underbond WR3",
        "description" => "Underbond WR3 Untuk Cbr250rr",
        "price" => "Rp 2500.000",
        "category" => "Otomotif",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3e_203040105</title>
    <style>

        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: left;
        }
        th {
            background-color: green;
        }
        img {
            max-width: 40px;
        }

        .categori {
border: 1px solid red;
            background-color: red;
            border-radius: 30px;
            font-size:14px;
            padding: 10px 30px;
            text-align: center;
            display: inline-block;
            margin: 4px 2px;
}
    </style>
</head>
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <th>No</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <tr></tr>
            <?php $nomor = 1;?>
            <?php foreach ($Otomotif as $ot) : ?>
                <td><?= $nomor; ?></td> 
                <td><img src="img/<?= $ot["picture"]; ?>"></td>
                <td><?= $ot["nama"] ?></td>
                <td><?= $ot["description"] ?></td>
                <td><?= $ot["price"] ?></td>
                <td><div class ="categori"><?=$ot["category"];?></td>
                <tr></tr>
                <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>