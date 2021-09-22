<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Confirm delete vendor</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id ="content">
			<?php require 'connect.php';
 
			$vendorid=$_GET['vendorid']; 
			$sql="SELECT * from vendor where vendorid=$vendorid"; 
			result=mysqli_query($link, $sql); 

			echo "<h3>Confirm Delete Vendor</h3>";
			echo "<p>"; 
			echo "<table>"; 
			echo "<tr> 
					<td><strong>First Name</td> 
					<td><strong>Last Name</td> 
					<td><strong>Town</td> 
					<td><strong>Mobile</td> 
					<td><strong>Email</td> 
				</tr>"; 
	
			$row=mysqli_fetch_array($result); 

			$firstname=$row["firstname"]; 
			$lastname=$row["surname"]; 
			$town=$row["town"]; 
			$mobile=$row["mobile"]; 
			$email=$row["email"]; 

			echo "<tr> 
					<td>$firstname</td> 
					<td>$lastname</td> 
					<td>$town</td> 
					<td>$mobile</td> 
					<td>$email</td> 
				</tr>"; 
			echo "</table>"; 

			echo "<h3>Are you sure you want to delete this vendor? </h3> 
				<a href='deletevendor.php?vendorid=$vendorid'>Delete</a>
				<a href='managevendors.php'>Cancel</a>";
			mysqli_close($link); 
			?>
		</div><!--close content div --> 
	</div><!--close container div --> 
</body>
</html>
