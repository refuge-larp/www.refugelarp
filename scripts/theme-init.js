/* ===================================================
 * THEME INITIALIZATION SCRIPTS
 * ========================================================== */

	var isMobile = {
	    Android: function() {
			"use strict";
	        return navigator.userAgent.match(/Android/i) ? true : false;
	    },
	    BlackBerry: function() {
			"use strict";
	        return navigator.userAgent.match(/BlackBerry/i) ? true : false;
	    },
	    iOS: function() {
			"use strict";
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true :
	            false;
	    },
	    Windows: function() {
			"use strict";
	        return navigator.userAgent.match(/IEMobile/i) ? true : false;
	    },
	    any: function() {
			"use strict";
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile
	            .iOS() || isMobile.Windows());
	    }
	};


/* ===================================================
 * WOW INIT
 * ========================================================== */

 new WOW().init();





/* ===================================================
 * YOUTUBEBACKGROUND - index.htm
 * ========================================================== */

    jQuery(function($) {

      jQuery('#background-video').YTPlayer({
        fitToBackground: true,
        videoId: 'l7X4sc_BTtw',
        pauseOnScroll: true,
		start: 3,
        callback: function() {
          var player = jQuery('#background-video').data('ytPlayer').player;
          console.log("callback", player);
        }
      });

    });



/* ===================================================
 * MORPHTEXT
 * ========================================================== */
jQuery(".morph-fade").Morphext({
    // The [in] animation type. Refer to Animate.css for a list of available animations.
    animation: "fadeIn",
    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
    separator: ",",
    // The delay between the changing of each phrase in milliseconds.
    speed: 4000,
    complete: function () {
        // Called after the entrance animation is executed.
    }
});

/* ===================================================
 * LOADING ANIMATIONS
 * ========================================================== */

jQuery(document).ready(function () {
    //jQuery('.phone').delay(1500).fadeIn(1000);
    //$('.menu-top').fadeIn(2200);
    // OR $('.menu-top').show(2200);
    // OR $('.menu-top').slideDown("slow");
});

jQuery(document).ready(function () {
    //jQuery('.text-links').delay(2000).fadeIn(1000);
    //$('.menu-top').fadeIn(2200);
    // OR $('.menu-top').show(2200);
    // OR $('.menu-top').slideDown("slow");
});
jQuery(document).ready(function () {
    jQuery('.section-top--image').delay(2000).fadeIn(5000);
    //$('.').fadeIn(2200);
    // OR $('.menu-top').show(2200);
    // OR $('.menu-top').slideDown("slow");
});



/* ===================================================
 * PARALLAX SETTINGS
 * ========================================================== */

jQuery(document).ready(function(){

	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	jQuery('.parallax-image-a').parallax("50%", 0.3);
	jQuery('.parallax-image-b').parallax("50%", 0.3);
	jQuery('.parallax-image-c').parallax("50%", 0.3);
	jQuery('.sparallax-image-d').parallax("50%", 0.3);
	jQuery('.parallax-image-e').parallax("50%", 0.3);
	jQuery('.parallax-image-f').parallax("50%", 0.3);
	jQuery('.parallax-image-g').parallax("50%", 0.3);
	jQuery('.parallax-image-h').parallax("50%", 0.3);
})




jQuery(window).scroll(function() {    
var scroll = jQuery(window).scrollTop();
 //console.log(scroll);
if (scroll >= 50) {
    //console.log('a');
    jQuery(".header__top").addClass("header__scroll");
} else {
    //console.log('a');
    jQuery(".header__top").removeClass("header__scroll");
}

});

jQuery(window).scroll(function() {    
var scroll = jQuery(window).scrollTop();
 //console.log(scroll);
if (scroll >= 50) {
    //console.log('a');
    jQuery(".header__social").addClass("header__scroll2");
} else {
    //console.log('a');
    jQuery(".header__social").removeClass("header__scroll2");
}

});





    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }


    $(document).ready(function() {

      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: '#'
      });

      $('#googlePlus').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: '#'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'i3dthemes'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: '#'
      });

    });
    
    
    
    
    
    /* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / BS-WELCOME / BS-WELCOME
 * ========================================================== */
