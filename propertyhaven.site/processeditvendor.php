
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Process edit vendor </title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<h3>Process Edit Vendor</h3>
			<div id="processedit">
			<?php 

			require 'connect.php'; 

			$vendorid=$_POST["vendorid"]; 
			$lastname=$_POST["surname"]; 
			$firstname=$_POST["firstname"]; 
			$address=$_POST["address1"]; 
			$town=$_POST["town"]; 
			$county=$_POST["county"]; 
			$mobile=$_POST["mobile"]; 
			$email=$_POST["email"]; 


			$sql= "UPDATE vendor SET 
			vendorid='$vendorid', 
			surname='$lastname', 
			firstname='$firstname', 
			address1='$address', 
			town='$town', 
			county='$county', 
			mobile='$mobile', 
			email='$email'

			WHERE vendorid=$vendorid"; 

			$retval = mysqli_query( $link, $sql); 
			if(! $retval ) 
			{ 
			die('Could not update data: ' . mysql_error()); 
			} 
			else 
			{ 
			header("Location: http://localhost/property/managevendors.php"); 
			exit; 
			} 
			echo "Vendor Updated!"; 
			mysqli_close($link); 
			?>

			</div> 
		</div> 
	</div><!--close container div --> 
</body>
</html>


