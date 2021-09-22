
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Manage Properties</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	table td {
		padding: 7px;
	}
	
	table tr:nth-child(1) {
		background-color: #CDCFE0;
	}
	
	h3 {
		color: #474849;
	}
	</style>
</head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<h3>Manage Properties</h3> <a href="addproperty.php">Add a new property</a> <a href='admin.php' style="float:right;">Back to admin area</a>
			<br></br>
				<div id="manageproducts">
					<?php 
					require 'connect.php';

					//Oget ALL the product detail from the products table
					$sql="SELECT * from property"; 
					$result=mysqli_query($link, $sql);


					//check if there are any records in the table 
					if(mysqli_num_rows($result)>0) 
					{
					//creating html table for the results of the query + while loop to write out each record into a new row
					echo "<table>";   
					echo "<tr> 
						   <td width=90><strong>Image</td> 
						   <td width=90><strong>Price</td> 
						   <td ><strong>Address</td> 
						   <td ><strong>Short Description</td> 
						   <td><strong>Edit</td> 
						   <td><strong>Delete</td>
						</tr>"; 
						
					while($row=mysqli_fetch_array($result)) 
					{ 
						$propertyid=$row["propertyid"]; 
						$image=$row["image"]; 
						$propertydesc=$row["shortdescription"]; 
						$price=$row["price"]; 
						$address=$row["address"];
						
						
					echo "<tr> 
							<td><img src='$image' width=160 height=110> </td> 
							<td>&euro; $price</td> 
							<td>$address</td>
							<td>$propertydesc</td> 
							<td><a href='editproperty.php?propertyid=$propertyid'>Edit</a></td> 
							<td><a href='confirmdelete.php?propertyid=$propertyid'>Delete</a></td> 
							</tr>";
					} 
					echo "</table>"; 

					}//close if


					else
					{
					echo "There are currently no properties in the database";
					}//close else

					mysqli_close($link); 
				?>
			</div><!--close manageproducts div --> 
		</div><!--close content div --> 
		<?php include("footer2.php");?>
	</div><!--close container div --> 
</body>
</html>
