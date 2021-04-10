<?php
/*
Muhamad Rafliansyah
203040105
https://github.com/MuhamadRafliansyah/pw2021_203040105.git
Pertemuan 6 
Materi pertemuan ke-6 ini mempelajari tentang ARRAY Associative
*/
?>

<?php 
// $mahasiswa = [
//     ["Muhamad Rafliansyah", "203040105", "rafliansyah21@gmail.com", "Teknik Informatika"],
//     ["Farhan alfauzi", "203040083", "Farhanalfauzi123@mail.com", "Teknik Informatika"]
// ];

// ARRAY Associative
// definisisnya sama spt ARRAY Numerik, kecuali
//pada ARRAY Associative key-nya adalah String yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Farhan Alfauzi",
        "nrp" => "203040083",
        "email" => "farhanalfauzi123@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "farhan1.jpg"
    ],
    [
        "nama" => "Muhamad Rafliansyah",
        "nrp" => "203040105",
        "email" => "rafliansyaha21@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rafli2.jpg"
    ]
];
// echo $mahasiswa[1]["nama"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NRP : <?php echo $mhs["nrp"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>