<!DOCTYPE html>
<html lang="en">
<head>
	<title>Multi-touch Table Microsite</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<link rel="stylesheet" type="text/css" href="css/kube.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:900,700,400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="js/kube.min.js"></script>
	<script src="snap.svg.js"></script>
	<script src="main.js"></script>
</head>
<body>
	<div class="svg_animation">
		<svg id="svg"></svg>
	</div>
	<div class="units-row units-split" id="starting_links">

		<div class="unit-push-10 unit-10">
			<a id="ideumicon" href="http://ideum.com">
				<img src="images/logo-new.png">
			</a>
		</div>
		<div class="unit-push-70 unit-20">
			<a id="socialicon" href="">
				<img src="images/share_this.png">
			</a>
			<a id="tableicon" href="http://ideum.com/touch-tables/">
				<img src="images/table.jpg" width="64px" height="64px">
			</a>
		</div>
	</div>

	<div class="units-row units-split" id="content-block">
		<div class="unit-push-10 unit-25">	
			<nav id="tablemenu" class="nav">
				<ul>
					<li>THE LATEST IN TOUCH
						<ul>
							<li>TOUCH AT ITS BEST</li>

							<li>CAPACITIVE TOUCH</li>

							<li>UHD 4K DISPLAY</li>	
							<li>STAY CONNECTED</li>
	
							<li>VANDAL PROOF</li>
	
							<li>MEDIA OPTIONS</li>

							<li>COMPUTER/PROCESSOR</li>
						</ul>
					</li>			
					<li>KEY FEATURES
						<ul>
							<li>THE PERFECT PACKAGE</li>

							<li>REACH OUT &<br>TOUCH EVERYTHING</li>

							<li>ARMED & HYPERTHREADY</li>

							<li>BUILT FOR DEMANDING SPACES</li>

							<li>WINDOWS 8 & BEYOND</li>
	
							<li>CREATION BY<br>INTELLIGENT DESIGN</li>
	
							<li>GRAPHICALLY SPEAKING</li>
	
							<li>TWO YEAR WARRANTY</li>
						</ul>
					</li>	
					<li>UPGRADES</li>
					<li>SPECIFICATIONS</li>
					<li>GALLERY</li>
					<li>CONTACT</li>
				</ul>
			</nav>
		</div>
		<div class="unit-20">
			<div id="nav-information">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas ipsum vitae libero tincidunt, sed rhoncus nisi rhoncus. Maecenas eget sollicitudin libero. Integer pretium fringilla euismod. Nullam porttitor, sapien id tincidunt finibus, sapien enim pulvinar urna, sed fringilla elit sapien at tellus. Sed vitae augue quis diam feugiat gravida et eget sem. In bibendum velit a tellus aliquam vehicula. Cras ornare cursus laoreet.</p>
			</div>
		</div>
		<div class="unit-push-40">
			<button id="up_arrow">
				<img src="images/up_arrow.png" width="64px" height="64px">
			</button>
		</div>
		<div class="unit-push-10">
			<button id="down_arrow">
				<img src="images/down_arrow.png" width="64px" height="64px">
			</button>
		</div>	
	</div>	
</body>
</html>