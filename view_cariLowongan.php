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
	<title>Cari Lowongan</title>
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
				<li class="nav-item active">
					<a class="nav-link" href="view_cariLowongan.php">Cari Lowongan</a>
				</li>
				<li class="nav-item">
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

	<div class="badan">
		<aside class="kiri">
			<!-- <p>Icon pensil: <span class="glyphicon glyphicon-pencil"></span></p> -->
			<p style="text-align: center;">Filter</p>
			<form action="">
				<label>Tanggal dipost</label> 
				<br>
				<label><input type="radio" name="tglpost" value="semua" /> Semua Periode</label> 
				<br>
				<label><input type="radio" name="tglpost" value="tigahari" /> 3 Hari Terakhir</label> 
				<br>
				<label><input type="radio" name="tglpost" value="satuhari" /> Selama 24 Jam Terakhir</label> 
				<br> 
				<br>

				<label>Gaji</label> 
				<br>
				<label><input type="radio" name="gaji" value="semua" />Semua gaji</label> 
				<br>
				<label><input type="radio" name="gaji" value="satu" />Mulai dari 1.6 Juta</label> 
				<br>
				<label><input type="radio" name="gaji" value="dua" />Mulai dari 3.2 Juta</label> 
				
        
				<!-- <select name="Tanggal dipost">
	                <option value="semua">Semua Periode</option>
	                <option value="tigahari">3 Hari Terakhir</option>
	                <option value="satuhari">Selama 24 Jam Terakhir</option>
            	</select>
            	<select name="Gaji">
	                <option value="semua">Semua gaji</option>
	                <option value="satu">Mulai dari 1.6 Juta</option>
	                <option value="dua">Mulai dari 3.2 Juta</option>
            	</select> -->
			</form>


	
		</aside>

		<section class="kanan">
			<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Nama Perusahaan" aria-label="nama">
					<input class="form-control mr-sm-2" type="search" placeholder="Lokasi" aria-label="lokasi">
					<button class="btn my-2 my-sm-0" type="submit" style="border: 2px solid black;">Cari</button>
				</form>
			<p>Hasil Pencarian :</p>
			<article class="artikel">

				<h2>Technical Advisor - Developmental Evaluation for USAID Jalin</h2>
				<p>
				Apa itu Web Standard? Web Standard adalah teknologi yang dibangun oleh W3C dan lainnya yang dikembangkan untuk menginterpretasikan konten web agar memiliki standar yang dapat dinikmati oleh semua kalangan dan dapat diakses di semua <em>device</em> (smartphone, tablet, desktop dan lain sebagainya).
				</p>
				
			</article>

			<article class="artikel">

				<h2>Claim Analyst - Medical</h2>
				<p>
				Apa itu Web Standard? Web Standard adalah teknologi yang dibangun oleh W3C dan lainnya yang dikembangkan untuk menginterpretasikan konten web agar memiliki standar yang dapat dinikmati oleh semua kalangan dan dapat diakses di semua <em>device</em> (smartphone, tablet, desktop dan lain sebagainya).
				</p>
				
			</article>
		

		</section>
	</div>
	

	
	<footer style="height: 200px;">
		<div class="footer_line"></div>
		<p>NEED.ID 2021</p>
		<!-- <div style="display: inline-block; margin-bottom: 10px;">
			<a href="https://api.whatsapp.com/send?phone=6282234078626&text=Hai" target="_blank"><img src="image/whatsapp.png"
			width="20px" alt=""> Whatsapp</a>
			<a href="https://id-id.facebook.com/pages/category/Shopping---Retail/Unni-Korean-Food-Bondowoso-167677286755311/"
			target="_blank"><img src="image/facebook.png" width="20px" alt=""> Facebook</a>
			<a href="https://food.grab.com/id/id/restaurant/unni-korean-food-bondowoso-delivery/6-CY4UCT5VC2UDN2"
			target="_blank"><img src="image/grab.png" width="40px" alt=""> Grab</a>
			<a href="https://www.instagram.com/unnikoreanfood/?hl=id" target="_blank"><img src="image/instagram.png"
			width="20px" alt=""> Instagram</a>
		</div>
		<p style="margin-bottom: 3px;">2016 - 2020 UNNI KOREAN FOODS</p>
		<pre style="margin-bottom: 3px;">Gang Melati 2 Jalan Khairil Anwar 
Badean, Kec Bondowoso
Bondowoso - Jawa Timur</pre> -->

	</footer>

		
		

</body>
</html>
