<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Property Management</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	* {
		box-sizing: border-box;
	}
	/* Create three equal columns that floats next to each other */
	
	.column {
		float: left;
		width: 33.33%;
		padding: 10px;
		height: 210px;
	}
	/* Clear floats after the columns */
	
	.row:after {
		content: "";
		display: table;
		clear: both;
	}
	</style>
</head>

<body>
	<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
			<div id="content"> The Property Company also takes care of managing your property!
				<br>For over 40 years, we are specialised in tailor-made luxury real estate worldwide.
				<br>One of our unique assests is the possibility to delegate the management of your luxury property to one of our real estate offices.
				<br>We ofer representation and guidance throughout the property management process.
				<h4>Carefully selected professionals deliver full service in:</h4>
				<div class="row">
					<div class="column" style="background-color:#aaaa;">
						<h2>Home maintenance</h2>
						<p> John Taylor's experts will find you a reliable and trustworthy person to be in charge of maintaing your home. Whether it be inspections, adjustments, cleaning, or replacements our expert will ensure a proper functioning of all systems in your house.</p>
					</div>
					<div class="column" style="background-color:#bbbb;">
						<h2>Building Works</h2>
						<p> No matter if this means a simple replacement of worn-out parts, a more delicate repairing or an emergency, our experts will always find a solution to problems in your home.</p>
					</div>
					<div class="column" style="background-color:#cccc;">
						<h2>Monthly Bills</h2>
						<p> No more worrying about unpaid bills. Our specialists will take care of the settlement of your monthly bills and bring eventual irregularities to your attention.</p>
					</div>
				</div>
			</div>
			<?php include("includes/footer.html");?>
				</div>
</body>

</html>