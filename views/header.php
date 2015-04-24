<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<style>
	.left-margin {
		margin: 0.5em 0 0;
	}
	.right-button-margin {
		margin: 0 0 1em 0;
		overflow: hidden;
	}
	</style>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Bootstrap Javascript Plugin -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<?php 
		// show page header
		echo "<div class=\"page-header\">";
			echo "<h1>{$page_title}</h1>";
		echo "</div>";	
		 ?>