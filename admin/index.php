<?php
$page_title = "Admin Dashboard"; 
include_once 'views/header.php';

echo "<div class=\"right-button-margin\">";
echo "</div>";

// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// set number of records per page
$records_per_page = 3;

// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;

// include database and object files
include_once 'config/database.php';
include_once 'objects/admin.php';

// Database Abstraction
$db = Database::connection();
 ?>
 <section id="body-section-main">
 	<article id="section-main-article">
 		<header id="main-article-header">
 			
 		</header>
 	</article>
 	<aside id="section-main-aside">
 		<header id="main-aside-header">
 			
 		</header>
 	</aside>
 </section>
 <?php 
include_once 'views/footer.php';
  ?>