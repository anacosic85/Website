<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form Processing</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
	<style>
	#text {
		box-shadow: 0px 16px 46px -22px rgba(0, 0, 0, 0.75);
		width: 60%;
		padding: 20px;
		margin-left: auto;
		margin-right: auto;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		color: #9D9593;
		font-family: 'Courgette';
		font-size: 19px;
		line-height: 30px;
		text-align: center;
	}
	
	#button-container {
		height: 100px;
		position: relative;
	}
	
	#button a {
		margin: 0;
		position: absolute;
		top: 30%;
		left: 50%;
		border-radius: 5px;
		background-color: grey;
		transform: translate(-50%, -50%);
	}
	
	@media (max-width: 448px) {
		#logo {
			display: none;
		}
		#sitename {
			text-align: center;
			width: 100%;
		}
	}
	</style>
</head>

<body>
	<div id="container">
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
		<div id="content">
			<?php require 'connect.php';

			$title=$_POST["title"];                             //Get the title, content, name and email from the form input 
			$content=$_POST["content"];                  
			$author_name=$_POST["author_name"]; 
			$email=$_POST["author_email"];            


			//"INSERT command for inserting a new testimonial into the comment table.
			$sql_insert="INSERT INTO contact(title, content, author_name, author_email) VALUES ('$title', '$content', '$author_name', '$email')"; 


			//if-else statement to check if the insert is successful or not and output an appropriate message.
			if(mysqli_query($link, $sql_insert)) 
			{ 
			echo "
			<div id=text>
			<h3>Thank you for contacting us!
			<br><br>We will get back to you shortly!</h3>
			<p><img src=images/checkmark.jpg height=62></p>
			</div>
			<div id=button-container>
			<div id=button>
			<a href='index.php'>Return to Home page</a>
			</div>
			</div>";
			} 

			else 
			{ 
				echo "An error occurred, try again!"; 
			} 
			      
			mysqli_close($link); 

			?>
</body>

</html>