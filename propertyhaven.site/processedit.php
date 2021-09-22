<!--
Page that corresponds to "update" button on the "manage property" page
-->
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Process edit property</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<h3>Process Edit </h3>
			<div id="processedit">
			<?php 

			require 'connect.php'; 

			$propertyid=$_POST['propertyid']; 
			$price=$_POST['price']; 
			$shortdescription=$_POST["shortdescription"]; 
			$longdesc=$_POST["longdescription"]; 
			$vendorid=$_POST["vendorid"]; 
			$categoryid=$_POST["categoryid"]; 
			$image=$_POST["image"]; 


			$sql= "UPDATE property SET 
			price='$price', 
			shortdescription='$shortdescription', 
			longdescription='$longdesc', 
			vendorid='$vendorid', 
			categoryid='$categoryid', 
			image='$image' 
			WHERE propertyid=$propertyid"; 
			$retval = mysqli_query( $link, $sql); 
			if(! $retval ) 
			{ 
			die('Could not update data: ' . mysql_error()); 
			} 
			else 
			{ 
			header("Location: http://localhost/property/manageproperty.php"); 
			exit; 
			} 
			echo "Property Updated!"; 
			mysqli_close($link); 
			?>

			</div> 
		</div> 

		<?php include("footer2.php");?>
	</div><!--close container div --> 
</body>
</html>
