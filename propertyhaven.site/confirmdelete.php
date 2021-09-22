<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Confirm delete</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>

<div id ="content">

<?php
require 'connect.php';

$propertyid = $_GET['propertyid'];
$sql = "SELECT * from property where propertyid=$propertyid";
$result = mysqli_query($link, $sql);

echo "<h3>Confirm Delete Property</h3>";
echo "<p>";
echo "<table>";
echo "<tr> 
		<td width=90><strong>Image</td> 
		<td><strong>Price</td> 
		<td><strong>Address</td>
		<td><strong>Description</td> 
	</tr>";
$row = mysqli_fetch_array($result);
$image = $row["image"];
$description = $row["shortdescription"];
$price = $row["price"];
$address = $row["address"];
echo "<tr> 
		<td><img src='$image' width=160 height=130> </td> 
		<td>&euro; $price</td> 
		<td>$address</td>
		<td>$description</td> 
	</tr>";
echo "</table>";

echo "<h3>Are you sure you want to delete this property?</h3> 
	<a href='deleteproperty.php?propertyid=$propertyid'>Delete</a>
	<a href='manageproperty.php'>Cancel</a>";

mysqli_close($link);
?>
</div><!--close content div --> 
</div><!--close container div --> 
</body>
</html>
