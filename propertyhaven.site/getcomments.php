<!--Page to display all testimonials-comments-->
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Testimonials</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	label,
	h2,
	h3,
	p {
		text-align: justify;
		color: #535154;
	}
	
	th,
	td {
		color: #535154;
		text-align: left;
		padding: 5px 5px;
		border-radius: 4px;
	}
	
	.testimonials {
		padding: 20px;
		background-color: #C7C8DC;
	}
	
	.wrapper {
		background-color: #C2C8DC;
	}
	
	.contact {
		float: left;
		width: 45%;
		margin: 1%;
		padding: 1%;
	}
	
	.wrapper::after {
		content: "";
		display: table;
		clear: both;
	}
	
	.contact p {
		text-align: justify;
		text-align-last: center;
		font-size: 20px;
		width: 75%;
		line-height: 1.3em;
		margin-left: auto;
		margin-right: auto;
	}
	
	.contact h2 {
		text-align: center;
		font-size: 22px;
		padding: 10px;
	}
	
	#mysubmit {
		border-radius: 4px;
		padding: 5px;
		background-color: #D9DAE8;
		font-family: 'Oswald';
		font-size: 18px;
		cursor: pointer;
	}
	
	.submit-label {
		color: #C2C8DC;
	}
	
	@media (max-width: 768px) {
		th {
			display: none;
		}
		tr {
			margin-bottom: 10px;
			display: block;
			border-bottom: 2px solid #ddd;
		}
		td {
			display: block;
			text-align: left;
			font-size: 16px;
			border-bottom: 1px dotted #ccc;
		}
		.contact {
			width: 100%;
		}
		.contact p {
			font-size: 18px;
		}
		#contact-form {
			display: block;
			text-align: center;
		}
		form {
			display: inline-block;
			text-align: left;
		}
	}
	</style>
</head>

<body>
	<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
			<div class="testimonials">
				<h3>Testimonials</h3>
				<?php  require 'connect.php'; // connects to MySQL server
					
					mysqli_select_db($link, "property"); 

					$sql="SELECT * from comment WHERE status='planned'"; //extract approved comments only!
					$result=mysqli_query($link, $sql);  // executes query and returs value to $result variable

					//returns the number of rows in a result
					if(mysqli_num_rows($result)>0) 
					{

					//echo outputs table with row and 4 columns (th - table headers): title, content, author and created
					echo "<table>"; 
					echo "<tr>        
							<th >Title</th> 
							<th>Content</th> 
							<th>Author</th> 
							<th>Created</th> 
						</tr>";


					//creates a html table for the results of the above query 
					//While loop to write out EACH database record into a new row in the table
					//With each iteration of the while loop -  the mysqli_fetch_array() will return a single row of our query as an array.
					//Mysqli_fetch_array() function, takes the $result variable and returnes a result row as an array.
					while($row=mysqli_fetch_array($result)) {    
						$title=$row["title"]; 
						$author=$row["author_name"];    	
						$content=$row["content"];   	
						$created=$row["created_at"];
						
					echo "<tr> 
							<td >$title</td>
							<td>$content</td> 
							<td>$author</td> 
							<td >$created</td> 
						 </tr>";
					} //close while 

					echo "</table>";
					}//close if

					else
					{
						echo "There are currently no entries";
					}

					mysqli_close($link); 
					//close previously opened database connection

					?>
			</div>
			<div class="wrapper">
				<div class="contact">
					<h2>Add a Testimonial!</h2>
					<p> Please leave a feedback on Your experience. Comments help us improve our services. </p>
				</div>
				<div class="contact" id="contact-form">
					<!--creating form for user to enter feedback -->
					<form method="post" action="process_contact_form.php">
						<label>Title</label>
						<input type="text" name="title" required="required" style="border-radius: 4px;margin-left:20px;">
						<!--HTML validation code to include the "required" attribute in all four fields in the form-->
						<br>
						<label>Content</label>
						<textarea name="content" rows="6" cols="30" required="required" style="border-radius: 4px;margin-left:20px;"></textarea>
						<br>
						<label>Name</label>
						<input type="text" name="author_name" required="required" style="border-radius: 4px;margin-left:20px;">
						<br>
						<label>Email</label>
						<input type="email" name="author_email" required="required" style="border-radius: 4px;margin-left:20px;">
						<br>
						<label class="submit-label">Submit</label>
						<input type="submit" id="mysubmit" name="submit" value="Send Message" style="margin-left:20px;"> </form>
				</div>
			</div>
			<div>
				<?php include("footer.php");?>
			</div>
</body>

</html>