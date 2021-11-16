/* ===================================================
:: LIBRARY / SHARED / MENU TOP
 * ========================================================== */
// jQuery(function() {
jQuery(".menu-wrap").addClass("navbar");
jQuery(".menu").addClass("nav");
jQuery(".menu ul").addClass("dropdown-menu");

// on the first level li, make it a typical bootstrap top menu drop down
jQuery(".navbar-nav > li").each(function() {

    if (jQuery(this).children("ul").length > 0) {
        jQuery(this).addClass("dropdown nav-item");
        jQuery(this).children("a").addClass("dropdown-toggle nav-link");
        jQuery(this).children("a").attr("data-toggle", "dropdown");
        jQuery(this).children("a").html(jQuery(this).children("a").html() + '<strong class="caret"></strong>');
         jQuery(this).children("ul").addClass("dropdown-menu");

    }
});




jQuery(document).ready(function() {
    //H andles menu drop down
    jQuery('.dropdown-menu').find('form').click(function(e) {
        e.stopPropagation();
    });
    jQuery('.dropdown-menu').on('touchstart.dropdown.data-api').click(function(e) {
        e.stopPropagation();
    });
    // for drop down sub menu on mobile
  jQuery('.dropdown-submenu').on('touchstart.dropdown.data-api').click(function(e) {
        e.stopPropagation();

        if (jQuery(this).hasClass("opened")) {
          jQuery(this).removeClass("opened");
         } else {
          jQuery(this).addClass("opened")
         }
    });


});




/* ===================================================
:: LIBRARY / SHARED / MENU SIDE
 * ========================================================== */
jQuery(function() {

    var menuside_ul = jQuery('.menuside > li > ul'),
        menuside_a = jQuery('.menuside > li > a');

    menuside_ul.hide();

    menuside_a.click(function(e) {
        if (jQuery(this).attr("href") == "#") {

            e.preventDefault();
            if (!jQuery(this).hasClass('active')) {
                menuside_a.removeClass('active');
                menuside_ul.filter(':visible').slideUp('normal');
                jQuery(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                jQuery(this).removeClass('active');
                jQuery(this).next().stop(true, true).slideUp('normal');
            }
        }
    });

});

/* ===================================================
:: LIBRARY / PRO-COPMPONENTS / CAROUSELS / WELCOME = index page header
 * ========================================================== */

(function( $ ) {

	//Function to animate slider captions
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';

		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}

	//Variables on page load
	var $myCarousel = $('.bs-animate'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

	//Initialize carousel
	$myCarousel.carousel();

	//Animate captions in first slide on page load
	doAnimations($firstAnimatingElems);

	//Pause carousel
	$myCarousel.carousel('pause');


	//Other slides to be animated on carousel slide event
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});

})(jQuery);



/* ===================================================
:: YOUTUBEBACKGROUND
 * ========================================================== */

/*
 * YoutubeBackground - A wrapper for the Youtube API - Great for fullscreen background videos or just regular videos.
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 *
 * Version:  1.0.1
 *
 */

// Chain of Responsibility pattern. Creates base class that can be overridden.
if (typeof Object.create !== "function") {
  Object.create = function(obj) {
    function F() {}
    F.prototype = obj;
    return new F();
  };
}


function isPlayerPlaying() {
       // console.log("checking!");
        var player = jQuery('#background-video').data('ytPlayer').player;
        //console.log(player.getVideoLoadedFraction());
        var totalSeconds = player.getDuration();
        var secondsSoFar = player.getCurrentTime();
        var tollerance = .25;
        if (secondsSoFar >= totalSeconds - tollerance) {
          console.log(totalSeconds);
          console.log(secondsSoFar);
            console.log("yup!");
            player.seekTo(0);
            console.log('resetting to zero');
        }

    }
