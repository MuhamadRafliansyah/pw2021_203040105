<?php
require 'functions.php';

$id = $_GET['id'];
$otf = query("SELECT * FROM otomotif WHERE id= $id")[0];

if(isset($_POST['ubah'])) {
    if (ubah($_POST) < 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<h3>Ubah Data Otomotif</h3>
<form action="" method="post">
    <ul>
        <input type="hidden" name="id" id="id" value="<?= $otf['id']; ?>">
        <li>
            <label for="img">Img</label><br>
            <input type="text" name="img" id="img" required value="<?= $otf['img'];?>"><br><br>
        </li>
        <li>
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama"required value="<?= $otf['nama'];?>"><br><br>
        </li>
        <li>
            <label for="description">Description</label><br>
            <input type="description" name="description" id="description"required value="<?= $otf['description'];?>"><br><br>
        </li>
        <li>
            <label for="price">Price</label><br>
            <input type="price" name="price" id="price"required value="<?= $otf['price'];?>"><br><br>
        </li>
        <li>
            <label for="categori">Categori</label><br>
            <input type="categori" name="categori" id="categori"required value="<?= $otf['categori'];?>"><br><br>
        </li>
        </div>
        <button type="submit" name="ubah" class="waves-effect waves-light brown lighten-2 btn-small">Ubah Data!</button>
        <button type="submit"><a href="../index.php" style="text-decoration: none; color: black;">Kembali</a></button>
    </div>
