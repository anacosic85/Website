
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Process Add Vendor</title>
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

		$lastname = $_POST["surname"];
		$firstname = $_POST["firstname"];
		$address = $_POST["address1"];
		$town = $_POST["town"];
		$county = $_POST["county"];
		$mobile = $_POST["mobile"];
		$email = $_POST["email"];

		$sql_insert = "INSERT INTO vendor(surname, firstname, address1, town, county, mobile, email) 
		VALUES ( '$lastname', '$firstname', '$address', '$town', '$county', '$mobile', '$email')";

		if (mysqli_query($link, $sql_insert))
		{
		    echo "<h3>Vendor Added!</h3>";
		    echo "<a href='managevendors.php'>Return to Manage Vendors page</a>";
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
