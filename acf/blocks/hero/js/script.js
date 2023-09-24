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
		stagger: 0.5,
		delay: 1.8,
		duration: .1,
		opacity: 1,
	} );

	gsap.to( '.button-description a', {
		y: 0,
		stagger: 0.5,
		delay: 2,
		duration: .1,
		opacity: 1,
	} );
} );
