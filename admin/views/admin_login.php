<?php 
$page_title = "Admin Login";
$input_user = "Input username";
$input_pass = "Input password";

include_once "config/database.php";
$db = Database::connection();

// if the form was submitted
if ($_POST) {
	//instantiating admin object
	include_once "objects/admin.php";
	$admin = new Admin($db);

	// set admin property values
	$admin->username = $_POST['username'];
	$admin->password = $_POST['password'];

	if ($admin->loginAdmin()) {
		echo 'result found';
	} else {
		echo 'no result found';
	}


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Custom Css -->
	<link rel="stylesheet" href="css/custom.css">
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Bootstrap Javascript Plugin -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<section id="body-section-center" class="container">
		<section id="section-center-form">
			<header id="header-center-form">
				<h1>@FormPh</h1>
			</header>
			<div id="div-center-form">
				<form method="POST">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" title="<?php echo $input_user; ?>">
					<label for="password">Password</label>
					<input type="password" name="password" for="password" title="<?php echo $input_pass; ?>">
					<div>
						<input type="checkbox" name="remember" id="remember"><label for="remember">Remember me</label>
						<input type="submit" class="btn btn-primary pull-right" name="submit" value="login">
					</div>
				</form>
			</div>
			<footer id="footer-center-form">
				<a href="#">Lost your password?</a>
			</footer>
		</section>
	</section>
</body>
</html>