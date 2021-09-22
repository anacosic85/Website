<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Admin Login Page</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	#loginfooter {
		margin-top: 100px;
	}
	
	table td {
		padding: 8px;
	}
	</style>
</head>

<body>
	<div id="container">
		<?php
		if (empty($_SESSION)) session_start();
		if (isset($_SESSION['errors']))
		{
		echo "<div class='form-errors'>";
		foreach ($_SESSION['errors'] as $error)
		{
			echo "<p>";
			echo $error;
			echo "</p>";
		}
		echo "</div>";
		}
		unset($_SESSION['errors']);
		?>

						<h3> Login </h3>
						<form action="login_action.php" method="POST">
							<p> Username:
								<input type="text" name="admin_name" required="required"> </p>
							<p> Password:
								<input type="password" name="password" required="required"> </p>
							<p>
								<input type="submit" value="Login"> </p>
						</form>
				</div>
				<div id="loginfooter">
					<?php include("footer2.php");?>
				</div>
</body>

</html>