function checkPlayer() {
        setInterval('isPlayerPlaying()', 200);
        console.log("setting interval");

}
(function($, window, document) {
  var
    loadAPI = function loadAPI(callback) {

      // Load Youtube API
      var tag = document.createElement('script'),
      head = document.getElementsByTagName('head')[0];

      tag.src = 'https://www.youtube.com/iframe_api';

      head.appendChild(tag);

      // Clean up Tags.
      head = null;
      tag = null;

      iframeIsReady(callback);
    },
    iframeIsReady = function iframeIsReady(callback) {
      // Listen for Gobal YT player callback
      if (typeof YT === 'undefined' && typeof window.loadingPlayer === 'undefined') {
        // Prevents Ready Event from being called twice
        window.loadingPlayer = true;


        // Creates deferred so, other players know when to wait.
        window.dfd = $.Deferred();
        window.onYouTubeIframeAPIReady = function() {
          window.onYouTubeIframeAPIReady = null;
          window.dfd.resolve( "done" );
          callback();
        };
      } else if (typeof YT === 'object')  {
        callback();
      } else {
        window.dfd.done(function( name ) {
          callback();
        });
      }
    };




  // YTPlayer Object
  YTPlayer = {
    player: null,

    // Defaults
    defaults: {
      ratio: 16 / 9,
      videoId: 'l7X4sc_BTtw',
      mute: true,
      repeat: true,
      width: $(window).width(),
      playButtonClass: 'YTPlayer-play',
      pauseButtonClass: 'YTPlayer-pause',
      muteButtonClass: 'YTPlayer-mute',
      volumeUpClass: 'YTPlayer-volume-up',
      volumeDownClass: 'YTPlayer-volume-down',
      start: 3,
      pauseOnScroll: false,
      fitToBackground: true,
      playerVars: {
        modestbranding: 1,
        autoplay: 1,
        controls: 0,
        showinfo: 0,
        wmode: 'transparent',
        branding: 0,
        rel: 0,
        autohide: 0
      },
      events: null
    },

    /**
     * @function init
     * Intializes YTPlayer object
     */
    init: function init(node, userOptions) {
      var self = this;

      self.userOptions = userOptions;

      self.$body = $('body'),
      self.$node = $(node),
      self.$window = $(window);

      // Setup event defaults with the reference to this
      self.defaults.events = {
        'onReady': function(e) {
          self.onPlayerReady(e);

          // setup up pause on scroll
          if (self.options.pauseOnScroll) {
            self.pauseOnScroll();
          }

          // Callback for when finished
          if (typeof self.options.callback == 'function') {
            self.options.callback.call(this);
          }
        },
        'onStateChange': function(e) {
          if (e.data === 1) {
            self.$node.addClass('loaded');
          } else if (e.data === 0 && self.options.repeat) { // video ended and repeat option is set true
            self.player.seekTo(self.options.start);
          }
        }
      }


      self.options = $.extend(true, {}, self.defaults, self.userOptions);
      self.options.height = Math.ceil(self.options.width / self.options.ratio);
      self.ID = (new Date()).getTime();
      self.holderID = 'YTPlayer-ID-' + self.ID;

      if (self.options.fitToBackground) {
        self.createBackgroundVideo();
      } else {
        self.createContainerVideo();
      }
      // Listen for Resize Event
      self.$window.on('resize.YTplayer' + self.ID, function() {
        self.resize(self);
      });

      loadAPI(self.onYouTubeIframeAPIReady.bind(self));

      self.resize(self);

      return self;
    },


    /**
     * @function pauseOnScroll
     * Adds window events to pause video on scroll.
     */
    pauseOnScroll: function pauseOnScroll() {
      var self = this;
      self.$window.on('scroll.YTplayer' + self.ID, function() {
        var state = self.player.getPlayerState();
        if (state === 1) {
          self.player.pauseVideo();
        }
      });
      self.$window.scrollStopped(function(){
        var state = self.player.getPlayerState();
        if (state === 2) {
          self.player.playVideo();
        }
      });
    },
    /**
     * @function createContainerVideo
     * Adds HTML for video in a container
     */
    createContainerVideo: function createContainerVideo() {
      var self = this;

      /*jshint multistr: true */
      var $YTPlayerString = $('<div id="ytplayer-container' + self.ID + '" >\
                                    <div id="' + self.holderID + '" class="ytplayer-player"></div> \
                                    </div> \
                                    <div id="ytplayer-shield"></div>');

      self.$node.append($YTPlayerString);
      self.$YTPlayerString = $YTPlayerString;
      $YTPlayerString = null;
    },

    /**
     * @function createBackgroundVideo
     * Adds HTML for video background
     */
    createBackgroundVideo: function createBackgroundVideo() {
      /*jshint multistr: true */
      var self = this,
        $YTPlayerString = $('<div id="ytplayer-container' + self.ID + '" class="ytplayer-container background">\
                                    <div id="' + self.holderID + '" class="ytplayer-player"></div>\
                                    </div>\
                                    <div id="ytplayer-shield"></div>');

      self.$node.find('img').fadeOut();
      self.$node.append($YTPlayerString);
      self.$YTPlayerString = $YTPlayerString;
      $YTPlayerString = null;
    },

    /**
     * @function resize
     * Resize event to change video size
     */
    resize: function resize(self) {
      //var self = this;
      var container = $(window);

      if (!self.options.fitToBackground) {
        container = self.$node;
      }

      var width = container.width(),
        pWidth, // player width, to be defined
        height = container.height(),
        pHeight, // player height, tbd
        $YTPlayerPlayer = $('#' + self.holderID);

      // when screen aspect ratio differs from video, video must center and underlay one dimension
      if (width / self.options.ratio < height) {
        pWidth = Math.ceil(height * self.options.ratio); // get new player width
        $YTPlayerPlayer.width(pWidth).height(height).css({
          left: (width - pWidth) / 2,
          top: 0
        }); // player width is greater, offset left; reset top
      } else { // new video width < window width (gap to right)
        pHeight = Math.ceil(width / self.options.ratio); // get new player height
        $YTPlayerPlayer.width(width).height(pHeight).css({
          left: 0,
          top: 0
        }); // player height is greater, offset top; reset left
      }

      $YTPlayerPlayer = null;
      container = null;
    },

    /**
     * @function onYouTubeIframeAPIReady
     * @ params {object} YTPlayer object for access to options
     * Youtube API calls this function when the player is ready.
     */
    onYouTubeIframeAPIReady: function onYouTubeIframeAPIReady() {
      var self = this;
      console.log("yessss");
      checkPlayer();
      self.player = new window.YT.Player(self.holderID, self.options);
    },

    /**
     * @function onPlayerReady
     * @ params {event} window event from youtube player
     */
    onPlayerReady: function onPlayerReady(e) {
      if (this.options.mute) {
        e.target.mute();
      }
      e.target.playVideo();
    },

    /**
     * @function getPlayer
     * returns youtube player
     */
    getPlayer: function getPlayer() {
      return this.player;
    },

    /**
     * @function destroy
     * destroys all!
     */
    destroy: function destroy() {
      var self = this;

      self.$node
        .removeData('yt-init')
        .removeData('ytPlayer')
        .removeClass('loaded');

      self.$YTPlayerString.remove();

      $(window).off('resize.YTplayer' + self.ID);
      $(window).off('scroll.YTplayer' + self.ID);
      self.$body = null;
      self.$node = null;
      self.$YTPlayerString = null;
      self.player.destroy();
      self.player = null;
    }
  };

  // Scroll Stopped event.
  $.fn.scrollStopped = function(callback) {
    var $this = $(this), self = this;
    $this.scroll(function(){
      if ($this.data('scrollTimeout')) {
        clearTimeout($this.data('scrollTimeout'));
      }
      $this.data('scrollTimeout', setTimeout(callback,250,self));
    });
  };

  // Create plugin
  $.fn.YTPlayer = function(options) {

    return this.each(function() {
      var el = this;

      $(el).data("yt-init", true);
      var player = Object.create(YTPlayer);
      player.init(el, options);
      $.data(el, "ytPlayer", player);
    });
  };

})(jQuery, window, document);


