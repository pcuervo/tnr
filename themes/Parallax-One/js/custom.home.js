/* slider [begin] */
var slideWidth;
var slideCount;
var slideHeight = 0;
var sliderUlHeight = 0;
var marginTop = 0;

/* LATEST NEWS */
jQuery(document).ready(function () {
    parallax_one_latest_news();
    jQuery('button.control_prev').click(function () {
        parallax_one_moveBottom();
    });
    jQuery('button.control_next').click(function () {
         parallax_one_moveTop();
    });
});

jQuery(window).resize(function() {

    /* maximum height for slides */
    slideWidth;
    slideCount;
    slideHeight = 0;
    sliderUlHeight = 0;
    marginTop = 0;

    jQuery('#parallax_slider li').css('height','auto').each(function(){
        if ( slideHeight < jQuery(this).height() ){
            slideHeight = jQuery(this).height();
        }
    });

    slideCount = jQuery('#parallax_slider ul li').length;
    sliderUlHeight = slideCount * slideHeight;

    /* set height */
    jQuery('#parallax_slider').css({ width: slideWidth, height: slideHeight });
    jQuery('#parallax_slider ul li ').css({ height: slideHeight});
    jQuery('#parallax_slider ul').css({ height: sliderUlHeight, top: marginTop });

    if( jQuery('.control_next').hasClass('fade-btn') ){
        jQuery('.control_next').removeClass('fade-btn');
    }
    if( !jQuery('.control_prev').hasClass('fade-btn') ){
        jQuery('.control_prev').addClass('fade-btn');
    }

});

/* latest news [start] */
function parallax_one_latest_news() {

     /* maximum height for slides */
    slideHeight = 0;

    jQuery('#parallax_slider li').css('height','auto').each(function(){
        if ( slideHeight < jQuery(this).height() ){
            slideHeight = jQuery(this).height();
        }
    });

    slideCount = jQuery('#parallax_slider ul li').length;
    sliderUlHeight = slideCount * slideHeight;

    /* set height */
    jQuery('#parallax_slider').css({ width: slideWidth, height: slideHeight });
    jQuery('#parallax_slider ul li ').css({ height: slideHeight});
    jQuery('#parallax_slider ul').css({ height: sliderUlHeight});

}

function parallax_one_moveTop() {
    if ( marginTop - slideHeight >= - sliderUlHeight + slideHeight ){
        marginTop = marginTop - slideHeight;
        jQuery('#parallax_slider ul').animate({
            top: marginTop
        }, 400 );
        if( marginTop == - slideHeight * (slideCount-1) ) {
            jQuery('.control_next').addClass('fade-btn');
        }
        if( jQuery('.control_prev').hasClass('fade-btn') ){
            jQuery('.control_prev').removeClass('fade-btn');
        }
    }
};

function parallax_one_moveBottom() {
    if ( marginTop + slideHeight <= 0 ){
        marginTop = marginTop + slideHeight;
        jQuery('#parallax_slider ul').animate({
            top: marginTop
        }, 400 );
        if( marginTop == 0 ) {
            jQuery('.control_prev').addClass('fade-btn');
        }
        if( jQuery('.control_next').hasClass('fade-btn') ){
            jQuery('.control_next').removeClass('fade-btn');
        }
    }
};
/* latest news [end] */

/* PRE LOADER */
jQuery(window).load(function () {
    "use strict";
    jQuery(".status").fadeOut();
    jQuery(".preloader").delay(1000).fadeOut("slow");
});

jQuery(window).resize(function() {
    "use strict";
    var ww = jQuery(window).width();
    /* COLLAPSE NAVIGATION ON MOBILE AFTER CLICKING ON LINK */
    if (ww < 480) {
        jQuery('.sticky-navigation a').on('click', function() {
            jQuery(".navbar-toggle").click();
        });
    }
});


jQuery(window).load(function() {
    "use strict";
    /* useful for Our team section */
    jQuery('.team-member-wrap .team-member-box').each(function(){
        var thisHeight = jQuery(this).find('.member-pic').height();
        jQuery(this).find('.member-details').height(thisHeight);
    });
});


