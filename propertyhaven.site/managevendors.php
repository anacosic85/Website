<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Manage vendors</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	table td {
		padding: 8px;
	}
	</style>
</head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<h3>Manage Vendors</h3> <a href='addvendor.php'>Add a new vendor</a>
			<br></br>
				<div id="managevendors">
				<?php 
				require 'connect.php';


				//Our SQL query needs to get ALL the product detail from the products table so we run that query against our database:
				$sql="SELECT * from vendor"; 
				$result=mysqli_query($link, $sql);


				//check if there are any records in the table or not
				if(mysqli_num_rows($result)>0) 
				{

				echo "<table>";   //this creates html table for the results of the query and uses while loop to write out each record into a new row in the table
				echo "<tr> 
					   <td><strong>Vendor ID</td> 
					   <td><strong>First Name</td> 
					   <td><strong>Last Name</td> 
					   <td><strong>Town</td> 
					   <td><strong>Mobile</td> 
					   <td><strong>Email</td>
					   <td><strong>Edit</td>
					   <td><strong>Delete</td>
					</tr>"; 
					
				//while loop to write out each record into a new row in the table
				while($row=mysqli_fetch_array($result)) 
				{ 
					$vendorid=$row["vendorid"]; 
					$firstname=$row["firstname"]; 
					$lastname=$row["surname"]; 
					$town=$row["town"]; 
					$mobile=$row["mobile"]; 
					$email=$row["email"]; 
					
					
				echo "<tr> 
						<td>$vendorid</td> 
						<td>$firstname</td> 
						<td>$lastname</td> 
						<td>$town</td> 
						<td>$mobile</td> 
						<td>$email</td> 
						<td><a href='editvendor.php?vendorid=$vendorid'>Edit</a></td> 
						<td><a href='confirmdeletevendor.php?vendorid=$vendorid'>Delete</a></td> 
						</tr>";
				} 
				echo "</table>"; 

				}//close if


				else
				{
				echo "There are currently no products in the database";
				}//close else

				mysqli_close($link); 
				?>
				</div>
				<!--close manageproducts div -->
				<div id="backbutton" style="margin-top:30px; margin-bottom:30px;"> <a href='admin.php'>Back to admin area</a> </div>
			</div>
			<!--close content div -->
	</div>
	<!--close container div -->
</body>

</html>