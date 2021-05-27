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
        // jika remember me dicentang
        if (isset($_POST['remember'])) {
            setcookie('username', $row['username'], time() + 60 * 60 * 24);
            $hash = hash('sha256'. $row['id']);
            setcookie('hash', $hash, time() + 60 * 60 * 24);
        }
    
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: ../php/admin.php");
        die;
    }
    header("Location: ../php/index.php");
    die;
}
}
    $error = true;
}
// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($shash === hash ('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row ['username'];
        header("Location: admin.php");
        exit;
    }
}
?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    
    <!-- Login -->
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                    <div class="card-body">
                    <h3 class="mb-5">Login</h3>
                    <form action="" method="post">

                    <?php if (isset($error)) : ?>
                        <p style="color: red; font-style: italic;">Username atau Password salah</p>
                    <?php endif; ?>

                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Masukan username" required>
                        <br>
                    </div>
                        
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Masukan password" required>
                    </div>

                <div class="row">
                    <div class="col-6 text-left">
                        <div class="form-group form-check ml-2">
                            <input type="checkbox" class="form-check-input" name="remember">
                            <label for="remember" class="form-check-label ml-2"> Ingat Saya?</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group my-4">
                    <button type="submit" name="submit" class="btn btn-dark form-control">Log In</button>
                    <br><br>
                    <button type="submit" name="register" class="btn btn-dark form-control"><a href="../php/detail.php">Kembali</a></button>
                    </div>
                    <p>Tidak punya akun?<a href="registrasi.php"> Register</a></p>
                </form>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End Login -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    </body>
</html>