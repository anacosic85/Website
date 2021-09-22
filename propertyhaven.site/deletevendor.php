<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Delete vendor</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<div id="container">
		<?php 
		require 'connect.php';
		 
		$vendorid= $_GET["vendorid"];
		$sql= "DELETE FROM vendor WHERE vendorid=$vendorid"; 


		$retval = mysqli_query( $link, $sql); 
		if(! $retval ) 
		{ 
		die('Could not delete data: ' . mysql_error()); 
		} 
		else 
		{ 
		header("Location: http://localhost/property/managevendors.php"); 
		exit; 
		} 
		mysqli_close($link); 
		?>
	</div>
</body>
</html>