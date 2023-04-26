<?php
if(isset($_POST['submit'])){
	$pass = $_POST['pass'];
	if($pass == 'SRKRCSD'){
		session_start();
		$_SESSION['pass'] = $pass;
		header('location:index.php');
	}
	else echo "<script>alert('You Entered Wrong Password')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Youth Club</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/logo.png"/>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/14.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form method="post" class="login100-form validate-form p-b-33 p-t-5">

					

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Enter Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" name="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="js/alert1.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

</body>
</html>