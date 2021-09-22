<!DOCTYPE html>
<html>

<head>
	<link rel="icon" href="logofavicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<!--three equal columns in footer-->
	<style>
	* {
		box-sizing: border-box;
	}
	
	.flex-container {
		display: flex;
		gap: 0px;
		padding: 20px;
		justify-content: space-between;
		background-color: #EFF0FB;
	}
	
	.column1 {
		order: 1;
		flex-basis: 25%;
	}
	
	.column2 {
		order: 1;
		flex-basis: 25%;
	}
	
	.column3 {
		order: 1;
		flex-basis: 25%;
	}
	
	@media (max-width: 980px) {
		.social {
			display: none;
		}
		.copyright {
			display: none;
		}
		.foot-basic {
			margin-top: 20px;
		}
		.column3 {
			width: 50%;
			margin: 0 auto;
		}
	}
	
	@media (max-width: 780px) {
		.flex-container {
			display: block;
			margin: 0 auto;
			text-align: center;
		}
		.column1 {
			display: inline-block;
		}
		.column2 {
			display: inline-block;
		}
		.column3 {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-wrap: wrap;
		}
	}
	</style>
</head>

<body>
	<div class="flex-container">
		<div class="column">
			<div class="column1">
				<?php include("subscribe.php");?>
			</div>
			<div class="column2">
				<?php include("socialmedia.php");?>
			</div>
			<div class="column3">
				<?php include("searchform.php");?>
			</div>
		</div>
	</div>
</body>

</html>