/* ===================================================
:: MORPHTEXT
 * ========================================================== */

/*!
 * Morphext - Text Rotating Plugin for jQuery
 * https://github.com/MrSaints/Morphext
 *
 * Built on jQuery Boilerplate
 * http://jqueryboilerplate.com/
 *
 * Copyright 2014 Ian Lai and other contributors
 * Released under the MIT license
 * http://ian.mit-license.org/
 */

/*eslint-env browser */
/*global jQuery:false */
/*eslint-disable no-underscore-dangle */

(function ($) {
    "use strict";

    var pluginName = "Morphext",
        defaults = {
            animation: "bounceIn",
            separator: ",",
            speed: 2000,
            complete: $.noop
        };

    function Plugin (element, options) {
        this.element = $(element);

        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._init();
    }

    Plugin.prototype = {
        _init: function () {
            var $that = this;
            this.phrases = [];

            this.element.addClass("morphext");

            $.each(this.element.text().split(this.settings.separator), function (key, value) {
                $that.phrases.push($.trim(value));
            });

            this.index = -1;
            this.animate();
            this.start();
        },
        animate: function () {
            this.index = ++this.index % this.phrases.length;
            this.element[0].innerHTML = "<span class=\"animated " + this.settings.animation + "\">" + this.phrases[this.index] + "</span>";

            if ($.isFunction(this.settings.complete)) {
                this.settings.complete.call(this);
            }
        },
        start: function () {
            var $that = this;
            this._interval = setInterval(function () {
                $that.animate();
            }, this.settings.speed);
        },
        stop: function () {
            this._interval = clearInterval(this._interval);
        }
    };

    $.fn[pluginName] = function (options) {
        return this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin(this, options));
            }
        });
    };
})(jQuery);

