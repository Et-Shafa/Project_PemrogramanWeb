<?php
	// require 'db.php';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../" /> -->

	
</head>

<body>
	<div style="width: 100vw ;height: 100vh; background-color:rgba(0, 0, 0, 0.4); position: absolute;">
		<form action="" method="POST" class="form_login" style="height:320px;">
			<h2>Registrasi</h2>
			<!-- <label>Username : </label> -->
			<input class="in" type="text" name="fistname" placeholder="Firstname">
			<input class="in" type="text" name="lastname" placeholder="Lastname">
			<input class="in" type="email" name="email" placeholder="Email">
			<input class="in" type="text" name="username" placeholder="Username">

			<br>
			<!-- <label>Password : </label> -->
			<input class="in" type="password" name="passw" placeholder="Password">

			<br>
			<input id="btnLogin" type="submit" name="login" value="Registrasi">
			<input type="submit" name="x" class="x" value="">
		</form>
	</div>

	<?php
		if (isset($_POST['x'])) {
			header('location: view_cariLowongan.php');
			exit;
		}
		// session_start();
		// if(isset($_COOKIE['username'])){
		// 	if($_COOKIE['username']==$getUsername){
		// 		$_SESSION['username']=$getUsername;
		// 	}
		// }
		// if(!isset($_SESSION['username'])){
		// 	if(isset($_POST['login'])){
		// 	$getUsername = $_POST["username"];
		// 	$getPass = $_POST["passw"];
		// 	check($getUsername, $getPass);
		// 	$conn->close();
		// 	}
			
		// }else{
		// 	header('location:index.php');
		// 	exit;
			

		// }
	?>

</body>
</html>
