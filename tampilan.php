<html>
<head>
	<title>NEED.ID</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>



<div class="content">
	<header>
		<h1 class="judul">NEED.ID</h1>
		<h3 class="deskripsi"></h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">Lowongan Pekerjaan</a></li>
			<li><a href="index.php?page=tentang">Review Perusahaan</a></li>
			<li><a href="index.php?page=tutorial">Tips Karier</a></li>
		</ul>
	</div>

	<h3></h3>
 
<form action="lowongan pekerjaan.php" method="get">
	<label>Nama Perusahaan :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>


 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'Lowongan Pekerjaan':
				include "Lowongan Pekerjaan.php";
				break;
			case 'Review Perusahaan':
				include "Review Perusahaan";
				break;
			case 'Tips Karier':
				include "Tips Karier.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "Lowongan Pekerjaan.php";
	}

	
 
	 ?>
 
	</div>
</div>
</body>
</html>