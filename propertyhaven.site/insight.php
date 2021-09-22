<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="logofavicon.jpg">
	<title>Insight & Advice</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	* {
		box-sizing: border-box;
	}
	
	.header {
		background-color: #D2E1EC;
		padding: 10px;
		text-align: center;
		font-size: 25px;
		color: #535154;
	}
	
	.container-1 {
		display: flex;
		gap: 8px;
		paddding: 10px;
		/*align-items:flex-start;
	align-items:flex-end;
	align-items:center;
	flex-direction:column;
	align-items:center;
	*/
		text-align: center;
		font-size: 20px;
		color: #535154;
		line-height: 1.8em;
		justify-content: space-between;
	}
	
	.container-2 {
		padding: 0px;
		color: #535154;
		line-height: 1.5em;
		background-color: #D2E1EC;
		font-size: 17px;
	}
	
	article {
		column-count: 2;
		gap: 2.5em;
		width: 85%;
		margin-left: auto;
		margin-right: auto;
		text-align: justify;
	}
	
	span {
		display: inline-block;
	}
	
	.container-2 div {
		padding: 15px;
	}
	
	.container-1 div {
		padding: 10px;
		margin: 15px 15px;
	}
	
	.box-1 {
		flex: 1;
		order: 1;
		background-color: #EFF0FB;
	}
	
	.box-2 {
		flex: 1;
		order: 2;
		background-color: #F9F0FB;
	}
	
	.box-3 {
		flex: 1;
		order: 3;
		background-color: #FFF0FB;
	}
	
	.responsive {
		width: 100%;
		height: auto;
	}
	
	.final {
		width: 100%;
	}
	
	@media (max-width: 750px) {
		.container-1,
		container-2 {
			flex-direction: column;
		}
		article {
			column-count: 1;
			text-align: justify;
		}
		article h3 {
			text-align: center;
		}
		.header h3 {
			width: 70%;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 0px;
		}
	}
	</style>
</head>

<body>
	<div>
		<?php include("includes/header.html");?>
		<?php include("includes/nav.html");?>
	</div>
	<div class="mainimage"> <img src="images/ask_sign.png" alt="ask_sign" class="responsive"> </div>
	<div class="container-1">
		<div class="box-1">
			<p>Insight & Advice is our hub for residential, commercial and rural articles and researches from experts offering industry-leading advice and professional analysis.</p>
		</div>
		<div class="box-2">
			<p>In-depth research and analysis into property market trends, forecasts from our specialist research teams, and market-leading commentary to help you make the right 
			property decisions.</p>
		</div>
		<div class="box-3">
			<p>World-class insight into predictions across commercial, residential and rural markets. The latest news, and up to date developments from the Ireland property industry.</p>
		</div>
	</div>
	<div class="header">
		<h3>6 Saving Tips For The First Time Buyers</h3> </div>
	<div class="container-2">
		<article>
			<h3>Pay off reduce debts</h3>
			<p>The first and most important way that you can start spending less and get mortgage-ready is to ditch any outstanding debt. Take stock of any borrowings that you have. 
			Starting with the highest interest loan first, put any extra available income into reducing these debts. If you have high interest debts you are not able to puy straight away, 
			consider taking out a lower interest loan from the likes of the credit union to minimise the impact of interest your finances. </p>
			<h3>Set up Standing Orders</h3>
			<p>The next step to becoming a deposit-saving pro is to set up a standing order. A standing order will automatically transfer a portion of your regular income directly into your 
			savings account. This guarantees a base level of savings each month (something lenders like to see) and prevents you from becoming tempted to overspend. </p>
			<h3>Watch Food Waste & Spending</h3>
			<p>Planning your weekly menu will not just cut food waste, but you wll always have something on hand. So you will save buckets of cash on buying food out, or ordering take-out. 
			By preparing your lunch at home on 4 days of the week, you will easily save over grand per year. Similarly, if you are buying a coffee each day, try limiting to once per week. 
			Enjoy the coffee in work instead. </p> 
			<span><h3>Make the Move You Said You Never Would</h3>
			<p >Now this is a tricky topic to touch on given the current state of the rental market in some areas of Ireland.
			But for many people, a gigantic chunk of their earnings are being consumed by their accommodation costs.
			Unfortunately, high rents can mean low savings.
			You can save a lot of money by moving back in with your folks.
			That is assuming that it is a possibility, and if you can bear it and if they can bear it.
			You wll just save money a lot faster and easier.</p></span>
			<h3>Be Patient</h3>
			<p>Saving your deposit can seem unrewarding. You wll feel the pain of reduced spending immediately, while the benefits of owning a home are still so far away. 
			This is where you need to trust in the process and persevere. Stick to your plan by paying off any high interest debt and setting up a standing order to your savings account to 
			track your expenses. Work to reduce unnecessary spending and You wil quickly adapt to your new lower budget lifestyle. Saving is most certainly a marathon and not a sprint.. </p>
			<h3>Final Advice</h3>
			<p>Before you save a cent, it is a good idea to set up a meeting with a mortgage advisor in a bank you trust. There are many factors that can influence your ability to access finance. 
			And only a mortgage advisor will be able to discuss things like: how much you can borrow and different mortgage options. </p>
		</article>
	</div>
	<div class="final">
		<?php include("footer2.php");?>
	</div>
</body>

</html>