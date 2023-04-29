<?php
session_start();
if(!empty($_SESSION['pass'])){
    header("location:index.php");
}
if(isset($_POST['submit'])){
    $pass = $_POST['pass'];
    if($pass == "yca1990"){
        session_start();
        $_SESSION['pass'] = $pass;
        header("location:index.php");
    }
    else echo "<script>alert('You have Entered Wrong Password');</script>";
}

?>


<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css" />


	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign body-locked">
			<div class="center-sign">
				<div class="panel card-sign">
					<div class="card-body">
						<form method="post" class="login100-form validate-form p-b-33 p-t-5">
							<div class="current-user text-center">
								<img src="img/logo.png" alt="YCA Logo" class="rounded-circle user-image"  />
								<h2 class="user-name text-dark m-0">Admin Login</h2>
							</div>
							<div class="form-group mb-3">
								<div class="input-group">
									<input name="pass" id="pwd" type="password" class="form-control form-control-lg" placeholder="Password" />
								</div>
							</div>

							<div class="row">
								<div class="col-6">
									
								</div>
								<div class="col-6">
									<button type="submit" name="submit" class="btn btn-primary pull-right">Unlock</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- end: page -->


	</body>
</html>
