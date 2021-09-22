<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Logout</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<?php 
				session_start(); 
				unset($_SESSION['username']); 
				session_destroy(); 
				header("Location:adminlogin.php"); 
				exit; 
			?>
		</div>
	</div>
</body>

</html>