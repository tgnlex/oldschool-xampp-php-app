<!DOCTYPE html>
<?php 
 session_start();
 if (!isset($_SESSION['loggedin'])) {
	header('Location: home.php');
	exit;
} 
$DB_HOST = 'localhost';
$DB_USER = "admin";
$DB_PASS = "";
$DB_NAME = "myappdb";
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) 
?>
<html lang="en">
<head>
<?php include '../partials/global/head.php' ?>
<link type="text/css" rel="stylesheet" href="../src/style/dashboard.css" />
</head>
<body>
<?php include '../partials/global/navbar.php' ?>	
  <div id="page-heading">
  	<h3>User Dashboard</h3>
  </div>
	<div id="main" class="container">
	<div id="col-1" class="col">
		<div id="profile-card" class="card">
			Profile Card
		</div>
	</div>
	<div id="col-2" class="col">
		User Content Area
	</div>
	<div id="col-3" class="col">
		Friends List 
	</div>
</div>
<?php include '../partials/global/imports.php' ?>
</body>
</html>