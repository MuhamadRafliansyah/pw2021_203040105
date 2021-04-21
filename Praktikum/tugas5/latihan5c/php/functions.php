<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "otomotif");

    return $conn;

}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    return $rows;
}

//fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $categori = htmlspecialchars($data['categori']);

    $query = "INSERT INTO otomotif
                    VALUES  
                    ('','$img','$nama','$description','$price','$categori')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM otomotif WHERE id = $id");

	return mysqli_affected_rows($conn);
}
?>

