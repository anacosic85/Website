<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>All properties</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	/* Create a 4-equal-column layout */
	
	.each {
		display: inline-block;
		width: 23%;
	}
	
	.content {
		font-size: 12px;
		color: #778899;
		text-align: justify;
		..text-align-last: center;
		text-align: center;
	}
	
	table {
		margin-bottom: 35px;
		padding: 5px;
	}
	
	th {
		text-align: center;
		padding: 7px;
		font-family: Karla, sans-serif;
	}
	
	.content h2 {
		margin-left: 10px;
		padding: 10px;
	}
	
	.each a {
		background-color: #37517e;
		color: white;
		text-decoration: none;
		padding: 5px;
		border-radius: 7px;
	}
	
	@media only screen and (max-width: 1250px) {
		.each {
			width: 30%;
		}
	}
	
	@media only screen and (max-width: 928px) {
		.each {
			display: inline-flex;
			width: 48%;
			justify-content: center;
		}
	}
	
	@media only screen and (max-width: 600px) {
		.each {
			display: flex;
			width: 100%;
			margin: 0 auto;
		}
	}
	</style>
</head>

<body>
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>


<div class="content">
	<h2> All Properties</h2>
	<?php 
	require 'connect.php'; //to connect to database
	//query database to get ALL properties from the property table
	$sql="SELECT * from property";
	$result=mysqli_query($link, $sql);

	if(mysqli_num_rows($result)>0)
	{

	while($row=mysqli_fetch_array($result)) 
	{
	$propertyid=$row["propertyid"];
	$image=$row["image"];
	$county=$row["county"];
	$price=$row["price"];
	echo "<table class=each>";
	echo "<tr >
	<th colspan=3; ><img src='$image' width=260 px height=150px> </th>
	</tr>
	<t >
	<th>&euro;$price</th>
	<th >$county</th>
	<th><a href='moredetails.php?propertyid=$propertyid'>Details</a></th>
	</t>";
	echo "</table>";
	}
	}
	//<tr> tag defines "table row" - row of cells in a table
	//<td> tag defines "table data" -  cell element


	//if no records in the table output this message to the user
	else  
	{
	echo "There are currently no products in the database";
	}//close else

	mysqli_close($link); 
	?>
	</div>

	<div>
	<?php include("footer.php");?>
	</div>

</body>
</html>