/* ===================================================
:: IMAGE MIX BLEND MODES
 * ========================================================== */
/*
if('CSS' in window && 'supports' in window.CSS) {
    var support = window.CSS.supports('mix-blend-mode','overlay');
        support = support?'mix-blend-mode-overlay':'no-mix-blend-mode-overlay';
        $('html').addClass(support);
        alert(support);
}

if('CSS' in window && 'supports' in window.CSS) {
    var support = window.CSS.supports('mix-blend-mode','multiply');
        support = support?'mix-blend-mode-multiply':'no-mix-blend-mode-multiply';
        $('html').addClass(support);
                alert(support);

}
*/
/*
    if ('CSS' in window && 'supports' in window.CSS) {
    alert("yes, has support");
    } else {
    alert("no support");
        var x = document.getElementsByClassName("blendimage");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }

 	}
*/

/*
Plugin: jQuery Parallax
Version 1.1.3
Author: Ian Lunn
Twitter: @IanLunn
Author URL: http://www.ianlunn.co.uk/
Plugin URL: http://www.ianlunn.co.uk/plugins/jquery-parallax/

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

(function( $ ){
	var $window = $(window);
	var windowHeight = $window.height();

	$window.resize(function () {
		windowHeight = $window.height();
	});

	$.fn.parallax = function(xpos, speedFactor, outerHeight) {
		var $this = $(this);
		var getHeight;
		var firstTop;
		var paddingTop = 0;

		//get the starting position of each element to have parallax applied to it
		$this.each(function(){
		    firstTop = $this.offset().top;
		});

		if (outerHeight) {
			getHeight = function(jqo) {
				return jqo.outerHeight(true);
			};
		} else {
			getHeight = function(jqo) {
				return jqo.height();
			};
		}

		// setup defaults if arguments aren't specified
		if (arguments.length < 1 || xpos === null) xpos = "50%";
		if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
		if (arguments.length < 3 || outerHeight === null) outerHeight = true;

		// function to be called whenever the window is scrolled or resized
		function update(){
			var pos = $window.scrollTop();

			$this.each(function(){
				var $element = $(this);
				var top = $element.offset().top;
				var height = getHeight($element);

				// Check if totally above or totally below viewport
				if (top + height < pos || top > pos + windowHeight) {
					return;
				}

				$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
			});
		}

		$window.bind('scroll', update).resize(update);
		update();
	};
})(jQuery);



(function(){

  var imagecanvas = document.createElement('canvas');
  var imagecontext = imagecanvas.getContext('2d');

  /* uncomment do see the canvas to debug
  document.body.appendChild(imagecanvas);
  */
  window.addEventListener('load', function(){
    [].forEach.call(document.querySelectorAll('.mask'), function(img){
      var newImg = document.createElement('img');
      newImg.src = img.src;

      newImg.onload = function() {
        var width  = newImg.width;
        var height = newImg.height;

        var mask = document.createElement('img');
        mask.src = img.getAttribute('data-mask');
        mask.onload = function() {
          imagecanvas.width  = width;
          imagecanvas.height = height;

          imagecontext.drawImage(mask, 0, 0, width, height);
          imagecontext.globalCompositeOperation = 'source-atop';
          imagecontext.drawImage(img, 0, 0);

          img.src = imagecanvas.toDataURL();
        }
      }
    });
  }, false);

})();


