<!--
Create page that deletes property from the database
-->
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Delete Property</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<div id="container">
		<?php 
		require 'connect.php';
		 
		$propertyid= $_GET["propertyid"];
		$sql= "DELETE FROM property WHERE propertyid=$propertyid"; 


		$retval = mysqli_query( $link, $sql); 
		if(! $retval ) 
		{ 
		die('Could not delete data: ' . mysql_error()); 
		} 
		else 
		{ 
		header("Location: http://localhost/property/manageproperty.php"); 
		exit; 
		} 
		mysqli_close($link); 
		?>
	</div>
</body>
</html>