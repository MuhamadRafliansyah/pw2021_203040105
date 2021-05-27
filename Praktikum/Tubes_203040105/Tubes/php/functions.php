<?php
//fungsi untuk melakukan koneksi ke database
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

//fungsi delet data
function hapus($id)
 {
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM otomotif WHERE id = $id");

	return mysqli_affected_rows($conn);
}
//fungsi untuk mengubah data
function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $categori = htmlspecialchars($data['categori']);

$query = "UPDATE otomotif
            SET
            img = '$img',
            nama = '$nama',
            description = '$description',
            price = '$price',
            categori = '$categori',
            WHERE id = '$id'
            ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
    
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
        </script>";
    return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>