/*!

 =========================================================
 * Material Kit PRO - v2.1.1
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit-pro
 * Copyright 2018 Creative Tim (http://www.creative-tim.com)

 * Designed by www.invisionapp.com Coded by www.creative-tim.com

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */

materialKit = {
  misc: {
    navbar_menu_visible: 0,
    window_width: 0,
    transparent: true,
    colored_shadows: true,
    fixedTop: false,
    navbar_initialized: false,
    isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
  },

  checkScrollForParallax: function() {
    oVal = ($(window).scrollTop() / 3);
    big_image.css({
      'transform': 'translate3d(0,' + oVal + 'px,0)',
      '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
    });
  },

  initFormExtendedDatetimepickers: function() {
    $('.datetimepicker').datetimepicker({
      icons: {
        time: "far fa-clock",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });

    $('.datepicker').datetimepicker({
      format: 'MM/DD/YYYY',
      icons: {
        time: "far fa-clock",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });

    $('.timepicker').datetimepicker({
      //          format: 'H:mm',    // use this format if you want the 24hours timepicker
      format: 'h:mm A', //use this format if you want the 12hours timpiecker with AM/PM toggle
      icons: {
        time: "far fa-clock",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });
  },


  initSliders: function() {
    // Sliders for demo purpose
    var slider = document.getElementById('sliderRegular');

    noUiSlider.create(slider, {
      start: 40,
      connect: [true, false],
      range: {
        min: 0,
        max: 100
      }
    });

    var slider2 = document.getElementById('sliderDouble');

    noUiSlider.create(slider2, {
      start: [20, 60],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    });
  },


  initColoredShadows: function() {
    if (materialKit.misc.colored_shadows == true) {
      if (!(BrowserDetect.browser == 'Explorer' && BrowserDetect.version <= 12)) {
        $('.card:not([data-colored-shadow="false"]) .card-header-image').each(function() {
          $card_img = $(this);

          is_on_dark_screen = $(this).closest('.section-dark, .section-image').length;

          // we block the generator of the colored shadows on dark sections, because they are not natural
          if (is_on_dark_screen == 0) {
            var img_source = $card_img.find('img').attr('src');
            var is_rotating = $card_img.closest('.card-rotate').length == 1 ? true : false;
            var $append_div = $card_img;

            var colored_shadow_div = $('<div class="colored-shadow"/>');

            if (is_rotating) {
              var card_image_height = $card_img.height();
              var card_image_width = $card_img.width();

              $(this).find('.back').css({
                'height': card_image_height + 'px',
                'width': card_image_width + 'px'
              });
              $append_div = $card_img.find('.front');
            }

            colored_shadow_div.css({
              'background-image': 'url(' + img_source + ')'
            }).appendTo($append_div);

            if ($card_img.width() > 700) {
              colored_shadow_div.addClass('colored-shadow-big');
            }

            setTimeout(function() {
              colored_shadow_div.css('opacity', 1);
            }, 200);
          }

        });
      }
    }
  },

  initRotateCard: debounce(function() {
    $('.rotating-card-container .card-rotate').each(function() {
      var $this = $(this);

      var card_width = $(this).parent().width();
      var card_height = $(this).find('.front .card-body').outerHeight();

      $this.parent().css({
        'margin-bottom': 30 + 'px'
      });

      $this.find('.front').css({
        'width': card_width + 'px',
      });

      $this.find('.back').css({
        'width': card_width + 'px',
      });
    });
  }, 50),

  checkScrollForTransparentNavbar: debounce(function() {
    if ($(document).scrollTop() > scroll_distance) {
      if (materialKit.misc.transparent) {
        materialKit.misc.transparent = false;
        $('.navbar-color-on-scroll').removeClass('navbar-transparent');
      }
    } else {
      if (!materialKit.misc.transparent) {
        materialKit.misc.transparent = true;
        $('.navbar-color-on-scroll').addClass('navbar-transparent');
      }
    }
  }, 17)
};

var big_image;

$(document).ready(function() {
  BrowserDetect.init();

  // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
  $('body').bootstrapMaterialDesign();

  window_width = $(window).width();

  $navbar = $('.navbar[color-on-scroll]');
  scroll_distance = $navbar.attr('color-on-scroll') || 500;

  $navbar_collapse = $('.navbar').find('.navbar-collapse');

  // Multilevel Dropdown menu

  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    var $el = $(this);
    var $parent = $(this).offsetParent(".dropdown-menu");
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');

    $(this).closest("a").toggleClass('open');

    $(this).parents('a.dropdown-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-menu .show').removeClass("show");
    });

    if (!$parent.parent().hasClass('navbar-nav')) {
      $el.next().css({
        "top": $el[0].offsetTop,
        "left": $parent.outerWidth() - 4
      });
    }

    return false;
  });

  //  Activate the Tooltips
  $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

  // FileInput
  $('.form-file-simple .inputFileVisible').click(function() {
    $(this).siblings('.inputFileHidden').trigger('click');
  });

  $('.form-file-simple .inputFileHidden').change(function() {
    var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
    $(this).siblings('.inputFileVisible').val(filename);
  });

  $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
    $(this).parent().parent().find('.inputFileHidden').trigger('click');
    $(this).parent().parent().addClass('is-focused');
  });

  $('.form-file-multiple .inputFileHidden').change(function() {
    var names = '';
    for (var i = 0; i < $(this).get(0).files.length; ++i) {
      if (i < $(this).get(0).files.length - 1) {
        names += $(this).get(0).files.item(i).name + ',';
      } else {
        names += $(this).get(0).files.item(i).name;
      }
    }
    $(this).siblings('.input-group').find('.inputFileVisible').val(names);
  });

  $('.form-file-multiple .btn').on('focus', function() {
    $(this).parent().siblings().trigger('focus');
  });

  $('.form-file-multiple .btn').on('focusout', function() {
    $(this).parent().siblings().trigger('focusout');
  });

  // Activate bootstrap-select
  if ($(".selectpicker").length != 0) {
    $(".selectpicker").selectpicker();
  }

  // Activate Popovers
  $('[data-toggle="popover"]').popover();

  // Active Carousel
  $('.carousel').carousel();

  //Activate tags
  // we style the badges with our colors
  var tagClass = $('.tagsinput').data('color');

  if ($(".tagsinput").length != 0) {
    $('.tagsinput').tagsinput();
  }

  $('.bootstrap-tagsinput').addClass('' + tagClass + '-badge');

  if ($('.navbar-color-on-scroll').length != 0) {
    $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
  }

  materialKit.checkScrollForTransparentNavbar();

  if (window_width >= 768) {
    big_image = $('.page-header[data-parallax="true"]');
    if (big_image.length != 0) {
      $(window).on('scroll', materialKit.checkScrollForParallax);
    }

  }

  //initialise rotating cards
  materialKit.initRotateCard();

  //initialise colored shadow
  materialKit.initColoredShadows();
});

