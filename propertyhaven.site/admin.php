<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css"> </head>
<style>
#admin {
	margin-top: 60px;
}
p a {
	border-radius: 7px;
	padding: 7px;
}
p {
	padding-top: 7px;
	font-size: 18px;
}
</style>

<body>
	<div id="container">
		<?php include ("includes/header.html"); ?>
		<?php include ("includes/nav.html"); ?>
			<div id="content">
				<h3> Administrator Area</h3>
<?php
session_start();
if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
    echo "Hi " . $username . "!" . "
";
    echo "<br><br>Choose one of the menu options to Manage Comments, Properties or Vendors. &nbsp; &nbsp";

    echo "<p><a href='managecomments.php' >Manage Comments</a> 
<p><a href='manageproperty.php'>Manage Properties</a> 
<p><a href='managevendors.php'>Manage Vendors</a>";
    echo "<p><a href='logout.php'>Logout</a></p>";
}
?>
	</div>
	<div id="admin">
		<?php include("footer2.php");?>
	</div>

</body>
</html>
