<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Subscribe form</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	.form {
		border: 0;
		outline: 0;
	}
	
	#subscribe-form {
		display: inline-block;
	}
	
	label {
		color: #696969;
		display: inline-block;
		width: 60px;
	}
	
	.submit-button {
		padding: 5px 65px;
		background-color: #D6D7E5;
	}
	
	.form {
		display: flex;
		justify-content: left;
		align-items: left;
	}
	
	input {
		border-radius: 3px;
		padding: 3px;
	}
	
	textarea {
		border-radius: 4px;
		box-shadow: 0 2px 2px #000;
	}
	</style>
</head>

<body>
	<div class="subscribe">
		<h2>Subscribe to our Newsletter</h2> </div>
	<!--Subscribe form -->
	<div class="form">
		<form method="post" action="process_subscribe_form.php" id="subscribe-form">
			<fieldset class="form">
				<label>Name:</label>
				<input type="text" name="author_name" required="required">
				<br>
				<!--HTML validation code - to make sure all fields are filled with data and not left blank!-->
			</fieldset>
			<fieldset class="form">
				<label>Email: </label>
				<input type="email" name="author_email" required="required">
				<br>
				<!--HTML validation code - to make sure all fields are filled with data and not left blank!-->
			</fieldset>
			<fieldset class="form">
				<label style="visibility: hidden;">Submit</label>
				<input type="submit" name="submit" class="submit-button" value="Send"> </fieldset>
		</form>
	</div>
	<!--Closing tag for div class "column"-->
	</div>
	<!--Closing tag for div class "row"-->
</body>

</html>