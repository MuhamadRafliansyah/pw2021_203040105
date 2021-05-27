<?php
require 'functions.php' ;

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                documents.location.href = 'login.php' ;
                </script>" ;
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
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
    <link rel="stylesheet" href="../css/registrasi.css">
    <title>Registrasi</title>
</head>
<body>
    
        <!-- Registrasi -->
        <div class="auth">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="card">
                        <div class="card-body">
                        <h3 class="mb-5">Registrasi</h3>
                        <form action="" method="post">
                
    
                    <div class="form-group">
                        <tr>
                            <td><input type="text"class="form-control" name="username" placeholder="Masukan username" required></td>
                            <br>
                        </tr>
                        </div>
                        <div class="form-group">
                        <tr>
                            <td><input type="text"class="form-control" name="password" placeholder="Masukan password" required></td>
                            <br>
                        </tr>
                        </div>
    
                        <button type="submit" name="register" class="btn btn-dark form-control">Register</button>
                        <br><br>
                        <button type="submit" name="register" class="btn btn-dark form-control"><a href="../php/login.php">Kembali</a></button>
                        <br><br>
                        </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    </body>
</html>