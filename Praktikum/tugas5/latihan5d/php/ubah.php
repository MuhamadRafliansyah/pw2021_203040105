<?php 
require 'functions.php';

$id = $_GET['id'];
$otf = query("SELECT * FROM otomotif WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
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
<title>Form Ubah Data Otomotif</title>
<button type="submit" name="Ubah Data!"></button>
<form action="" method="post">
    <ul>

    <input type="hidden" name="id" value="<?= $otf['id']; ?>">
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
            <input type="price" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="categori">categori</label><br>
            <input type="categori" name="categori" id="categori" required><br><br>
        </li>
        
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            
        </button>
    </ul>
</form>