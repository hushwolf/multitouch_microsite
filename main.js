// SVG Animations for introduction
// ==========================================================================

window.onload = function () {
	var s = Snap("svg");
    var g = s.group();
    var hand = Snap.load("hand icon.svg", function (loadedFragment) {
        g.append( loadedFragment);
        g.transform("t6, -201");
        setTimeout(function(){g.animate({opacity:"0"}, 1000)}, 2000);
    });

    s.attr({viewBox: "0 0 1000 1000"});
    s.attr("preserveAspectRatio", "xMinYMin meet");
    
    setTimeout(function(){
        var c1 = s.circle(500, 250, 8).attr({
            fill: 'none',
            stroke: 'white',
            strokeWidth: 4
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

    setTimeout(function(){s.animate({opacity: 0}, 1500)}, 7200);

    setTimeout(function() {
        $('svg').remove();}, 8700);

    setTimeout(function(){
        var video = document.createElement('video');
        video.id = 'video';
        document.body.appendChild(video);
        var source = document.createElement('source');
        source.setAttribute('src', '/videos/Presenter.mp4');
        document.getElementById('video').appendChild(source);
        document.getElementById('video').style.height = "100%";
        document.getElementById('video').style.width = "50%";
        document.getElementById('video').setAttribute('style', '');
        document.getElementById('video').setAttribute('autoplay', 'autoplay');
        $('video').fadeIn(1000);
        $('video').bind('ended', function() {
            $(this).animate({opacity: 0}, 1000); })
    }, 7200);

    setTimeout(function(){
        $('video').remove();}, 14000);

    // Circular Key Features Animation
    (function () {
        if (counter == 7){
            $(document.body.createElement('svg')).attr({id: "svg2"});

        }
    })

    // Page contents
    // ========================================================================================================

    var counter = 0;
    var nav_info = [
        "",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas ipsum vitae libero tincidunt, sed rhoncus nisi rhoncus. Maecenas eget sollicitudin libero. Integer pretium fringilla euismod. </br></br>Nullam porttitor, sapien id tincidunt finibus, sapien enim pulvinar urna, sed fringilla elit sapien at tellus. Sed vitae augue quis diam feugiat gravida et eget sem. In bibendum velit a tellus aliquam vehicula. Cras ornare cursus laoreet.",
        "Piqued favour stairs it enable exeter as seeing. Remainder met improving but engrossed sincerity age. Better but length gay denied abroad are. Attachment astonished to on appearance imprudence so collecting in excellence. </br></br>Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth. ",
        "Consulted perpetual of pronounce me delivered. Too months nay end change relied who beauty wishes matter. Shew of john real park so rest we on. Ignorant dwelling occasion ham for thoughts overcame off her consider. Polite it elinor is depend. </br></br> His not get talked effect worthy barton. Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth. Certain law age brother sending amongst why covered. ",
        "Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. </br></br>Direct wished so be expect polite valley. Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put. ",
        "Perpetual sincerity out suspected necessary one but provision satisfied. Respect nothing use set waiting pursuit nay you looking. If on prevailed concluded ye abilities. Address say you new but minuter greater.</br></br> Do denied agreed in innate. </br></br> Can and middletons thoroughly themselves him. Tolerably sportsmen belonging in september no am immediate newspaper. Theirs expect dinner it pretty indeed having no of. Principle september she conveying did eat may extensive. ",
        "Must you with him from him her were more. In eldest be it result should remark vanity square. Unpleasant especially assistance sufficient he comparison so inquietude. </br></br>Branch one shy edward stairs turned has law wonder horses. Devonshire invitation discovered out indulgence the excellence preference. Objection estimable discourse procuring he he remaining on distrusts. Simplicity affronting inquietude for now sympathize age. She meant new their sex could defer child. An lose at quit to life do dull. ",
        "Style never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. </br></br>Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed. "
    ];

    var nav_links = [
    $('#touch_best'),
    $('#capactive_touch')
    ];

    //Page directing code, includes mouse scrolling events
    // =============================================================================================================

    $('#up_arrow').click(function(){
        if (counter <= 0){
            counter = 0;
            //console.log(counter);
        }
        else {
            counter -= 1;
            //console.log(counter);
            $('#nav-information').fadeOut(500, function() {
                $(this).html("<p>" + nav_info[counter] + "</p>").fadeIn(250);         
            });
        }
    });

    $('#down_arrow').click(function(){
        if (counter >= 7){
            counter = 7;
            //console.log(counter);
        }
        else {
            counter += 1;
            //console.log(counter);
            $('#nav-information').fadeOut(500, function() {
                $(this).html("<p>" + nav_info[counter] + "</p>").fadeIn(250);         
            });
        }
    });

    // Image rendering for each specific content
    // ===================================================================================================================
    $('#down_arrow, #up_arrow').click(function() {
        if (counter == 1) {
            $('#table_image').css('background-image', 'url(/images/touch.jpg)');
        }
        else if (counter == 4){
            console.log("New image will show up here");
        }
        else {
            $('#table_image').css('background-image', 'url(/images/people.png)');
        }   
    });


}



