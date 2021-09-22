<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Login Action Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="logofavicon.jpg"> </head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<?php 
				//Start the Session 
				session_start(); 
				require 'connect.php'; 

				// If the form is submitted 
				if (isset($_POST['admin_name']) and isset($_POST['password'])){ 


				//Assigning posted values to variables. 
				$username = $_POST['admin_name']; 
				$password = $_POST['password']; 


				//Checking the values are existing in the database or not 
				$query = "SELECT * FROM administrator WHERE admin_name='$username' and password='$password'"; 

				$result = mysqli_query($link, $query) or die(mysqli_error($connection)); 

				$count = mysqli_num_rows($result); 


				//If the posted values are equal to the database values, then session will be created for the user. 
				if ($count == 1)
				{ 
				  $_SESSION['username'] = $username; 
				  header("Location:admin.php"); 
				  exit; 
				} 

				else       //If the login credentials doesn't match, show an error message and return to the login page to retry. 
				{
				  $_SESSION['errors'] = array('Your username or password was incorrect'); 
				  header("Location:adminlogin.php"); 
				} 

				} //close first if
			?>
		</div>
			<?php include("includes/footer.html");?>
		</div>
</body>

</html>