$(window).on('resize', function() {
  materialKit.initRotateCard();
});

$(document).on('click', '.card-rotate .btn-rotate', function() {
  var $rotating_card_container = $(this).closest('.rotating-card-container');

  if ($rotating_card_container.hasClass('hover')) {
    $rotating_card_container.removeClass('hover');
  } else {
    $rotating_card_container.addClass('hover');
  }
});

$(document).on('click', '.navbar-toggler', function() {
  $toggle = $(this);

  if (materialKit.misc.navbar_menu_visible == 1) {
    $('html').removeClass('nav-open');
    materialKit.misc.navbar_menu_visible = 0;
    $('#bodyClick').remove();
    setTimeout(function() {
      $toggle.removeClass('toggled');
    }, 550);

    $('html').removeClass('nav-open-absolute');
  } else {
    setTimeout(function() {
      $toggle.addClass('toggled');
    }, 580);


    div = '<div id="bodyClick"></div>';
    $(div).appendTo("body").click(function() {
      $('html').removeClass('nav-open');

      if ($('nav').hasClass('navbar-absolute')) {
        $('html').removeClass('nav-open-absolute');
      }
      materialKit.misc.navbar_menu_visible = 0;
      $('#bodyClick').remove();
      setTimeout(function() {
        $toggle.removeClass('toggled');
      }, 550);
    });

    if ($('nav').hasClass('navbar-absolute')) {
      $('html').addClass('nav-open-absolute');
    }

    $('html').addClass('nav-open');
    materialKit.misc.navbar_menu_visible = 1;
  }
});

// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    }, wait);
    if (immediate && !timeout) func.apply(context, args);
  };
};

var BrowserDetect = {
  init: function() {
    this.browser = this.searchString(this.dataBrowser) || "Other";
    this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
  },
  searchString: function(data) {
    for (var i = 0; i < data.length; i++) {
      var dataString = data[i].string;
      this.versionSearchString = data[i].subString;

      if (dataString.indexOf(data[i].subString) !== -1) {
        return data[i].identity;
      }
    }
  },
  searchVersion: function(dataString) {
    var index = dataString.indexOf(this.versionSearchString);
    if (index === -1) {
      return;
    }

    var rv = dataString.indexOf("rv:");
    if (this.versionSearchString === "Trident" && rv !== -1) {
      return parseFloat(dataString.substring(rv + 3));
    } else {
      return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
    }
  },

  dataBrowser: [{
      string: navigator.userAgent,
      subString: "Chrome",
      identity: "Chrome"
    },
    {
      string: navigator.userAgent,
      subString: "MSIE",
      identity: "Explorer"
    },
    {
      string: navigator.userAgent,
      subString: "Trident",
      identity: "Explorer"
    },
    {
      string: navigator.userAgent,
      subString: "Firefox",
      identity: "Firefox"
    },
    {
      string: navigator.userAgent,
      subString: "Safari",
      identity: "Safari"
    },
    {
      string: navigator.userAgent,
      subString: "Opera",
      identity: "Opera"
    }
  ]

};

var better_browser = '<div class="container"><div class="better-browser row"><div class="col-md-2"></div><div class="col-md-8"><h3>We are sorry but it looks like your Browser doesn\'t support our website Features. In order to get the full experience please download a new version of your favourite browser.</h3></div><div class="col-md-2"></div><br><div class="col-md-4"><a href="https://www.mozilla.org/ro/firefox/new/" class="btn btn-warning">Mozilla</a><br></div><div class="col-md-4"><a href="https://www.google.com/chrome/browser/desktop/index.html" class="btn ">Chrome</a><br></div><div class="col-md-4"><a href="http://windows.microsoft.com/en-us/internet-explorer/ie-11-worldwide-languages" class="btn">Internet Explorer</a><br></div><br><br><h4>Thank you!</h4></div></div>';









    //-------------testimonial-6,7,8 carousel-------------
    $(".comncarousel").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });


    //*----------carousel-1--------------
    $(".carousel1_wrapper").owlCarousel({
        items: 6,
        loop: true,
        dots: true,
        margin: 30,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });


    //*---------carousel-2----------
    $(".carousel2_wrapper").owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 30,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            }
        }
    });


    //*---------carousel-3--------
    $(".carousel3_wrapper").owlCarousel({
        items: 3,
        loop: true,
        dots: true,
        margin: 30,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,

            },
            992: {
                items: 3,
            }
        }
    });


    //*----carousel-4--------
    $(".carousel4_wrapper").owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        margin: 30,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: false,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,

            },
            992: {
                items: 3,
            }
        }
    });


    //*---------carousel-5---------
    $(".carousel5_wrapper").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });


    //*-------carousel-6--------
    $(".carousel6_wrapper").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });


    //*-------carousel-6--------
    $(".carousel7_wrapper").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: false,
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });


    //*----carousel-14--------
    $(".carousel8_wrapper").owlCarousel({
        items: 5,
        loop: true,
        dots: false,
        margin: 30,
        stagePadding: 10,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });

