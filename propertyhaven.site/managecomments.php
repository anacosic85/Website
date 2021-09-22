<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Testimonials</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	
	<style>
	table {
		text-align: center;
		color: #474849;
	}
	
	table {
		padding: 5px;
	}
	
	#managecomments,
	.table {
		background-color: #CDCFE0;
		font-size: 90%;
	}
	
	h3 {
		color: #474849;
	}
	
	#backbutton {
		margin: 30px 0 50px 0;
	}
	</style>
</head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<h3>Manage Testimonials</h3>
			<div id="managecomments">
				<?php  
				require 'connect.php';

				//Querying the MySQL Database from our PHP script to extract all comments
				$sql="SELECT * from comment"; 
				$result=mysqli_query($link, $sql); 

				echo "<table>"; 
				echo "<tr>        
						<td><strong>Title</strong></td>
						<td><strong>Author</strong></td> 
						<td><strong>Content</strong></td> 
						<td><strong>Created</strong></td> 
						<td><strong>Status</strong></td>
						<td><strong>Update</strong></td>
						<td><strong>Delete</strong></td>
					</tr>";


				//Following code creates a html table for the results of the above query 
				//While loop to write out EACH database record into a new row in the table

				while($row=mysqli_fetch_array($result)) 
				{    
					$id=$row["id"];
					$title=$row["title"];   
					$author=$row["author_name"];   	
					$content=$row["content"];                   
					$created=$row["created_at"];
					$status=$row["status"];
					
					
					echo "<tr> 
							<td>$title</td>
							<td>$author</td> 
							<td>$content</td> 
							<td>$created</td> 
							<td>$status</td>
							<td><a href='updatecomment.php?id=$id' onclick=\"return confirm('Are you sure you want to approve this comment?');\">Approve</a></td> 
							<td><a href='deletecomment.php?id=$id ' onclick=\"return confirm('Are you sure you want to delete this comment?');\">Delete</a></td>
						</tr>";
				} //close while loop
				echo "</table>";

				mysqli_close($link); 
				//mysqli_close() function will close the previously opened database connection.

				?>
			</div>
			<!--close content div -->
			<div id="backbutton"> <a href='admin.php'>Back to admin area</a> </div>
		</div>
	</div>
	<!--close container div -->
</body>

</html>