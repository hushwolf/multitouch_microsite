<!DOCTYPE html>
<html>

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

	<div class="svg_animation">
		<svg id="svg"></svg>
		<svg id="svg2"></svg>
	</div>

<div class="units-row units-split" id="starting_links">

	<div class="unit-push-10 unit-20">
		<a id="ideumicon" href="">
			<img src="images/ideum_logo.png">
		</a>
	</div>
	<div class="unit-push-60 unit-20">
		<a id="socialicon" href="">
			<img src="images/share_this.png">
		</a>
		<a id="tableicon" href="http://ideum.com/touch-tables/">
			<img src="images/table_icon.png">
		</a>
	</div>
</div>

<section class="unit-push-10 unit-20" id="menu">
	<nav id="tablemenu" class="nav">
		<ul>
			<li id="section1navitem" class="on"><a id="section1navitem1" href="#section1">The Multitouch Table</a>
				<ul>
					<li><a href="#" id="section1navitem2">LATEST IN TOUCH</a></li>
					<li><a href="#" id="section1navitem3">KEY FEATURES</a></li>
				</ul>
			</li>	
			<li id="section2navitem"><a href="#section2">Gallery</a></li>
			<li id="section3navitem"><a href="#section3">Contact</a></li>
		</ul>
	</nav>
</section>

<section class="unit-push-40 unit-20" id="text">
	<div id="content-information">This section 1 content is hidden from the user but is useful for SEO purposes. It is the counterpart of the text found in the javascript below.</div>
</section>

<section id="scrollnav" class="unit-push-80 unit-5">

	<div class="up-down-arrows">
		<div id="up_arrow">
			<img src="images/up_arrow.png">
		</div>
		<div id="down_arrow" class="on goto1a">
			<img src="images/down_arrow.png">
		</div>
		<div id="dig_deeper" class="on">
			<p>DIG DEEPER</p>
		</div>
	</div>

</section>

