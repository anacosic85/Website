<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Vendor</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	input {
		padding: 8px;
		border-radius: 5px;
	}
	
	#add {
		background-color: #37517e;
		color: white;
		padding: 7px;
		margin-bottom: 30px;
	}
	</style>
</head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
			<?php include("includes/nav.html");?>
				<div id="content">
					<h3>Add a Vendor</h3>
					<p>
						<div id="addvendor">
							<form method="post" action="processaddvendor.php">
								<table>
									<tr>
										<td>First Name</td>
										<td>
											<input type="text" name="firstname" size="50" required="required">
										</td>
									</tr>
									<tr>
										<td>Last Name</td>
										<td>
											<input type="text" name="surname" size="50" required="required">
										</td>
									</tr>
									<tr>
										<td>Address</td>
										<td>
											<input type="text" name="address1" size="50" required="required" />
										</td>
									</tr>
									<tr>
										<td>Town</td>
										<td>
											<input type="text" name="town" size="50" required="required" />
										</td>
									</tr>
									<tr>
										<td>County</td>
										<td>
											<input type="text" name="county" size="50" required="required" />
										</td>
									</tr>
									<tr>
										<td>Mobile</td>
										<td>
											<input type="text" name="mobile" size="50" required="required" />
										</td>
									</tr>
									<tr>
										<td>Email</td>
										<td>
											<input type="text" name="email" size="50" required="required" />
										</td>
									</tr>
								</table>
								<input type="submit" id="add" name="submit" value="Add Vendor"> </form>
						</div>
				</div>
	</div>
</body>

</html>