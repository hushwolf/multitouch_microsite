<!DOCTYPE html>
<html class=''>
<head>

	<title>Multi-touch Table Microsite</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<link rel="stylesheet" type="text/css" href="css/kube.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:900,700,400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	
  <script src="js/kube.min.js"></script>
	<script src="snap.svg.js"></script>
	<script src="main.js"></script>

	<style>
		body {
			background-color: #F3857E;
			position:relative;
			padding-top:1px;
		}

		/* ### begin clearfix helper class ### */
		.clearfix:after {
	    visibility: hidden;
	    display: block;
	    font-size: 0;
	    content: " ";
	    clear: both;
	    height: 0;
	   }
		.clearfix { 
			display:inline-block; 
		}
		/* start commented backslash hack for clearfix \*/
		* html .clearfix { 
			height:1%; 
		}
		.clearfix { 
			display:block; 
		}
		/* close commented backslash hack for clearfix */
		/* ### end clearfix helper class ### */

		#scrollnav {
	    height: 112px;
	    margin: auto;
	    position: fixed;
	    	top: 0; right: 0; bottom: 0; /* do not set left value */
		}

		/* ### begin menu styles ### */
		#menu {
			position:fixed;
			top:30%;
		}
		.nav { /* aka tablemenu */
	    background-color:transparent;
	    color:#fff;
	    transition: all 0.25s ease;
	    position:fixed;
	    top:30%;
		}
		#tablemenu ul {
			list-style: none;
		}
		/* defualt values for viewability of sub-navigation */
		#tablemenu ul li ul  {
			display:none;
		}
		#tablemenu ul li a {
			color:#fff;
			text-transform: uppercase;
		}
		/* ### begin menu styles ### */

		#text {
			position:fixed;
			top:30%;
		}
		#menu {
			position:fixed;
			top:30%;
		}
		#starting_links {
			position:fixed;
			width:100%;
		}
		#tableicon img {
		 width:64px;
		}
		
		/* starting (section1) values for viewability of sub-navigation - show #section1navitemsub-navigation only */
		#tablemenu.section1 ul li#section1navitem ul  {
			display:block !important;
		}
		#tablemenu.section1 ul li#section2navitem ul  {
			display:none;
		}
		#tablemenu.section1 ul li#section3navitem ul  {
			display:none;
		}

		/* section2 values for viewability of sub-navigation - show #section2navitem sub-navigation only */
		#tablemenu.section2 ul li#section1navitem ul  {
			display:none;
		}
		#tablemenu.section2 ul li#section2navitem ul  {
			display:block;
		}
		#tablemenu.section2 ul li#section3navitem ul {
			display:none;
		}

		/* section3 values for viewability of sub-navigation - show #section3navitem sub-navigation only */
		#tablemenu.past-section3 ul li#section1navitem ul  {
			display:none;
		}
		#tablemenu.section3 ul li#section2navitem ul  {
			display:none;
		}
		#tablemenu.section3 ul li#section3navitem ul {
			display:block;
		}
		
		#tablemenu ul li.on {
			color:#666;
			font-weight:bold; /*temp use only*/
		}
		#tablemenu ul li.on ul li {
			color:#fff;
			font-weight:normal; /*temp use only*/
		}
		#section1, #section2, #section3  {
			background-image:none;
			background-size:cover;
			height:100vh;
			transition:background 0.5s linear;
		}
		#section1 {
			background-image:url(/images/background.png);
		}
		#section2 {
			background-image:url(/images/touch.jpg);
		}
		#section3 {
			background-image:url(/images/background.png);
		}
	</style>

</head>
<body style="min-height:650px;">

<div class="units-row units-split" id="starting_links">

	<div class="unit-push-10 unit-20">
		<a id="ideumicon" href="http://ideum.com">
			<img src="images/logo-new.png">
		</a>
	</div>
	<div class="unit-push-70 unit-20">
		<a id="socialicon" href="">
			<img src="images/share_this.png">
		</a>
		<a id="tableicon" href="http://ideum.com/touch-tables/">
			<img src="images/table.jpg">
		</a>
	</div>
</div>

