<?php
require 'functions.php';


// jika tidak ada id di url
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

//mengambil id dari url

$id = $_GET['id'];

if( hapus($_POST) > 0) {
    if( hapus($id) > 0 ) {
        echo "script>
            alret('data berhasil dihapus!');
            document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}
?>