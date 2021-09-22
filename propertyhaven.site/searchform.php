<!DOCTYPE html>
<html>

<head>
	<title>Search Property Form</title>
	<link rel="icon" href="logofavicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.form-group {
		border: 0px;
		outline: 0px;
	}
	
	h2 {
		font-family: Arvo Sans-serif;
		font-size: 23px;
		color: #696969;
	}
	
	label {
		color: #696969;
		display: inline-block;
		width: 70px;
	}
	
	#search-form {
		display: inline-block;
	}
	
	.location {
		margin-top: 7px;
		padding: 2px 5px;
		border-radius: 4px;
		box-shadow: 0 2px 2px #000;
		color: #696969;
	}
	
	.category {
		margin-top: 7px;
		padding: 2px 5px;
		border-radius: 4px;
		box-shadow: 0 2px 2px #000;
		color: #696969;
	}
	
	.price {
		margin-top: 7px;
		padding: 2px 5px;
		border-radius: 4px;
		box-shadow: 0 3px 3px #000;
		color: #696969;
	}
	
	.form-group {
		display: flex;
	}
	
	#submit-button {
		width: auto;
		padding: 5px 7px;
		margin-left: 29%;
		background-color: #D6D7E5;
	}
	</style>
</head>
<body>
	<div class="search">
		<h2>Search for properties</h2> </div>
	<!--Search property form -->
	<div class="form">
		<form method="post" action="results.php" id="search-form">
			<fieldset class="form-group">
				<label>Location:</label>
				<select class="location" name="location" required="required">
					<br>
					<!--HTML validation code - to make sure all fields are not left blank!-->
					<option value="">Select County</option>
					<?php
					require "connect.php";
					$sql="select DISTINCT county from property";
					$result=mysqli_query($link, $sql);
					if (mysqli_num_rows($result) >0)
					  {
						while ($row=mysqli_fetch_array($result))
						{
							$county=$row['county'];
							echo "<option value='$county'>$county</option>";
						}
					  }
					mysqli_close($link);
					?>
				</select>
			</fieldset>
			<fieldset class="form-group">
				<label>Category: </label>
				<select class="category" name="category" required="required">
					<br>
					<option value="">Select Category</option>
					<?php
					require "connect.php";
					$sql="select * from category";
					$result=mysqli_query($link, $sql);
					if (mysqli_num_rows($result) >0)
					{
						while ($row=mysqli_fetch_array($result))
						{
							$categoryname=$row['categoryname'];
							$categoryid=$row['categoryid'];
							echo "<option value='$categoryid'>$categoryname</option>";
						}
					}
					mysqli_close($link);
					?>
				</select>
			</fieldset>
			<fieldset class="form-group">
				<label>Price: </label>
				<select class="price" name="price" required="required">
					<br>
					<!--HTML validation code - to make sure all fields are filled with data and not left blank!-->
					<option value="">Select Price Range</option>
					<option value="1">Less than &euro; 200,000</option>
					<option value="2">&euro; 200,000 - &euro; 400,000</option>
					<option value="3">&euro; 400,000 - &euro; 600,000</option>
					<option value="4">Greater than &euro; 600,000 </option>
				</select>
			</fieldset>
			<fieldset class="form-group">
				<input type="submit" id="submit-button" name="submit" value="Search Property"> </fieldset>
		</form>
	</div>
	<!--Closing tag for div class "column"-->
	</div>
	<!--Closing tag for div class "row"-->
</body>

</html>