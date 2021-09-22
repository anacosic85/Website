<!DOCTYPE html>
<html lang="en">

<head>
	<title> Processing Subscribe Form</title>
	<link rel="icon" href="logofavicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirm Subscription</title>
</head>
<style type="text/css">
	body {
	font-family: Helvetica, Arial;
}

#top-pattern {
	margin-top: -8px;
	height: 8px;
	background: url("https://sendy.colorlib.com/img/top-pattern2.gif") repeat-x 0 0;
	background-size: auto 8px;
}

#message {
	box-shadow: 0px 16px 46px -22px rgba(0, 0, 0, 0.75);
	width: 80%;
	padding: 30px;
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

#return-button a {
	margin: 0;
	position: absolute;
	top: 45%;
	left: 50%;
	border-radius: 5px;
	transform: translate(-50%, -50%);
	text-decoration: none;
	background-color: grey;
	color: white;
	padding: 15px;
	border-radius: 7px;
	text-align: center;
}

#return-button:hover {
	background-color: #5c78ad;
	color: white;
	text-decoration: none;
	padding: 15px;
	border-radius: 10px;
	text-align: center;
}

p {
	text-align: center;
}

h2 {
	font-weight: normal;
	text-align: center;
	@media only screen and (max-width: 768px) #content {
		padding: 0px;
	}
</style>
</head>

<body>
	<div id="container">
		<div id="content">
		<?php 
		require 'connect.php';
			//get the name and email from the user
			//store them to $author_name and $email variables
			//variables are then inserted into a row in the subscribe table
			//access those data from the $_POST array 
			$author_name=$_POST["author_name"]; 
			$email=$_POST["author_email"];            


			//"INSERT command for inserting a new testimonial into the comment table.
			$sql_insert="INSERT INTO subscribe(author_name, author_email) VALUES ('$author_name', '$email')"; 
			 
			 
			//if-else statement to check if the insert is successful or not and output an appropriate message.
			if(mysqli_query($link, $sql_insert)) 
			{ 
			echo 
			"<div id=top-pattern></div>


			<div id=message>
			<h2>You're subscribed!</h2>
			<p><img src=images/checkmark.jpg height=62></p>
			</div>


			<div id=button-container>
			<div id=return-button>
			<a href='index.php'>Return to Homepage</a>
			</div>
			</div>";
			} 

			else 
			{ 
				echo "An error occurred, try again!"; 
			} 
			      
			mysqli_close($link); 

			?>
		<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"651dda3668d70d5a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.1","si":10}'></script>
</body>

</html>