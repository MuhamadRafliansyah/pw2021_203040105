<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
        </script>";
    }
}

?>
<h3>Form Tambah Data Otomotif</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="img">Img</label><br>
            <input type="file" name="img" id="img" required><br><br>
        </li>
        <li>
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="description">Description</label><br>
            <input type="description" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="price">Price</label><br>
            <input type="text" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="category">category</label><br>
            <input type="category" name="category" id="category" required><br><br>
        </li>
        

        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
    </form>