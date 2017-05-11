;( function( $ ) {

	'use strict';

	var el = document.getElementsByClassName('featured-slider'),
		$el = $( el );


	var init = function() {

		if ( el.length ) {
			runSlick();

			$el.find('.slick-active').next().find('.lazyload').addClass('lazypreload');

			console.info( 'Initialized homepage slick fullscreen.' );
		}

	};


	var runSlick = function() {

		$el.slick({
			autoplay: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplaySpeed: 4500,
			speed: 2500,
			fade: true,
			arrows: false,
			dots: true,
			pauseOnHover: false,
			responsive: [
				{
					breakpoint: 640,
					settings: {
						dots: false
					}
				}
			]
		}).on('afterChange', function(event, slick, currentSlide, nextSlide){
			$('.slick-active').next().find('.lazyload').addClass('lazypreload');
		});
	};

	// Remove styling
	var removeStyles = function() {
		$elImage.removeAttr('style');
		$el.removeAttr('style');
	};


	init();

} )( jQuery );




/* Gallery Slider */

;( function( $ ) {

	'use strict';

	var el = document.getElementsByClassName('gallery-slider'),
		$el = $( el );


	var init = function() {

		if ( el.length ) {
			runSlick();

			$el.find('.slick-active').next().find('.lazyload').addClass('lazypreload');

			console.info( 'Initialized slick fullscreen.' );
		}

	};


	var runSlick = function() {

		$el.slick({
			autoplay: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplaySpeed: 3500,
			speed: 2500,
			fade: true,
			arrows: false,
			dots: false,
			pauseOnHover: false
		}).on('afterChange', function(){
			$('.slick-active').next().find('.lazyload').addClass('lazypreload');
		});

	};


	// Remove styling
	var removeStyles = function() {
		$elImage.removeAttr('style');
		$el.removeAttr('style');
	};


	init();

} )( jQuery );



/* Testimonial Slider */

;( function( $ ) {

	'use strict';

	var el = document.getElementsByClassName('featured-testi'),
		$el = $( el );


	var init = function() {

		if ( el.length ) {
			runSlick();

			console.log( 'Initialized testi slider.' );
		}

	};


	var runSlick = function() {

		$el.slick({
			autoplay: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplaySpeed: 6500,
			speed: 2500,
			fade: true,
			arrows: false,
			dots: false,
			pauseOnHover: true
		});

	};

	// Remove styling
	var removeStyles = function() {
		$elImage.removeAttr('style');
		$el.removeAttr('style');
	};


	init();

} )( jQuery );