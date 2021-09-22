<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Form Results</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	* {
		box-sizing: border-box;
	}
	
	#content {
		display: flex;
		justify-content: space-evenly;
		flex-wrap: wrap;
	}
	
	table {
		width: 500px;
		box-sizing: border-box;
		margin-bottom: 25px;
	}
	
	#content {
		line-padding: 0px;
		font-size: 12px;
		color: #778899;
		padding-top: 30px;
	}
	
	td {
		text-align: left;
		padding: 0px;
	}
	
	th {
		text-align: center;
		padding: 8px;
		font-family: Karla, sans-serif;
	}
	
	h2 {
		text-align: center;
		font-size: 25px;
		padding: 30px;
	}
	
	@media (max-width: 1100px) {
		table {
			width: 460px;
		}
		#img {
			width: 100%;
		}
	}
	
	@media (max-width: 960px) {
		table {
			width: 400px;
		}
		#img {
			width: 100%;
		}
	}
	
	@media (max-width: 860px) {
		table {
			width: 500px;
		}
		#img {
			width: 100%;
		}
	}
	
	@media (max-width: 573px) {
		#logo {
			display: none;
		}
		#sitename {
			text-align: center;
			width: 100%;
		}
		table {
			width: 420px;
		}
	}
	
	@media (max-width: 350px) {
		table {
			width: 300px;
		}
	}
	</style>
</head>

<body>
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
	<div id="content">
		<?php require 'connect.php';
		
			if (isset($_POST['submit']))
			{
				$county=$_POST['location'];
				$categoryid=$_POST['category'];
				$pricerange=$_POST['price'];
			}

			if ($pricerange=='1') 
			{
				$low=0;
				$high=199999;
			}
			elseif ($pricerange=='2')
			{
				$low=200000;
				$high=399999;
			}
			elseif ($pricerange=='3')
			{
				$low=400000;
				$high=599999;
			}
			elseif ($pricerange=='4')
			{
				$low=600000;
				$high=20000000000;
			}
				
			$sql="SELECT * from property WHERE property.county='$county' AND property.categoryid='$categoryid' AND property.price>='$low' AND property.price<= '$high'";
			$result=mysqli_query($link, $sql);

			if(mysqli_num_rows($result)>0)
			{

			while($row=mysqli_fetch_array($result)) {
			$propertyid=$row["propertyid"];
			$image=$row["image"];
			$address=$row["address"];
			$shortdesc=$row["shortdescription"];

			$price=$row["price"];

			echo "<table>";
			echo "<tr >
			<th colspan=4;><img src='$image' alt=property width=500px height=250px id=img> </th>
			</tr>
			<tr >
			<th>&euro;$price</th>
			<th >$address</th>
			<th >$shortdesc</th>
			<th><a href='moredetails.php?propertyid=$propertyid'>Details</a></th>
			</tr>";

			}
			echo "</table>";
			}
			else
			{
			echo "<h2> There are currently no items in this category</h2>";
			}
			mysqli_close($link);
			?>
		</div>
</body>

</html>