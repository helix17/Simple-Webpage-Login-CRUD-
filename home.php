<?php
session_start();
if($_SESSION["user"] == NULL) { 
   header('Location: Login.php'); 
}  
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19BCE2278 IWP DA2 HomePage</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>
	<nav>
		<div class="projName"><a href="home.php">PC Corner</a></div>
		<ul>
			<li><a href="">Account</a>
			<ul class="account">
				<li><a href="build.php">Build</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul></li>
			<li><a href="about.html">About Us</a></li>
		</ul>
	</nav>
	<div class="bgimg1">
		<div class="caption">
			<span class="border">MAKE IT YOURSELF</span>
		</div>
	</div>
	<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
		<h3 style="text-align:center;">PC BUILDER</h3>
		<p>Our service offers parts from various companies that are leading in the pc parts industry. Choose parts for in your Budget and let us get it to your doorstep.
		Make it yours by doing it yourself. GET OFFERS FOR REFERALS. Check out our parts now.<p>
	</div>
	<div class="bgimg2">
		<div class="caption">
			<span class="border">GO PREBUILD</span>
		</div>
	</div>
	<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
		<h3 style="text-align:center;">HIGH END PREBUILDS</h3>
		<p>We have partnered ourselves with industry leading brands that provide high end prebuilds made from their own part. Not satisfied ? 
		How about customizing your PC specifications down to the orientation of your coolers. Yes, we even have extra RGB for extra performance.</p>
	</div>
	<div class="bgimg3">
		<div class="caption">
			<span class="border">GET STACKED</span>
		</div>
	</div>
	<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
		<h3 style="text-align:center;">PERIPHERAL FESTIVAL</h3>
		<p>Rocking your usual pair of cheapo earphones ? Choose from a variety of peripherals from our partners. Choose something that matches your taste;
		more importantly, your PC. From razer to ROG everything is yours, if you pay that is. Don't miss the early bird offers. </p>
	</div>
	<div class="bgimg1">
		<div class="caption">
		<span class="border"><a href="build.php" style="text-decoration: none;">BUILD NOW<a></span>
		</div>
	</div>
	
</body>
<html>