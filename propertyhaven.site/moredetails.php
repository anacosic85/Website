<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Property Details</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	.flex-container {
		display: flex;
	}
	
	.child {
		flex-basis: 50%;
		padding: 15px;
	}
	
	button a {
		text-decoration: none;
		color: white;
	}
	
	th {
		text-align: left;
		line-height: 1.5;
		padding: 8px;
		font-family: Karla, sans-serif;
		font-size: 1.em;
		font-weight: 10;
	}
	
	.responsive {
		width: 100%;
		height: auto;
	}
	/* Responsive layout - making a one column layout instead of a two-column layout */
	
	@media (max-width: 1000px) {
		.flex-container {
			flex-direction: column;
		}
		.responsive {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 99%;
		}
	}
	</style>
</head>
<body>
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
	<div class="flex-container">
	<div class="child">
	    
	<?php require 'connect.php';

	$propertyid= $_GET["propertyid"]; 

	//select all the fields from the products table for the record with productid:
	$sql= "SELECT * FROM property WHERE propertyid=$propertyid"; 

	$result=mysqli_query($link, $sql); 

	//assign the contents of the array to the $row handle - so that we can access each of the elements in the array
	$row=mysqli_fetch_array($result); 
	$address=$row["address"]; 
	$price=$row["price"]; 
	$shortdescription=$row["shortdescription"]; 
	$longdescription=$row["longdescription"]; 
	$image=$row["image"]; 
	$county=$row["county"];

	//outputs each of the fields to the page
	echo "<table >";
	echo "<tr >
	<th scope=col ><img src='$image' class=responsive id=img></th>
	</tr>";
	echo "</table>";
	?>
	</div>

	<div class="child" >
	<?php
	echo "<table>";
	echo "
		<tr>
		<th>&euro;$price</th>
		</tr>
		<tr>
		<th >$shortdescription</th>
		</tr>
		<tr>
		<th> Address: $address, County: $county</th>
		</tr>
		<tr>
		<th>Property Summary</th>
		</tr>
		<tr>
		<th>$longdescription </th>
		</tr>";
	echo "<tr>";
	echo "<td>";
	echo "<button style='background-color: #37517e; padding:6px; width:150px; text-decoration: none;'><a href='contact.php' >Contact us for more details</a></button>";
	echo "</td>";
	echo "</tr>";
	echo "<td>";
	echo "<button  onclick=goBack() style='background-color: #37517e; color: white;padding:6px; width:150px;'>Back to property listing </button>";
	echo "</td>";
	echo "</table>";

	mysqli_close($link);
	?>

	</div>
	</div>

<script> 
function goBack() { 
	window.history.back(); 
} 
</script>

	<?php include("footer2.php");?>

</body>
</html>
