<?php
$page_title = "Admin Dashboard"; 
include_once 'views/header.php';

echo "<div class=\"right-button-margin\">";
echo "<a href=\"add_admin.php\" class=\"btn btn-success pull-right\">Add Admin</a>";
echo "</div>";

// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// set number of records per page
$records_per_page = 3;

// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;

// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';

// Database Abstraction
$db = Database::connection();
 ?>
 <?php 
include_once 'views/footer.php';
  ?>