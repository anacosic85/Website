<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Homepage</title>
	<meta charset="utf-8">
	<link rel="icon" href="logofavicon.jpg">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	/*CSS style for slideshow images on the homepage*/
	
	* {
		box-sizing: border-box;
	}
	
	body {
		14px "Open Sans",
		Helvetica,
		Arial,
		Sans-serif;
	}
	
	.mySlides {
		display: none;
	}
	
	img {
		vertical-align: middle;
	}
	/* Slideshow container */
	
	.slideshow-container {
		width: 100%;
		position: relative;
		margin: auto;
	}
	/* Caption text */
	
	.text {
		color: #f2f2f2;
		position: absolute;
		top: 90%;
		left: 50%;
		width: 100%;
		text-align: center;
		transform: translate(-50%, -50%);
		font-size: 2em;
		letter-spacing: 0.8px;
		color: #fff;
		font-family: DomineWebRegular, Georgia, Palatino Linotype, serif;
	}
	/* Number text (1/3 etc) */
	
	.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
	}
	/* The dots indicators when slides change
.dot {
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}*/
	
	.active {
		background-color: #717171;
	}
	/* Fading animation*/
	
	.fade {
		-webkit-animation-name: fade;
		-webkit-animation-duration: 1s;
		animation-name: fade;
		animation-duration: 3s;
	}
	
	@-webkit-keyframes fade {
		from {
			opacity: .4
		}
		to {
			opacity: 1
		}
	}
	
	@keyframes fade {
		from {
			opacity: .4
		}
		to {
			opacity: 1
		}
	}
	
	@media (max-width: 1089px) {
		.text {
			font-size: 1.6em;
		}
	}
	
	@media (max-width: 589px) {
		.text {
			font-size: 1.2em;
		}
	}
	
	@media (max-width: 350px) {
		.text {
			font-size: 1em;
		}
	}
	</style>
</head>

<body>
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
			<!--Automatic slideshow, change image every 3 seconds-->
			<div class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext"></div> <img src="images/homepage/img1.png" style="width:100%">
					<div class="text">Let us guide you home</div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext"></div> <img src="images/homepage/img3.png" style="width:100%">
					<div class="text">Creating moments of happiness</div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext"></div> <img src="images/homepage/img4.png" style="width:100%">
					<div class="text">Delivering the extraordinary</div>
				</div>
			</div>
			<!--closing div class slideshow-container-->
			<div style="text-align:center"> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> </div>
			<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for(i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slideIndex++;
				if(slideIndex > slides.length) {
					slideIndex = 1
				}
				for(i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
				setTimeout(showSlides, 3000); // Change image every 3 seconds
			}
			</script>
			<div>
				<?php include("footer.php");?>
			</div>
			</div>
</body>

</html>