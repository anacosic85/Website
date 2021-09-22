<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Edit Vendor</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	input,
	textarea {
		padding: 8px;
		border-radius: 8px;
	}
	
	#button {
		background-color: #37517e;
		color: white;
		padding: 8px;
	}
	</style>
</head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<?php require 'connect.php';
$vendorid=$_GET["vendorid"]; 
mysqli_select_db($link, "property"); 

$sql="SELECT * FROM vendor WHERE vendorid=$vendorid"; 

$result=mysqli_query($link, $sql); 
$row=mysqli_fetch_array($result); 

$vendorid=$row["vendorid"]; 
$lastname=$row["surname"]; 
$firstname=$row["firstname"]; 
$address=$row["address1"]; 
$town=$row["town"]; 
$county=$row["county"]; 
$mobile=$row["mobile"]; 
$email=$row["email"]; 

mysqli_close($link); 
?>
				<form method="post" action="processeditvendor.php">
					<input type="hidden" name="vendorid" value="<?php echo $vendorid; ?>" />
					<table>
						<tr>
							<td>Last Name:</td>
							<td>
								<input type="text" name="surname" value="<?php echo $lastname; ?>" />
							</td>
						</tr>
						<tr>
							<td>First Name:</td>
							<td>
								<input type="text" name="firstname" value="<?php echo $firstname; ?>" />
							</td>
						</tr>
						<tr>
							<td>Address: </td>
							<td>
								<input type="text" name="address1" value="<?php echo $address; ?>" />
							</td>
						</tr>
						<tr>
							<td>Town: </td>
							<td>
								<input type="text" name="town" value="<?php echo $town; ?>" />
							</td>
						</tr>
						<tr>
							<td>County: </td>
							<td>
								<input type="text" name="county" value="<?php echo $county; ?>" />
							</td>
						</tr>
						<tr>
							<td>Mobile: </td>
							<td>
								<input type="text" name="mobile" value="<?php echo $mobile; ?>" />
							</td>
						</tr>
						<tr>
							<td>Email: </td>
							<td>
								<input type="text" name="email" value="<?php echo $email; ?>" />
							</td>
						</tr>
						<tr>
							<input type="submit" id="button" name="submit" value="Update Vendor" style="margin-bottom:20px;">
							<tr>
					</table>
				</form>
		</div>
		<!--close content div-->
	</div>
	<!--close container div -->
</body>
</html>