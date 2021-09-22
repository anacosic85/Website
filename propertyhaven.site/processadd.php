
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Process Add</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
		<?php 
		require 'connect.php'; 

		$price=$_POST["price"]; 
		$address=$_POST["address"]; 
		$county=$_POST["county"]; 
		$town=$_POST["town"]; 
		$description=$_POST["shortdescription"]; 
		$longdesc=$_POST["longdescription"]; 
		$vendorid=$_POST["vendorid"]; 
		$categoryid=$_POST["categoryid"]; 
		$image=$_POST["image"]; 

		$sql_insert="INSERT INTO property(price, address, county, town, shortdescription, longdescription, vendorid, categoryid, image) 
		VALUES ( '$price', '$address', '$county', '$town', '$description', '$longdesc', '$vendorid', '$categoryid', '$image')"; 

		if(mysqli_query($link, $sql_insert)) 
		{ 
			echo "<h3>Property Added!</h3>"; 
			echo "<a href='manageproperty.php'>Return to Manage Property page</a>";
		} 
		else 
		{ 
			echo "An error occured, try again!"; 
		} 

		mysqli_close($link); 
		?>

		</div>
	</div>
</body>
</html>
