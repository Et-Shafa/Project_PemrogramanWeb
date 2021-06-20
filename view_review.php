<?php 
    if(isset($_GET['log'])){
            require 'view_login.php';
        }

    if(isset($_GET['reg'])){
            require 'view_registrasi.php';
        }

    


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
 	<title>Review</title>
 </head>
 <body>
    <header>
        

    </header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E8713C;">

        <a class="navbar-brand" href="#" style="font-family: cursive; font-weight: 20pt; font-size: 20pt;"><strong>NEED.ID</strong></a>
     
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="view_cariLowongan.php">Cari Lowongan</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view_review.php">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_tips.php">Tips</a>
                </li>
            </ul>

        </div>
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Bahasa Indonesia</a>
                </li>
                <li class="nav-item">
                    <form action="" method="GET">
                        <input class='nav-link masuk' type="submit" name="log" value="Masuk">
                        <!-- <a href="" name="log" class="nav-link">Masuk</a> -->
                    </form>
                    <!-- <a class="nav-link" href="#">Masuk</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Daftar</a> -->
                    <form action="" method="GET">
                        <input class='nav-link masuk' type="submit" name="reg" value="Daftar">
                        <!-- <a href="" name="log" class="nav-link">Masuk</a> -->
                    </form>
                </li>
            </ul>

        </div>
    </nav>


    <div class="badan" style="text-align: center;">
        <p style="font-family: serif;"><strong><h3>Telusuri</h3></strong></p>
        <P>Temukan review dan peringkat perusahaan terbaik saat ini</P>

        <form class="form-inline my-2 my-lg-0" style="  justify-content: center;">
            <input class="form-control mr-sm-2" type="search" name="carireview" style="border: 3px solid #E8713C; width: 40%;">
            <button class="btn my-2 my-sm-0" type="submit" style="background-color: #E8713C;">Cari</button>
        </form>

        <article class="artikel">
            03 Besar Review dan peringkat perusahaan terbaik
            <br>
            <img width=25% src='gambar/gojek.png' >
            <img width=25% src='gambar/indomaret.jpg' style="margin-left: 15px;">
            <img width=25% src='gambar/alfa.jpg' style="margin-left: 15px;">
            
        </article>
    </div>

        

 	
 </body>
 </html>