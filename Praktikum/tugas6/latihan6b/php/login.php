<?php
session_start();
require 'functions.php';
//melakukan pengecekan apakah user sudah melakukan login jika sudah redirech ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php") ;
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
//mencocokan USERNAME dan PASSWORD
if (mysqli_num_rows($cek_user) > 0){
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['hash'] = hash('sha256', $row['id'], false);
    
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
    }
    header("Location: ../index.php");
    die;
}
}
    $error = true;
}
?>

<form action="" method="post">
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau pasword salah</p>
    <?php endif; ?>
    <table>
        <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
    
    </div>
    <button type="submit" name="submit">Login</button>
    <div class="registrasi">
    <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
</form>