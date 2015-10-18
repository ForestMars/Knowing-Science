/*Theme    : assan
 * Author  : Design_mylife
 * Version : V1.8
 *
 */
jQuery(document).ready(function(){
   jQuery(".col-md-4 .service .triptych a").removeAttr("href");
});
 jQuery( window ).resize(function() {
    jQuery(".navbar-collapse").css({ maxHeight: jQuery(window).height() - jQuery(".navbar-header").height() + "px" });
});
//sticky header on scroll
jQuery(document).ready(function () {
    jQuery(window).load(function () {
        jQuery(".sticky").sticky({topSpacing: 0});
    });
});

/* ==============================================
 WOW plugin triggers animate.css on scroll
 =============================================== */
jQuery(document).ready(function () {
    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 100, // distance to the element when triggering the animation (default is 0)
                mobile: false        // trigger animations on mobile devices (true is default)
            }
    );
    wow.init();
});


//parallax
jQuery(document).ready(function () {
    jQuery(window).stellar({
        horizontalScrolling: false,
        responsive: true/*,
         scrollProperty: 'scroll',
         parallaxElements: false,
         horizontalScrolling: false,
         horizontalOffset: 0,
         verticalOffset: 0*/
    });
});

//owl carousel for work
jQuery(document).ready(function () {
    jQuery("#work-carousel").owlCarousel({
        // Most important owl features
        items: 4,
        itemsCustom: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 6000
    });

});


//owl carousel for news
jQuery(document).ready(function () {

    jQuery("#news-carousel").owlCarousel({
        // Most important owl features
        items: 2,
        itemsCustom: false,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});



//owl carousel for testimonials
jQuery(document).ready(function () {

    jQuery("#testi-carousel").owlCarousel({
        // Most important owl features
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});
//featured work carousel slider

jQuery(document).ready(function () {

    jQuery("#featured-work").owlCarousel({
        autoPlay: 5000, //Set AutoPlay to 3 seconds
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        pagination: false,
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        stopOnHover: true

    });

});
/* ==============================================
 Counter Up
 =============================================== */
jQuery(document).ready(function (jQuery) {
    jQuery('.counter').counterUp({
        delay: 100,
        time: 800
    });
});







//MAGNIFIC POPUP
jQuery(document).ready(function () {
jQuery('.show-image').magnificPopup({type: 'image'});
});

/* ==============================================
 flex slider
 =============================================== */

jQuery(document).ready(function () {
jQuery('.main-flex-slider,.testi-slide').flexslider({
    slideshowSpeed: 5000,
    directionNav: false,
    animation: "fade"
});
});
//OWL CAROUSEL
jQuery(document).ready(function () {
jQuery("#clients-slider").owlCarousel({
    autoPlay: 3000,
    pagination: false,
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [991, 2]
});
});


/*========tooltip and popovers====*/
jQuery(document).ready(function () {
jQuery("[data-toggle=popover]").popover();

jQuery("[data-toggle=tooltip]").tooltip();
});



/* ==============================================
 mb.YTPlayer
 =============================================== */
jQuery(document).ready(function () {
jQuery(function () {
    jQuery(".player").mb_YTPlayer();
});
});


//transparent header

jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.transparent-header').css("background", "#252525");
        } else {
            jQuery('.transparent-header').css("background", "transparent");
        }
    });
});

 //Search
    (function () {

        jQuery('.top-search').on('click', function() {
            jQuery('.search').fadeIn(500, function() {
              jQuery(this).toggleClass('search-toggle');
            });
        });

        jQuery('.search-close').on('click', function() {
            jQuery('.search').fadeOut(500, function() {
                jQuery(this).removeClass('search-toggle');
            });
        });

    }());
