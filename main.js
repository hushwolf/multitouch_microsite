// SVG Animations for introduction
// ==========================================================================

window.onload = function () {
    
	var s = Snap("svg");
    var g = s.group();
    var hand = Snap.load("hand icon.svg", function (loadedFragment) {
        g.append( loadedFragment);
        g.transform("s0.75, s0.75t4, -383")
        setTimeout(function(){g.animate({opacity:"0"}, 1000)}, 2000);
    });

    s.attr({viewBox: "0 0 1000 1000"});
    s.attr("preserveAspectRatio", "xMinYMin meet");
    
    setTimeout(function(){
        var c1 = s.circle(500, 250, 5).attr({
            fill: 'none',
            stroke: 'white',
            strokeWidth: 2
        });

        var c2 = c1.clone();
        var c3 = c1.clone();
        var c4 = c1.clone();
        var c5 = c1.clone();
        var c6 = c1.clone();
        var c7 = c1.clone();
        var c8 = c1.clone();
        var c9 = c1.clone();
        var c10 = c1.clone();
        var c11 = c1.clone();
        var c12 = c1.clone();

        c1.animate({
            r: 1000
        }, 6000);

        var c2_animate = function () {
            c2.animate({
                r: 1000
            }, 6000);
        };
        var c3_animate = function () {
            c3.animate({
                r: 1000
            }, 6000);
        };
        var c4_animate = function () {
            c4.animate({
                r: 1000
            }, 6000);
        };
        var c5_animate = function () {
            c5.animate({
                r: 1000
            }, 6000);
        };
        var c6_animate = function () {
            c6.animate({
                r: 1000
            }, 6000);
        };
        var c7_animate = function () {
            c7.animate({
                r: 1000
            }, 6000);
        };
        var c8_animate = function () {
            c8.animate({
                r: 1000
            }, 6000);
        };
        var c9_animate = function () {
            c9.animate({
                r: 1000
            }, 6000);
        };
        var c10_animate = function () {
            c10.animate({
                r: 1000
            }, 6000);
        };
        var c11_animate = function () {
            c11.animate({
                r: 1000
            }, 6000);
        };
        var c12_animate = function () {
            c12.animate({
                r: 1000
            }, 6000);
        };

        setTimeout(c2_animate, 250);
        setTimeout(c3_animate, 500);
        setTimeout(c4_animate, 750);
        setTimeout(c5_animate, 1000);
        setTimeout(c6_animate, 1250);
        setTimeout(c7_animate, 1500);
        setTimeout(c8_animate, 1750);
        setTimeout(c9_animate, 2000);
        setTimeout(c10_animate, 2250);
        setTimeout(c11_animate, 2500);
        setTimeout(c12_animate, 2750);

        setTimeout(function(){c1.animate({opacity:"0"}, 2500)}, 1000);
        setTimeout(function(){c2.animate({opacity:"0"}, 2600)}, 1200);
        setTimeout(function(){c3.animate({opacity:"0"}, 2700)}, 1400);
        setTimeout(function(){c4.animate({opacity:"0"}, 2800)}, 1600);
        setTimeout(function(){c5.animate({opacity:"0"}, 2900)}, 1800);
        setTimeout(function(){c6.animate({opacity:"0"}, 3000)}, 2000);
        setTimeout(function(){c7.animate({opacity:"0"}, 3100)}, 2200);
        setTimeout(function(){c8.animate({opacity:"0"}, 3200)}, 2400);
        setTimeout(function(){c9.animate({opacity:"0"}, 3300)}, 2600);
        setTimeout(function(){c10.animate({opacity:"0"}, 3400)}, 2800);
        setTimeout(function(){c11.animate({opacity:"0"}, 3500)}, 3000);
        setTimeout(function(){c12.animate({opacity:"0"}, 3600)}, 3200);

        var text1 = 'Touch the world...';
        var text2 = '...with the';
        var text3 = 'PLATFORM 55 4K P-CAP MULTITOUCH TABLE' 

        var text_animate1 = function () {  
            var svgTextElement = s.text(500, 250, text1).attr({ fill: 'white', fontSize: '35px', opacity: "0", "text-anchor": "middle"});
            setTimeout( function() {svgTextElement.animate({opacity: "1"}, 500)}, 1500);
            setTimeout(function(){svgTextElement.animate({opacity:"0"}, 500)}, 2500);
        }
        setTimeout(text_animate1, 1900);

        var text_animate2 = function () {
            var svgTextElement2 = s.text(500, 250, text2).attr({ fill: 'white', fontSize: '35px', opacity: "0", "text-anchor": "middle"});
            setTimeout( function() {svgTextElement2.animate({opacity: "1"}, 500)}, 2500);
            setTimeout(function(){svgTextElement2.animate({opacity:"0"}, 1000)}, 3500);
        }
        setTimeout(text_animate2, 2900);

        var text_animate3 = function () {
            var svgTextElement3 = s.text(500, 300, text3).attr({ fill: 'white', fontSize: '35px', opacity: "0", "text-anchor": "middle"});
            setTimeout( function() {svgTextElement3.animate({opacity: "1"}, 500)}, 2500);
            setTimeout(function(){svgTextElement3.animate({opacity:"0"}, 2000)}, 3000);
        }
        setTimeout(text_animate3, 2900);
    }, 500);

    setTimeout(function(){s.animate({opacity: 0}, 1500)}, 7700);

    setTimeout(function(){
        var video = document.createElement('video');
        video.id = 'video';
        document.body.appendChild(video);
        var source = document.createElement('source');
        source.setAttribute('src', '/videos/Presenter.mp4');
        document.getElementById('video').appendChild(source);
        document.getElementById('video').setAttribute('style', '');
        document.getElementById('video').setAttribute('autoplay', 'autoplay');
        $('video').bind('ended', function() {
            $(this).animate({opacity: 0}, 1000); })
    }, 7700);

    setTimeout(function(){
        $('svg').remove();}, 14000);

    setTimeout(function(){
        $('video').remove();}, 14500);

    // Page contents
    // ========================================================================================================

    var counter = 0;
    var MULTITOUCH_info = "The multitouch technology featured in the Platform 55 4K P-CAP is the same reliable touch technology used in popular smartphones and tablets. This technology is impervious to light interference and provides superior responsiveness and accuracy. The bezel-less surface is water and dust resistant.";

    //Page directing code and changing content
    // =============================================================================================================

    $('#up_arrow').click(function(){
        counter -= 1;
        if (counter <= 0)
        {
            counter == 0;
            $('#nav-information').fadeOut(250, function() {
                $(this).html("<p>" + MULTITOUCH_info + "</p>").fadeIn(250);
            });   
            $('#table_image').fadeOut(250, function() {
                $(this).attr('src', '/images/platform_table.png').fadeIn(250);
            });
            $('#up_arrow').fadeOut(250);
        }
        if (counter == 1) {
            $('#nav-information').fadeOut(250);
            $('#table_image').fadeOut(250, function() {
                $(this).attr('src', '/images/platform_table.png').fadeIn(250);
            });
            $('#up_arrow, #down_arrow').fadeIn(250);
            $('#dig_deeper').fadeIn(250);
        }
    });

    $('#down_arrow').click(function(){
        counter += 1;
        if (counter >= 2)
        {
            counter == 2;

            $('#table_image').fadeOut(250, function() {
                $(this).attr('src', '/images/platform_table.png').fadeIn(250);
                $('#dig_deeper').fadeOut(250);
            });
            $('#down_arrow').fadeOut(250);
        }
        if (counter == 1) {
            $('#nav-information').fadeOut(250);
            $('#table_image').fadeOut(250, function() {
                $(this).attr('src', '/images/platform_table.png').fadeIn(250);
            });
            $('#up_arrow, #down_arrow').fadeIn(250);
            $('#dig_deeper').fadeIn(250);
        }


    });
}