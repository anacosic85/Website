<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Processing Search Form</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
	<div="content">
	<?php
	require 'connect.php';
	//connect to property database

	 //Get the values that user inserted in search form - using $_POST array and store those values to $variables
	$town=$_POST["town"];
	$price=$_POST["price"];   
	$bedrooms=$_POST["bedrooms"];   

	$result=mysqli_query($link,"SELECT * FROM property WHERE town='$town' AND price<='$price' AND bedrooms>='$bedrooms'");


	if(mysqli_num_rows($result)>0) 
	{ 
	echo "<table>"; 
	echo "<tr> 
			<td><strong>Image</td> 
			<td><strong>Town</td> 
			<td><strong>County</td> 
			<td><strong>Price</td> 
			<td><strong>Bedrooms</td> 
			<td><strong>Description</td>
			
		</tr>"; 
		
	while($row=mysqli_fetch_array($result)) 
	{ 
		$image=$row["image"]; 
		$town=$row["town"]; 
		$county=$row["county"]; 
		$price=$row["price"]; 
		$bedrooms=$row["bedrooms"]; 
		$short_description=$row["shortdescription"];
		
		
		
	echo "<tr> 
			<td><img src='$image' width=100 height=100></td>
			<td>$town</td> 
			<td>$county</td>
			<td>&euro; $price</td> 
			<td>$bedrooms</td> 
			<td>$short_description</td>
			 
		</tr>"; 
	} 

	echo "</table>"; 

	} 

	else 
	{ 
		echo "<h3> There are currently no properties within that criteria</h3>"; 
	} 

	mysqli_close($link); 


	?>

	</div>

	<?php include("includes/footer.html");?>
</div>

</body>
</html>


