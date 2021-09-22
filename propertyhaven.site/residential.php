<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Residential Properties</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> 
	<style>
	/* Create a 4-equal-column layout */

	.each {
		display: inline-block;
		width: 23%;
	}

	.content-res {
		font-size: 12px;
		color: #778899;
		text-align: justify;
		..text-align-last: center;
		text-align: center;
	}

	#displayresidential {
		line-padding: 0px;
		font-size: 12px;
		color: #778899;
		padding-top: 20px;
	}

	table {
		margin-bottom: 35px;
		padding: 5px;
	}

	td {
		text-align: left;
		padding: 0px;
	}

	th {
		text-align: center;
		padding: 7px;
		font-family: Karla, sans-serif;
	}

	#displayresidential h2 {
		margin-top: 0px;
		margin-left: 35px;
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

	@media only screen and (max-width: 920px) {
		.each {
			width: 45%;
		}
	}

	@media only screen and (max-width: 650px) {
		.each {
			display: flex;
			width: 100%;
			justify-content: center;
			..align-items: center;
		}
	}
	</style>
</head>
<body>
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
	<div class="content-res">
		<div id="displayresidential">
			<?php 
			require 'connect.php'; //to connect to database

			$categoryid= $_GET["categoryid"];  
			//retrieves the URL parameter that is passed in the link from the global array $_GET 
			//and assigns it to a variable named $categoryid. 
			//variable will identify which category has been chosen


			$sql="SELECT * from property, category WHERE property.categoryid=$categoryid AND category.categoryid=$categoryid"; 
			$output=mysqli_query($link, $sql);


			//function fetches a result row as an associative array. 
			if(mysqli_num_rows($output)>0)
			{
			$getcategory=mysqli_fetch_array($output); 
			echo "<h2>"; 
			echo $getcategory["categoryname"]; 
			echo "</h2>";
			}


			//while loop to output the results in the table if there are any, or output a message if there are no rows in the array
			$result=mysqli_query($link, $sql); 
			//if records exist output them in a table
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
				<tr >
					<th>&euro;$price</th>
					<th >$county</th>
					<th><a href='moredetails.php?propertyid=$propertyid'>Details</a></th>
				</tr>";
			echo "</table>";
			}
			}
			
			//if no records in the table output this message to the user
			else  
			{
			echo "There are currently no property in this category";
			}//close else

			mysqli_close($link); 
			?> 
		</div>
	</div>
		<div>
			<?php include("footer.php");?>
		</div>
</body>
</html>