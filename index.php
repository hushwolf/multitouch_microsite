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

</head>
<body>

<div class="units-row units-split" id="starting_links">

	<div class="unit-push-10 unit-20">
		<a id="ideumicon" href="http://ideum.com">
			<img src="images/ideum_logo.png">
		</a>
	</div>
	<div class="unit-push-60 unit-20">
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
	<div id="nav-information">Section 1 Text. This text is visible to the user until the first scroll but is still useful for SEO purposes. it is a counterpart of the text found in the javascript below.</div>
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

		<div id="text-display-1" class="text-display unit-push-40 unit-25">
			Section 1 Text. This text is hidden from the user but is useful for SEO purposes. This text is the counterpart of the text found in the javascript below.
		</div>

	</section>

	<a class="anchorlink" name="section2"></a>
	<section id="section2">

		<div id="text-display-2" class="text-display unit-push-40 unit-25">
			Section 2 Text. This text is hidden from the user but is useful for SEO purposes. This text is the counterpart of the text found in the javascript below.
		</div>

	</section>

	<a class="anchorlink" name="section3"></a>
	<section id="section3">

		<div id="text-display-3" class="text-display unit-push-40 unit-25">
			Section 3 Text. This text is hidden from the user but is useful for SEO purposes. This text is the counterpart of the text found in the javascript below.
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
			$("#nav-information").text("Section 1 Text. This text is visible to the user but is not useful for SEO purposes. This text gets switched out via javascript.");

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
			$("#nav-information").text("Section 2 Text. This text is visible to the user but is not useful for SEO purposes. This text gets switched out via javascript.");

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
			$("#nav-information").text("Section 3 Text. This text is visible to the user but is not useful for SEO purposes. This text gets switched out via javascript.");

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
