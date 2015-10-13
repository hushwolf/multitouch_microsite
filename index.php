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
<body style="min-height:650px;">
	<div class="svg_animation">
		<svg id="svg"></svg>
		<svg id="svg2"></svg>
	</div>

	<div class="units-row units-split" id="starting_links">
		<div class="unit-push-10 unit-10">
			<a id="ideumicon" href="http://ideum.com" target="_blank">
				<img src="images/ideum_logo.png">
			</a>
		</div>
		<div class="unit-push-60 unit-30">
			<a id="downloadicon" href="">
				<img src="images/download.png" height="64px" width="64px">
			</a>
			<a id="socialicon" href="">
				<img src="images/share_this.png" height="64px" width="64px">
			</a>
			<a id="tableicon" href="http://ideum.com/touch-tables/platform/" target="_blank">
				<img src="images/table_icon.png" height="64px" width="64px">
			</a>
		</div>
	</div>

	<section class="units-push-10 unit-20" id="menu">
		<nav id="tablemenu" class="nav">
			<ul>
				<li id="section1navitem"><a id="section1navitem1" href="#section1">THE MULTITOUCH TABLE</a>
					<ul>
						<li><a id="section1navitem2">LATEST IN TOUCH</a></li>

						<li><a id="section1navitem3">KEY FEATURES</a></li>
					</ul>
				</li>			
				<li id="section2navitem"><a href="#section2">GALLERY</a></li>
				<li id="section3navitem"><a href="#section3">CONTACT</a></li>
			</ul>
		</nav>
	</section>
	
	<div class="units-row units-split" id="content-scroller">
		<a class="anchorlink" name="section1"></a>
			<section id="section1">
				<section id="scrollnav" class="unit-push-80 unit-10">
					<img id="up_arrow" src="images/up_arrow.png" width="64px" height="64px">
					<img id="down_arrow" src="images/down_arrow.png" width="64px" height="64px">
					<div id="dig_deeper">
						<p>DIG DEEPER</p>
					</div>
				</section>

				<section class="unit-push-20 unit-20" id="content-text">
					<div id="nav-info1">
						<p>"The multitouch technology featured in the Platform 55 4K P-CAP is the same reliable touch technology used in popular smartphones and tablets. This technology is impervious to light interference and provides superior responsiveness and accuracy. The bezel-less surface is water and dust resistant."</p>
					</div>
					<div id="nav-info2">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero justo, molestie nec pretium vitae, commodo id nulla. Fusce sed nibh porta, posuere risus quis, ullamcorper urna. Aliquam eleifend dictum elit in imperdiet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a commodo ipsum. Vivamus mi enim, lacinia nec condimentum sed, cursus vitae orci. Sed ullamcorper urna eu quam sollicitudin, id tincidunt metus faucibus. Aliquam ac blandit ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Mauris luctus venenatis nibh, id laoreet sapien gravida nec. Suspendisse potenti.</p>
					</div>
					<div id="nav-info3">
						<p>Vivamus ut lorem posuere, faucibus elit at, molestie mauris. Donec et enim elementum erat efficitur iaculis. Morbi bibendum tincidunt velit ut porttitor. Proin vitae tortor magna. Fusce rutrum nisl fringilla tellus elementum mollis. Ut faucibus leo feugiat, finibus ex nec, vestibulum mauris. Duis a augue metus. Sed sit amet leo tortor. Suspendisse sed molestie neque. Donec eu felis eget tortor dapibus posuere in non tortor</p>
					</div>
				</section>
				<section class="unit-push-20 unit-30">
					<div id="table_image">
					</div>
				</section>
			</section>

		<a class="anchorlink" name="section2"></a>
			<section id="section2">
			</section>

		<a class="anchorlink" name="section3"></a>
			<section id="section3">
			</section>
	</div>
</body>
</html>