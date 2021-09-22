<!--Page to display contact forms-->
<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	h2,
	p {
		color: #535154;
	}
	
	#wrapper1 {
		background-color: #C2C8DC;
		min-height: 340px;
	}
	
	.service1 {
		float: left;
		width: 48%;
		margin: 1%;
		padding-top: 40px;
	}
	
	#contact-form form {
		width: 300px;
		diplay: block;
		margin-left: auto;
		margin-right: auto;
	}
	
	#wrapper1::after {
		content: "";
		display: table;
		clear: both;
	}
	
	.service1 p,
	h2 {
		text-align: center;
		font-size: 18px;
		padding: 0 8px;
	}
	
	.service1 p {
		font-size: 20px;
		margin-left: 20%;
		margin-right: 20%;
		line-height: 2em;
	}
	
	input {
		width: 220px;
		border-radius: 4px;
	}
	
	#mysubmit {
		padding: 5px;
	}
	
	form {
		margin-bottom: 20px;
	}
	
	@media (max-width: 768px) {
		.service1 {
			width: 100%;
			height: auto;
			padding: 0px;
			margin: 0px;
		}
		.service1 h2 {
			padding: 15px;
		}
		#contact-form form {
			width: 40%;
			diplay: block;
			margin-left: auto;
			margin-right: auto;
		}
	}
	
	@media (max-width: 348px) {
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
	<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
			<div id="wrapper1">
				<div class="service1">
					<h2>Simplified Real Estate Experience!</h2>
					<p>Contact us for customized information, and to be matched with the appropriate specialist for your specific real estate needs..</p>
				</div>
				<div class="service1" id="contact-form">
					<!--creating form for user to enter feedback -->
					<form method="post" action="process_contact_form.php">
						<label>Title</label>
						<input type="text" name="title" required="required">
						<br>
						<!--HTML validation code to include the "required" attribute in all four fields in the form-->
						<label>Content</label>
						<textarea name="content" rows="10" cols="27" required="required"></textarea>
						<br>
						<label>Name</label>
						<input type="text" name="author_name" required="required">
						<br>
						<!--HTML validation code - to make sure all fields are filled with data and not left blank!-->
						<label>Email</label>
						<input type="email" name="author_email" required="required">
						<br>
						<label style="visibility: hidden;">Send</label>
						<input type="submit" id="mysubmit" name="submit" value="Send Message" style=""> </form>
				</div>
			</div>
			<div>
				<?php include("footer.php");?>
			</div>
</body>
</html>