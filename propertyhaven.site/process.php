<!-- Page to processs add testimonial page.
This file will get the form data  and insert a new comment into the comment table in the giftcompany database 
-->
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Testimonials Form Processing</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
	<style>
	#wrapper {
		-webkit-box-shadow: 0px 16px 46px -22px rgba(0, 0, 0, 0.75);
		-moz-box-shadow: 0px 16px 46px -22px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 16px 46px -22px rgba(0, 0, 0, 0.75);
		width: 470px;
		padding: 10px;
		position: absolute;
		top: 30%;
		left: 30%;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		color: #9D9593;
		font-family: 'Courgette';
		font-size: 19px;
		line-height: 30px;
		text-align: center;
	}
	
	#wrapper1 {
		width: 215px;
		position: absolute;
		top: 85%;
		left: 40%;
	}
	
	#wrapper1 a {
		border-radius: 5px;
		background-color: grey;
		padding: 10px;
	}
	</style>
</head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<?php require 'connect.php';

				$title=$_POST["title"];                             
				$content=$_POST["content"];                  
				$author_name=$_POST["author_name"]; 
				$email=$_POST["author_email"];            


				//"INSERT command for inserting a new testimonial into the comment table.
				$sql_insert="INSERT INTO comment(title, content, author_name, author_email) VALUES ('$title', '$content', '$author_name', '$email')"; 


				if(mysqli_query($link, $sql_insert)) 
				{ 

				echo "<div id=top-pattern></div>
					<div id=wrapper>
						<h3>Thank you for submitting your feedback!
						<br><br>Our administrators moderate all comments, and it will be attended to shortly!</h3>
						<p><img src=images/checkmark.jpg height=62></p>
					</div>
					<div id=wrapper1>
						<a href='getcomments.php'>Return to Testimonials page</a>
					</div>";
				} 

				else 
				{ 
					echo "An error occurred, try again!"; 
				} 
				      
				mysqli_close($link); 

			?>
	</div><!--close content div --> 
						
</body>

</html>