var home_window_width_old;
jQuery(document).ready(function(){
    home_window_width_old = jQuery('.container').width();
    if( home_window_width_old < 750  ){
        jQuery('.our_services_wrap_piterest').parallaxonegridpinterest({columns: 1,selector: '.service-box'});
        jQuery('.happy_customers_wrap_piterest').parallaxonegridpinterest({columns: 1,selector: '.testimonials-box'});
    } else {
        jQuery('.our_services_wrap_piterest').parallaxonegridpinterest({columns: 3,selector: '.service-box'});
        jQuery('.happy_customers_wrap_piterest').parallaxonegridpinterest({columns: 3,selector: '.testimonials-box'});
    }
});

jQuery(window).resize(function() {
    if( home_window_width_old != jQuery('.container').outerWidth() ){
        home_window_width_old = jQuery('.container').outerWidth();
        if( home_window_width_old < 750  ){
            jQuery('.our_services_wrap_piterest').parallaxonegridpinterest({columns: 1,selector: '.service-box'});
            jQuery('.happy_customers_wrap_piterest').parallaxonegridpinterest({columns: 1,selector: '.testimonials-box'});
        } else {
            jQuery('.our_services_wrap_piterest').parallaxonegridpinterest({columns: 3,selector: '.service-box'});
            jQuery('.happy_customers_wrap_piterest').parallaxonegridpinterest({columns: 3,selector: '.testimonials-box'});
        }
    }
});


/*=============================
========= MAP OVERLAY =========
===============================*/
jQuery(document).ready(function(){
    jQuery('html').click(function(event) {
        jQuery('.parallax_one_map_overlay').show();
    });

    jQuery('#container-fluid').click(function(event){
        event.stopPropagation();
    });

    jQuery('.parallax_one_map_overlay').on('click',function(event){
        jQuery(this).hide();
    })
});


jQuery(document).ready(function() {
    "use strict";
    mainNav();
});

jQuery(document).ready(function(){
    if(jQuery('.overlay-layer-nav').hasClass('sticky-navigation-open')){
        $parallax_one_header_height = jQuery('.navbar').height();
        $parallax_one_header_height+=84;
        jQuery('.header .overlay-layer').css('padding-top',$parallax_one_header_height);
    }
});




/********************************************
*** FITVIDS
*********************************************/

!function(t){"use strict";t.fn.fitVids=function(e){var i={customSelector:null,ignore:null};if(!document.getElementById("fit-vids-style")){var r=document.head||document.getElementsByTagName("head")[0],a=".fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}",d=document.createElement("div");d.innerHTML='<p>x</p><style id="fit-vids-style">'+a+"</style>",r.appendChild(d.childNodes[1])}return e&&t.extend(i,e),this.each(function(){var e=['iframe[src*="player.vimeo.com"]','iframe[src*="youtube.com"]','iframe[src*="youtube-nocookie.com"]','iframe[src*="kickstarter.com"][src*="video.html"]',"object","embed"];i.customSelector&&e.push(i.customSelector);var r=".fitvidsignore";i.ignore&&(r=r+", "+i.ignore);var a=t(this).find(e.join(","));a=a.not("object object"),a=a.not(r),a.each(function(){var e=t(this);if(!(e.parents(r).length>0||"embed"===this.tagName.toLowerCase()&&e.parent("object").length||e.parent(".fluid-width-video-wrapper").length)){e.css("height")||e.css("width")||!isNaN(e.attr("height"))&&!isNaN(e.attr("width"))||(e.attr("height",9),e.attr("width",16));var i="object"===this.tagName.toLowerCase()||e.attr("height")&&!isNaN(parseInt(e.attr("height"),10))?parseInt(e.attr("height"),10):e.height(),a=isNaN(parseInt(e.attr("width"),10))?e.width():parseInt(e.attr("width"),10),d=i/a;if(!e.attr("name")){var o="fitvid"+t.fn.fitVids._count;e.attr("name",o),t.fn.fitVids._count++}e.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",100*d+"%"),e.removeAttr("height").removeAttr("width")}})})},t.fn.fitVids._count=0}(window.jQuery||window.Zepto);