<?php
	require 'dbmanager.php';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css" />

	
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
			<input id="btnLogin" type="submit" name="registrasi" value="Registrasi">
			<input type="submit" name="x" class="x" value="">
		</form>
	</div>

	<?php
		if (isset($_POST['x'])) {
			header('location: view_cariLowongan.php');
			exit;
		}
		if(isset($_POST['registrasi'])){
			readUser();
			if($_POST['username'] in $daftar_username){
				echo "<script>alert('Username sudah dipakai')</script>";
			}else{
				echo inpReg($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['username'], $_POST['passw']);
				header('location: view_cariLowongan.php');
				exit;
			}
			
		}
		// readUser();
		// echo $daftar_username[0];
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
