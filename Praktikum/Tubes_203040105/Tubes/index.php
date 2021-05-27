<?php
/*
Muhamad Rafliansyah
203040105
SHIFT Kamis 08:00 - 09:00
*/
?>

<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$otomotif = query("SELECT * FROM otomotif")
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TUBES_203040105</title>
</head>
<body>
                <a href="php/login.php">
                    <button type="">Masuk ke halaman admin</button>
                </a>
<div class="container">
    <?php foreach ($otomotif as $otf) : ?>
            <p class="nama ">
                <a href="php/detail.php?id=<?= $otf['id'] ?>">
                <?= $otf["nama"] ?> 
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
<style>        
        .slider h5 {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0, 5);
        }

        footer {
            padding: 20px 0;
        }
    </style>
    <title>detail</title>
</head>
<body>
    <!--navbar-->
    <div class="navbar-fixed">
        <nav class="purple darken-3">
            <div class="container">
                <div class="nav-wrapper">
                    <a class="brand-logo">Otomotif Racing Team</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#hubungi-kami"><button type="submit" name="submit" class="btn btn-dark form-control">Hubungi Kami</button></a></li>
                        <li><a href="#daftar-barang"><button type="submit" name="submit" class="btn btn-dark form-control">Daftar Barang</button></a></li>
                        <li><a href="php/login.php" type=""><button type="submit" name="submit" class="btn btn-primary">Login</button></type=></a><li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <marquee><p><botton>MELAYANI</botton> : -TUNE UP -SERVICE -GANTI OLI - SPARE PART DAN -BONGKAR MESIN -VARIASI -GANTI BAN ALAMAT : Jl.papandayan NO.50 GARUT JAWA BARAT TELPON.0891234566 </P></marquee>

   

    
    <!--sidenav-->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="#hubungi-kami">Hubungi Kami</a></li>
        <li><a href="#daftar-barang">Daftar Barang</a></li>
    </ul>

    


    <!--slider-->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/img/motor.JPEG">
                <div class="caption center-align">
                    <h3>Selamat Datang Di web Bengkel Otomotif </h3>
                    <h5 class="light grey-text text-lighten-3">Otomotif Racing Team jaya</h5>
                </div>
            </li>
            <li>
                <img src="assets/img/motor2.JPEG">
                <div class="caption -align">
                    <h3>Otomotif Racing Team jaya</h3>
                    <h5>Terima Service Dan Menyediakan Part Racing</h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- Daftar Barang -->
    <section id="daftar-barang" class="daftar-barang scrollspy">
        <div class="container center">
            <div class="row">
            
            
                <div class="col m12 s12">
                <h3 class="light black-text text-darken-3 center">Daftar Barang</h3>
                <div class="container center">
    
               
                <?php foreach ($otomotif as $otf) : ?>
                <button>
                <p class="nama ">
                <a href="php/detail.php?id=<?= $otf['id'] ?>">
                <?= $otf["nama"] ?> </a>
                </button>
                </p>
                
                <?php endforeach; ?>

            </div>
            </div>
        </div>
        </div>
    </section>


 


    <!-- Hubungi Kami -->
    <section id="hubungi-kami" class="hubungi-kami grey lighten-3 scrollspy">
        <div class="container">
        <div class="row">
            <h3 class="light black-text text-darken-3 center">Hubungi Kami</h3>
                <div class="col m5 s12">
                    <div class="card-panel purple darken-2 center white-text">
                    <i class="material-icons">email</i>
                        <h5>Hubungi Kami</h5>
                        <p>rafliansyah20001@gmail.com</p>
                    </div>

                    <ul class="collection with-header">
                        <li><h4 class="light purple-text text-darken-3 center"><p>Facebook</p></h4></li>
                        <li class="light Black-text text-darken-3 center"><p>@OtomotifRacingTeam</p></li>
                    </ul>
                    
                    <ul class="collection with-header">
                        <li><h4 class="light purple-text text-darken-3 center"><p>Instagram</p></h4></li>
                        <li class="light Black-text text-darken-3 center"><p>@OtmtfRacingTeam21</p></li>
                    </ul>
                </div>

                <div class="col m7 s12">
                    <form>
                        <div class="card-panel">
                        <div class="card-panel black darken-2 center white-text">
                            <h5>Masukan keluhan kendaraan anda.</h5>


                            <div class="input-field">
                                <input type="text" name="nama" id="name" required class="validate">
                                <label for="name">Name Pemilik Kendaraan</label>
                            </div>

                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate">
                                <label for="email">Email Pemilik Kendaraan</label>
                            </div>

                            
                            <div class="input-field">
                            <p>Masukan No Telp Pemilik kendaraan</p>
                                <input type="No Telp" name="No Telp" id="No Telp" class="validate">
                                <label for="No Telp"></label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="Jenis/Merk Kendaraan" id="Jenis/Merk Kendaraan">
                                <label for="Jenis/Merk Kendaraan">Jenis/Merk Kendaraan</label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="comment" id="comment">
                                <label for="comment">Keluhan kendaraan anda</label>
                            </div>

                            <button type="submit" class="btn purple darken-2">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- footer -->
    <footer class="purple darken-2 white-text center">
        <p class="flow-text">Rafliansyah Copyright 2021</p>
    </footer>
        



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav =  document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
        });

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });
    </script> 
</body>
</html>