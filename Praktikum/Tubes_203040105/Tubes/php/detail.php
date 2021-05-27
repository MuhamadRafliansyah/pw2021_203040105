<?php 

	// Mengecek apakah ada id yang dikirimkan
	// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$otomotif = query("SELECT * FROM otomotif WHERE id = $id")[0];
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/detail.css">
    <title>detail</title>
</head>
<body>
    
    <!-- detail -->
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                    <div class="card-body">
                    <h3 class="mb-5"><img src="../assets/img/<?= $otomotif["img"]; ?>" alt=""></h3>
                    <form action="" method="post">

                    <div class="form-group">
					<p><?= $otomotif["nama"]; ?></p>
					<p><?= $otomotif["description"]; ?></p>
					<p><?= $otomotif["price"]; ?></p>
					<p><?= $otomotif["categori"]; ?></p>
                    </div>
                        
                    <div class="form-group my-4">
                    <button type="submit" name="register" class="btn btn-dark form-control"><a href="../php/detail.php">Kembali</a></button>
                    </div>
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