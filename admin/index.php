<?php
ob_start();
session_start();
// Check if the administrator has logged in
if (isset($_SESSION['admin'])) {
	require 'views/admin_page.php';	
} else {
	require 'views/admin_login.php';
}
?>