
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Edit Properties</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	table {
		border-collapse: separate;
		border-spacing: 0 0.5em;
	}
	
	input,
	textarea {
		padding: 10px;
		border-radius: 8px;
	}
	
	#submitbutton {
		background-color: #37517e;
		color: white;
		padding: 7px;
	}
	</style>
</head>
<body>
	<div id="container">
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
		<div id="content">
			<?php
			require 'connect.php'; //connect to database
			$propertyid = $_GET["propertyid"];
			mysqli_select_db($link, "property");

			$sql = "SELECT * FROM property WHERE propertyid=$propertyid";
			$result = mysqli_query($link, $sql);
			$row = mysqli_fetch_array($result);

			$propertyid = $row["propertyid"];
			$price = $row["price"];
			$address = $row["address"];
			$town = $row["town"];
			$county = $row["county"];
			$shortdesc = $row["shortdescription"];
			$longdesc = $row["longdescription"];
			$vendorid = $row["vendorid"];
			$categoryid = $row["categoryid"];
			$image = $row["image"];
			mysqli_close($link);
			?>

<form method="post" action="processedit.php">
	<input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>" />
	<table>
		<tr>
			<td style="width:90px;">
				<?php echo "<img src='$image' width=160 height=120>" ?></td>
			<td>
				<input type="text" name="image" value="<?php echo $image; ?>" />
			</td>
		</tr>
		<tr>
			<td>Price:</td>
			<td>
				<input type="number" name="price" value="<?php echo $price; ?>" />
			</td>
		</tr>
		<tr>
			<td>Address: </td>
			<td>
				<textarea name="address" rows="1" cols="60">
					<?php echo $address; ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Town: </td>
			<td>
				<textarea name="town" rows="1" cols="60">
					<?php echo $town; ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>County: </td>
			<td>
				<textarea name="county" rows="1" cols="60">
					<?php echo $county; ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Short Description: </td>
			<td>
				<textarea name="shortdescription" rows="1" cols="60">
					<?php echo $shortdesc; ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Further Details: </td>
			<td>
				<textarea name="longdescription" rows="9" cols="60">
					<?php echo $longdesc; ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Vendor ID: </td>
			<td>
				<input type="number" name="vendorid" value="<?php echo $vendorid; ?>" />
			</td>
			<tr>
				<td>Category ID: </td>
				<td>
					<input type="number" name="categoryid" value="<?php echo $categoryid; ?>" />
				</td>
			</tr>
	</table>
	<table>
		<tr>
			<td>
				<input type="submit" name="submit" id="submitbutton" value="Update Property" />
			</td>
		</tr>
	</table>
</form>
</div>
<?php include("footer2.php");?>
</div><!--close container div -->
</body>
</html>