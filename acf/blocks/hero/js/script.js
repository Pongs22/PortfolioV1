/* global jQuery gsap SplitType*/
jQuery( function( $ ) {
	if ( $( window ).width() <= 1199 ) {
		const gridItems = $( '.gl-b-hero-wrapper .grid-wrapper .grid-container .grid-item' );
		const numItemsToHover = Math.floor( gridItems.length / 7 );
		function randomHover() {
			gridItems.removeClass( 'hovered' );
			for ( let i = 0; i < numItemsToHover; i++ ) {
				const randomIndex = Math.floor( Math.random() * gridItems.length );
				const randomGridItem = gridItems.eq( randomIndex );
				randomGridItem.addClass( 'hovered' );
			}
		}
		setInterval( randomHover, 1000 );
		randomHover();
	}
	new SplitType( '#split' );
	new SplitType( '#splittext' );

	gsap.to( '#split .char', {
		y: 0,
		stagger: 0.02,
		delay: 0.6,
		duration: .1,
		opacity: 1,
	} );

	gsap.to( '#splittext .char', {
		y: 0,
		stagger: 0.02,
		delay: 0.02,
		duration: .1,
		opacity: 1,
	} );

	gsap.to( '.button-description .p', {
		y: 0,
		stagger: 0.2,
		delay: 1.8,
		opacity: 1,
	} );

	gsap.to( '.button-description a', {
		y: 0,
		stagger: 0.2,
		duration: .1,
		delay: 2,
		opacity: 1,
	} );

	gsap.to( '.image-container', {
		y: 0,
		stagger: 0.2,
		delay: 2.25,
		opacity: 1,
	} );

	$(document).ready(function() {
		var lottiePlayer = $('lottie-player');
		var delayInSeconds = 2.25;
		lottiePlayer.stop();
	  
		// Delay the autoplay
		setTimeout(function() {
			$('lottie-player').get(0).play();// Set autoplay to true to start the animation
		}, delayInSeconds * 1000); // Convert seconds to milliseconds

	  });

} );
