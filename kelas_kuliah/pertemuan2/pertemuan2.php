<?php
/*
Mahamad Rafliansyah
203040105
https://github.com/MuhamadRafliansyah/pw2021_203040105.git
Pertemuan 2 
Mempelajari mengenai sintaks PHP
*/

// Standar Output
// echo, print
// print_r
// var_dump
// echo "Muhamad Rafliansyah";
// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variable dan Tipe Data
// Variable 
// Tidak Boleh Diawali dengan angka, Tapi BOLEH mengandung angka
// $nama = "Muhamad Rafliansyah";
// echo "Hallo, nama saya $nama";
// Operator
// aritmatika
// + - * / %
// $x= 10;
// $y = 20;
// echo $x * $y;

// // penggabungan string / concatenation /concat
// .
// $nama_depan = "Muhamad";
// $nama_belakang = "Rafliansyah";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Muhamad";
// $nama .= " ";
// $nama .= "Rafliansyah";
// echo $nama;

// // Pertandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

$nama = "Muhamad Rafliansyah";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hallo, Selamat Datang  <?php echo $nama; ?><h1>
    <?php 
    echo "<h1>Selamat Datang Muhamad Rafliansyah</h1>"
    ?>
</body>
</html>
