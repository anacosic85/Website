<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>About Us</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="logofavicon.jpg">
	<style>
	img {
		display: block;
		max-width: 100%;
	}
	
	#wrapper1 {
		position: relative;
		display: inline-block;
	}
	
	.center {
		position: absolute;
		top: 90%;
		left: 50%;
		width: 100%;
		text-align: center;
		transform: translate(-50%, -50%);
		font-size: calc(2em + 0.7vmin);
		margin: 0 0 2.125rem;
		color: #fff;
		font-family: DomineWebRegular, Georgia, Palatino Linotype, serif;
	}
	
	#wrapper2 {
		display: flex;
		justify-content: center;
		color: #696969;
	}
	
	.service {
		width: 45%;
		margin: 1%;
		padding: 2%;
		background-color: #F7F1FA;
	}
	
	.service h2,
	.service p {
		color: #99;
		margin: 10px 10px;
		text-align: left;
		font-family: DomineWebRegular, Georgia, Palatino Linotype, serif;
		line-height: 1.6;
	}
	
	.service4 {
		background-color: #EEDEEE;
		color: #696969;
		width: auto;
		padding: 4%;
		text-align: left;
		font-weight: normal;
		font-size: calc(0.8em + 1vmin);
		line-height: 1.6;
	}
	
	.service4 h2 {
		margin: 0px;
		padding: 0px;
		font-size: calc(1em + 1vmin);
	}
	
	.service4 p {
		display: inline-block;
		text-align: justify;
	}
	
	@media (max-width: 598px) {
		#wrapper2 {
			display: block;
		}
		.service {
			width: 100%;
		}
	}
	</style>
</head>

<body>
	<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
			<div id="wrapper1"> <img src="images/team.png" alt="team-image">
				<div class="center">Why Property Haven?</div>
			</div>
			<div class="service4">
				<h2>Our long-standing experience</h2>
				<article>
					<p>Founded in Ireland in 1990, Property Haven is one of the Ireland's leading property agents. Our experience and expertise gives us wide-ranging specialist and local knowledge, and we take pride in providing best-in-class advice as we help individuals, businesses and institutions make better property decisions.. Thank you so much, it really is a pleasure doing business with you"</p>
				</article>
				<h2>Our Business Ethics</h2>
				<article>
					<p>Our commitment to acting honestly, with integrity, and always with clients' best interests at heart, is fundamental to everything we do. When it comes to our business, our long-standing reputation is built on trust and integrity. It is what gives our clients, investors, and business partners and the confidence to work with us. Our vision is to be the real estate adviser of choice in the markets we serve. We did not set out to be the biggest, just the best! To achieve this we strive to attract, recruit and retain the best people in property, who go the extra mile for their clients. At all levels, our staff conduct themselves proudly as representatives for the company.</p>
				</article>
				<h2>Group Structure</h2>
				<article>
					<p>Our flexible business model and the diversity of our business streams allow us to grow organically as well as through acquisitions and strategic alliances. Irrespective of location, our people form part of a wider integrated network that enables them to provide our clients with access to market intelligence, contacts and the highest quality advice. We use a flat management structure to ensure an efficient decision-making process, enabling us to maintain our flexible, responsive approach to delivering the highest levels of client service. This is an innovative structure for a company our size.</p>
				</article>
			</div>
			<div id="wrapper2">
				<div class="service">
					<h2>Why we are different </h2>
					<p>Our people are committed to providing our clients with the best possible advice and a level of service that makes a real difference.
						<br>We take pride in everything we do.
						<br>We always act with integrity.
						<br>We are forward thinking.
						<br>We help our people fulfil their true potential. </p>
				</div>
				<div class="service">
					<h2>Vision & Strategy</h2>
					<article>
						<p>Our vision is to be the real estate adviser of choice in the markets we serve. We do not wish to be the biggest, just the best.
							<br>Our values capture our commitment not only to ethical, professional and responsible conduct but to the essence of real estate success, an entrepreneurial approach. We approach problems with a proactive attitude, delivering robust solutions. </p>
					</article>
				</div>
			</div>
			<div>
				<?php include("footer.php");?>
			</div>
</body>

</html>