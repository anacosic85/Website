<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Property</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	input,
	textarea {
		padding: 8px;
		border-radius: 5px;
	}
	
	#addme {
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
					<h3>Add a Property</h3>
					<p>
						<div id="addproperty">
							<!-- when user clicks "add product" on addproduct  page - the processadd.php page is invoked-->
							<form method="post" action="processadd.php">
								<table>
									<tr>
										<td>Price: </td>
										<td>
											<input type="number" name="price" required="required">
											</textarea>
										</td>
									</tr>
									<tr>
										<td>Address: </td>
										<td>
											<input type="text" name="address" size="50" required="required">
											</textarea>
										</td>
									</tr>
									<tr>
										<td>County: </td>
										<td>
											<input type="text" name="county" size="50" required="required">
											</textarea>
										</td>
									</tr>
									<tr>
										<td>Town: </td>
										<td>
											<input type="text" name="town" size="50" required="required">
											</textarea>
										</td>
									</tr>
									<tr>
										<td>Short Description: </td>
										<td>
											<textarea name="shortdescription" rows="2" cols="47" required="required" /></textarea>
										</td>
									</tr>
									<tr>
										<td>Long Description: </td>
										<td>
											<textarea name="longdescription" rows="14" cols="47" required="required" /></textarea>
										</td>
									</tr>
									<tr>
										<td>Vendor ID: </td>
										<td>
											<input type="number" name="vendorid" required="required" />
										</td>
									</tr>
									<tr>
										<td>Category ID: </td>
										<td>
											<input type="number" name="categoryid" required="required" />
										</td>
									</tr>
									<tr>
										<td>Image Path: </td>
										<td>
											<input type="text" name="image" required="required" />
										</td>
									</tr>
								</table>
								<input type="submit" id="addme" name="submit" value="Add Property" /> </form>
						</div>
				</div>
	</div>
</body>

</html>