<div class="units-row units-split" id="content-scroller">

	<a class="anchorlink" name="section1"></a>
	<section id="section1">

		<div id="content-display-1" class="text-display unit-push-40 unit-25">
			This section 1 content is hidden from the user but is useful for SEO purposes. It is the counterpart of the text found in the javascript below.
		</div>
		<div id="content-display-1a" class="text-display unit-push-40 unit-25">
			This section 1a content is hidden from the user but is useful for SEO purposes. It is the counterpart of the text found in the javascript below.
		</div>
		<div id="content-display-1b" class="text-display unit-push-40 unit-25">
			This section 1b content is hidden from the user but is useful for SEO purposes. It is the counterpart of the text found in the javascript below.
		</div>

	</section>

	<a class="anchorlink" name="section2"></a>
	<section id="section2">

		<div id="content-display-2" class="text-display unit-push-40 unit-25">
			This section 2 content is hidden from the user but is useful for SEO purposes. It is the counterpart of the text found in the javascript below.
		</div>

	</section>

	<a class="anchorlink" name="section3"></a>
	<section id="section3">

		<div id="content-display-3" class="text-display unit-push-40 unit-25">
			This section 3 content is hidden from the user but is useful for SEO purposes. It is the counterpart of the text found in the javascript below.
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

  var $win = $(window); // set the win var
  var winvh = $win.height(); // Get the window height.


  // Nav button content
    // ================================================================================================================
    $('#section1navitem1').click(function(){ // if #section1navitem1 clicked 
      $("#content-information").text("This section 1 content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

    	$('#up_arrow').removeClass('on');
    	$('#up_arrow').removeClass('goto1');
    	$('#up_arrow').removeClass('goto1a');

    	$('#down_arrow').addClass('on');
    	$('#down_arrow').addClass('goto1a');
    	$('#down_arrow').removeClass('goto1b');

      $('#dig_deeper').addClass('on');

      $('#section1navitem2').removeClass('on');
      $('#section1navitem3').removeClass('on');
    });

    $('#up_arrow').click(function(){ // if #up_arrow clicked
      
			if ( $(this).hasClass("goto1") ) {
	      $("#content-information").text("This section 1 content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

	    	$('#up_arrow').removeClass('on');
	    	$('#up_arrow').removeClass('goto1');
	    	$('#up_arrow').removeClass('goto1a');

	    	$('#down_arrow').addClass('on');
	    	$('#down_arrow').addClass('goto1a');
	    	$('#down_arrow').removeClass('goto1b');

	      $('#dig_deeper').addClass('on');

	      $('#section1navitem2').removeClass('on');
	      $('#section1navitem3').removeClass('on');
	    } else if ( $(this).hasClass("goto1a") ) {
	    	$("#content-information").text("This section 1a content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

	    	$('#up_arrow').addClass('on');
	    	$('#up_arrow').addClass('goto1');
	    	$('#up_arrow').removeClass('goto1a');

	    	$('#down_arrow').addClass('on');
	    	$('#down_arrow').removeClass('goto1a');
	    	$('#down_arrow').addClass('goto1b');

	      $('#dig_deeper').addClass('on');

	      $('#section1navitem2').addClass('on');
	      $('#section1navitem3').removeClass('on');
	    }

    });

    $('#down_arrow').click(function(){ // if #down_arrow clicked
      
			if ( $(this).hasClass("goto1a") ) {
	    	$("#content-information").text("This section 1a content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

	    	$('#up_arrow').addClass('on');
	    	$('#up_arrow').addClass('goto1');
	    	$('#up_arrow').removeClass('goto1a');

	    	$('#down_arrow').addClass('on');
	    	$('#down_arrow').removeClass('goto1a');
	    	$('#down_arrow').addClass('goto1b');

	      $('#dig_deeper').addClass('on');

	      $('#section1navitem2').addClass('on');
	      $('#section1navitem3').removeClass('on');
	    } else if ( $(this).hasClass("goto1b") ) {
	      $("#content-information").text("This section 1b content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

	    	$('#up_arrow').addClass('on');
	    	$('#up_arrow').removeClass('goto1');
	    	$('#up_arrow').addClass('goto1a');

	    	$('#down_arrow').removeClass('on');
	    	$('#down_arrow').removeClass('goto1a');
	    	$('#down_arrow').removeClass('goto1b');

	      $('#dig_deeper').addClass('on');

	      $('#section1navitem2').removeClass('on');
	      $('#section1navitem3').addClass('on');
	    }

    });

    $('#section1navitem2').click(function(){ // if #section1navitem2 clicked 
      $("#content-information").text("This section 1a content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

      $('#up_arrow').addClass('on');
      $('#up_arrow').addClass('goto1');
      $('#up_arrow').removeClass('goto1a');

      $('#down_arrow').addClass('on');
      $('#down_arrow').removeClass('goto1a');
      $('#down_arrow').addClass('goto1b');
 
      $('#dig_deeper').addClass('on');

      $('#section1navitem2').addClass('on');
      $('#section1navitem3').removeClass('on');
    });

    $('#section1navitem3').click(function(){ // if #section1navitem3 clicked 
      $("#content-information").text("This section 1b content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

      $('#up_arrow').addClass('on');
      $('#up_arrow').removeClass('goto1');
      $('#up_arrow').addClass('goto1a');

      $('#down_arrow').removeClass('on');
      $('#down_arrow').removeClass('goto1a');
      $('#down_arrow').removeClass('goto1b');

      $('#dig_deeper').addClass('on');

      $('#section1navitem2').removeClass('on');
      $('#section1navitem3').addClass('on');
    });

  $win.on("scroll", function () { // on scroll do this
  	//console.log($(this).scrollTop());

  	if ( ($(this).scrollTop() <= winvh) ){ // if scrolled to multitouch table
			$("#content-information").text("This section 1 content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

			$('#tablemenu').addClass('section1');
			$('#section1').addClass('section1');
    	$('#section1navitem').addClass('on');

    	$('#tablemenu').removeClass('section2');
    	$('#section2').addClass('section2');
    	$('#section2navitem').removeClass('on');

    	$('#tablemenu').removeClass('section3');
    	$('#section3').addClass('section3');
    	$('#section3navitem').removeClass('on');

    	$('#up_arrow').removeClass('on');
    	$('#up_arrow').removeClass('goto1');
    	$('#up_arrow').removeClass('goto1a');

    	$('#down_arrow').addClass('on');
    	$('#down_arrow').addClass('goto1a');
    	$('#down_arrow').removeClass('goto1b');

      $('#dig_deeper').addClass('on');
		}

		else if ( ($(this).scrollTop() > winvh) && ($(this).scrollTop() <= winvh*2) ){ // iff scrolled to gallery
			$("#content-information").text("This section 2 content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

			$('#tablemenu').addClass('section2');
			$('#section2').addClass('section2');
    	$('#section2navitem').addClass('on');

    	$('#tablemenu').removeClass('section1');
    	$('#section1').addClass('section2');
    	$('#section1navitem').removeClass('on');

    	$('#tablemenu').removeClass('section3');
    	$('#section3').addClass('section3');
    	$('#section3navitem').removeClass('on');

    	$('#up_arrow').removeClass('on');
    	$('#down_arrow').removeClass('on');
      $('#dig_deeper').removeClass('on');
		}

		else { // if scrolled to contact
			$("#content-information").text("This section 3 content is visible to the user but is not useful for SEO purposes it gets switched out via javascript.");

			$('#tablemenu').addClass('section3');
			$('#section3').addClass('section3');
    	$('#section3navitem').addClass('on');

    	$('#tablemenu').removeClass('section1');
    	$('#section1').addClass('section2');
    	$('#section1navitem').removeClass('on');

    	$('#tablemenu').removeClass('section2');
    	$('#section2').addClass('section2');
    	$('#section2navitem').removeClass('on');

    	$('#section1navitem').removeClass('on');

    	$('#up_arrow').removeClass('on');
    	$('#down_arrow').removeClass('on');
      $('#dig_deeper').removeClass('on');
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
