<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Property Management</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
		* {
		box-sizing: border-box;
	}
	
	label, h2, p {
		color: #535154;
	}
	
	#wrapper1 {
		background-color: #C2C8DC;
	}
	
	.service1 {
		float: left;
		width: 45%;
		margin: 1%;
		padding: 1%;
	}
	
	#wrapper1::after {
		content: "";
		display: table;
		clear: both;
	}
	
	.service1 p {
		text-align: justify;
		text-align-last: center;
		font-size: 20px;
		width: 75%;
		line-height: 1.3em;
		margin-left: auto;
		margin-right: auto;
	}
	
	.service1 h2 {
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
	
	#wrapper2 {
		display: flex;
		gap: 0px;
		align-items: center;
		background-color: #EFF0FB;
	}
	
	#message {
		flex: 1;
		order: 2;
		padding: 20px;
	}
	
	#message p {
		font-size: calc(8px + 1vw);
		text-align: justify;
		line-height: 1.6em;
		width: 100%;
	}
	
	#message h2 {
		font-size: 25px;
	}
	
	#img {
		flex: 1;
		order: 1;
		padding: 25px;
	}
	
	.service2 p {
		margin: 0px;
		text-align: left;
	}
	
	.service2 p {
		line-height: 2em;
		padding: 0px;
	}
	
	#team {
		width: 100%;
		height: auto;
		padding: 12px;
		box-shadow: 0 0 2px 2px #D9DFE4 inset;
	}
	
	#wrapper3 {
		display: flex;
		gap: 8px;
		paddding: 10px;
		font-size: 20px;
		text-align: justify;
		text-align-last: center;
		color: #535154;
		line-height: 1.8em;
		justify-content: space-between;
	}
	
	#wrapper3 div {
		padding: 10px;
		margin: 15px 15px;
	}
	
	.box-1 {
		flex: 1;
		order: 1;
		background-color: #b6c0dd;
	}
	
	.box-2 {
		flex: 1;
		order: 2;
		background-color: #ced5e8;
	}
	
	.box-3 {
		flex: 1;
		order: 3;
		background-color: #e7eaf4;
	}
	
	#wrapper3 h2 {
		margin: 0px 0;
		padding: 25px;
		font-weight: normal;
		line-height: 1.6;
		font-size: 20px;
	}
	
	#wrapper4 {
		background-color: #EEDEEE;
		margin: 15px;
		width: auto;
		text-align: justify;
		text-align-last: center;
	}
	
	#wrapper4 h2 {
		font-size: 20px;
		line-height: 1.5;
		padding: 30px;
	}
	
	.final {
		width: 100%;
		display: inline-block;
	}
	
	@media (max-width: 958px) {
		#wrapper3 {
			display: block;
		}
		#wrapper3 h2 {
			font-size: 20px;
		}
		#wrapper2 {
			display: block;
			..or flex-direction: column;
		}
		#img {
			max-width: 80%;
			margin: 0 auto;
		}
		#message {
			width: 80%;
			margin: 0 auto;
		}
		.service3 {
			width: 100%;
			height: auto;
		}
		@media (max-width: 768px) {
			#wrapper2 {
				display: block;
			}
			#wrapper2 p {
				font-size: 16px;
			}
			#wrapper2 h2 {
				display: none;
			}
			.service1 {
				width: 100%;
				height: auto;
			}
			.service1 p {
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
			#wrapper3 h2 {
				font-size: 15px;
				font-size: 17px;
				text-align: justify;
				text-align-last: center;
			}
			.service3 h2 {
				padding: 10px;
			}
			#wrapper4 h2 {
				padding: 20px;
				font-weight: 600;
			}
		}
	</style>
</head>

<body>
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
	<div id="wrapper2">
		<div class="service2" id="message">
			<h2>All-encompassing expertise!</h2>
			<p>From architectural design and heritage planning, to business rates and development project management! Our expertise covers the full lifecycle of any project, from planning to completion. Years of professional experience and knowledge to provide the best management service. We are one of Ireland's largest property experts providing the best letting and management service.. </p>
		</div>
		<div class="service2" id="img"> <img src="images/management.jpg" alt="image_of_team" id="team"> </div>
	</div>
	<div id="wrapper3">
		<div class="box-1">
			<h2>We have been advising on property management for over 20 years. Whether you're planning to sell, or buy, our team covers everything from city high rises to rural land.
		</div>

	<div class="box-2">
		<h2>Book your appointment with us and let us help you keep moving. 
	At present, valuations in person are permitted but we encourage a virtual valuation in the first instance.
	</div>

	<div class="box-3">
	<h2>From country cottages to city centre offices, agricultural land to new-build developments. 
	Allow us to find solution which balances quality, and value for money.</h2> </div>
	</div>
	<div id="wrapper4">
		<h2>"A perfect mix of professionalism and friendliness, nothing is too much trouble for them.
	I am super impressed with the outstanding service I am receiving from Jamie and whole Haven Property team.
	Thank you so much, it really is a pleasure doing business with you"</h2> </div>
	<div id="wrapper1">
		<div class="service1">
			<h2>Simplified Real Estate Experience!</h2>
			<p>Contact us for customized information, and to be matched with the appropriate specialist for your specific real estate needs..</p>
		</div>
		<div class="service1" id="contact-form">
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
	<div class="final">
		<?php include("footer2.php");?>
	</div>
</body>

</html>