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
	<header id="body-header">
		<nav id="header-nav-top">
			<section id="nav-top-section-left" >
				<h4>Form@Ph</h4>
			</section>
			<section id="nav-top-section-right" >
				<a href="add_admin.php" class="btn btn-danger btn-sm pull-right">logout</a>
				<h4 class="pull-right">dabherd@outlook.com</h4>
			</section>
		</nav>
		<nav id="header-nav-mid">
			<section><a href="#dashboard" id="dashboard"><span class="glyphicon glyphicon-dashboard  white"></span>Dashboard</a></section>
			<section><a href="#clients" id="clients"><span class="glyphicon glyphicon-briefcase  white"></span>Clients</a></section>
			<section><a href="#monitor" id="monitor"><span class="glyphicon glyphicon-stats  white"></span>Monitor</a></section>
			<section><a href="#plans" id="plans"><span class="glyphicon glyphicon-gift  white"></span>Plans</a></section>
		</nav>
		<nav id="header-nav-bottom">
			
		</nav>
	</header>
	<div class="container">
		<?php 
		// show page header
		echo "<div class=\"page-header\">";
		echo "</div>";	
		?>