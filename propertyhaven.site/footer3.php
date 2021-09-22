<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="logofavicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {
		box-sizing: border-box;
	}
	
	.column {
		float: left;
		width: 33.33%;
		padding: 5px;
		height: 240px;
		background-color: #EEEEF2;
	}
	/* Clear floats after the columns */
	.row:after {
		content: "";
		clear: both;
	}
	
	#contact,
	.h3,
	.article {
		text-align: center;
		font-family: DomineWebRegular, Georgia, Palatino Linotype, serif;
		font-size: 90%;
		line-height: 1.6;
		font-weight: normal;
		color: #535154;
	}
	</style>
	<div class="row">
		<!--First column is contact form -->
		<div class="column">
			<?php include("subscribe.php");?>
		</div>
		<!--Social media links column-->
		<div class="column">
			<?php include("socialmedia.php");?>
		</div>
		<!--Third column is company info -->
		<div class="column">
			<div id="contact">
				<h3>Property Haven Ltd</h3>
				<article>
					<p>25 Glenmalure Court
						<br>James's Walk, Dublin
						<br>D08 P9F6
						<br>01 8765343
						<br>01 8765443
						<br>property@haven.com </p>
				</article>
			</div>
		</div>
	</div>
	<!--Closing div "row" -->
	<!-- -->
	</body>
</html>