<?php
require 'functions.php';




// CEK APAKAH TOMBOL TAMBAH SUDAH DITEKAN 
if(isset($_POST['tambah'])) {
    if( tambah($_POST) > 0 ) {
        echo "script>
            alret('data berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <from action="" method="post">
    <ul>
        <li>
            <label>
            Nama :
            <input type="text" name="nama" autofocus required>
            </label><br><br>
        </li>
        <li>
        <label>
            NRP :
            <input type="text" name="nrp" required>
            </label><br><br>
        </li>
        <li>
        <label>
            Email :
            <input type="text" name="email" required>
            </label><br><br>
        </li>
        <li>
        <label>
            Jurusan :
            <input type="text" name="Jurusan" required>
            </label><br><br>
        </li>
        <li>
        <label>
            Gambar :
            <input type="text" name="gambar" required>
            </label><br><br>
        </li>
        
            <button type="submit" name="tambah">Tambah Data!</button>
    </ul>
</body>
</html>