<section class="unit-push-10 unit-20" id="menu">
	<nav id="tablemenu" class="nav">
		<ul>
			<li id="section1navitem"><a href="#section1">The Multitouch Table</a>
				<ul>
					<li>Latest In Touch</a>
					<li>Key Features</li>
				</ul>
			</li>	
			<li id="section2navitem"><a href="#section2">Gallery</a></li>
			<li id="section3navitem"><a href="#section3">Contact</a></li>
		</ul>
	</nav>
</section>

<section class="unit-push-40 unit-20" id="text">
	<div id="nav-information">Section 1 Text.</div>
</section>

<section id="scrollnav" class="unit-push-80 unit-5">

	<div class="">
		<button id="up_arrow">
			<img src="images/up_arrow.png" width="64px" height="64px">
		</button>
	</div>

	<div class="">
		<button id="down_arrow">
			<img src="images/down_arrow.png" width="64px" height="64px">
		</button>
	</div>

</section>

<div class="units-row units-split" id="content-scroller">

	<a class="anchorlink" name="section1"></a>
	<section id="section1">

		<div id="text-display" class="unit-push-40 unit-25">
			
		</div>

	</section>

	<a class="anchorlink" name="section2"></a>
	<section id="section2">

		<div id="text-display" class="unit-push-40 unit-25">
			
		</div>

	</section>

	<a class="anchorlink" name="section3"></a>
	<section id="section3">

		<div id="text-display" class="unit-push-40 unit-25">
			
		</div>

	</section>

</div>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>

(function() { // any attempt to scroll will take one to next section (up or down)
  var delay = false;

  $(document).on('mousewheel DOMMouseScroll', function(event) {
    event.preventDefault();
    if(delay) return;

    delay = true;
    setTimeout(function(){delay = false},1100)

    var wd = event.originalEvent.wheelDelta || -event.originalEvent.detail;

    var a= document.getElementsByClassName('anchorlink');
    if(wd < 0) {
      for(var i = 0 ; i < a.length ; i++) {
        var t = a[i].getClientRects()[0].top;
        if(t >= 40) break;
      }
    }
    else {
      for(var i = a.length-1 ; i >= 0 ; i--) {
        var t = a[i].getClientRects()[0].top;
        if(t < -20) break;
      }
    }
    $('html,body').animate({
      scrollTop: a[i].offsetTop
    });
  });
})();

$(document).ready(function($) {

  var $win = $(window);
  var winvh = $win.height(); // Get the window height.

  $win.on("scroll", function () { // on scroll do
  	//console.log($(this).scrollTop());

  	if ( ($(this).scrollTop() <= winvh) ){
			$("#nav-information").text("Section 1 Text.");

			$('#tablemenu').addClass('section1');
			$('#section1').addClass('section1');
    	$('#section1navitem').addClass('on');

    	$('#tablemenu').removeClass('section2');
    	$('#section2').addClass('section2');
    	$('#section2navitem').removeClass('on');

    	$('#tablemenu').removeClass('section3');
    	$('#section3').addClass('section3');
    	$('#section3navitem').removeClass('on');
		}

		else if ( ($(this).scrollTop() > winvh) && ($(this).scrollTop() <= winvh*2) ){
			$("#nav-information").text("Section 2 Text.");

			$('#tablemenu').addClass('section2');
			$('#section2').addClass('section2');
    	$('#section2navitem').addClass('on');

    	$('#tablemenu').removeClass('section1');
    	$('#section1').addClass('section2');
    	$('#section1navitem').removeClass('on');

    	$('#tablemenu').removeClass('section3');
    	$('#section3').addClass('section3');
    	$('#section3navitem').removeClass('on');
		}

		else {
			$("#nav-information").text("Section 3 Text.");

			$('#tablemenu').addClass('section3');
			$('#section3').addClass('section3');
    	$('#section3navitem').addClass('on');

    	$('#tablemenu').removeClass('section1');
    	$('#section1').addClass('section2');
    	$('#section1navitem').removeClass('on');

    	$('#tablemenu').removeClass('section2');
    	$('#section2').addClass('section2');
    	$('#section2navitem').removeClass('on');
		}
		

  }).on("resize", function(){ // if the user resizes the window
     vh = $(this).height(); // get the new height value
  });	
  
  
});

$(function() { // this does the smooth scrolling for anchor click events
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 750);
        return false;
      }
    }
  });
});


</script>

</body>
</html>