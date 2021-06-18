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
    <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.css">
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
        <p>ARTIKEL</p>
        <P>Temukan review dan peringkat perusahaan terbaik saat ini</P>

        <article class="artikel">
            asndkafkmafn
            
        </article>
    </div>

        <img width=200 height=260 src='gambar/gojek.png'>
        <img width=200 height=260 src='gambar/indomaret.jpg'>
        <img width=200 height=260 src='gambar/alfa.jpg'>

 	
 </body>
 </html>