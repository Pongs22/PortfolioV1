/* global jQuery gsap SplitType*/
jQuery( function( ) {
	new SplitType( '#aboutsplit' );
	gsap.to( '#aboutsplit .char', {
		y: 0,
		stagger: 0.02,
		delay: 0.02,
		duration: .1,
		opacity: 1,
		scrub: 1,
		scrollTrigger: {
			trigger: '.gl-b-about-wrapper',
			start: 'top+=75px center',
			end: 'top+=85px center',
			stagger: 0.2,

		},
	} );

	gsap.to( '.aboutdescription', {
		y: 0,
		stagger: 0.5,
		delay: 0.75,
		opacity: 1,
		scrub: 1,
		scrollTrigger: {
			trigger: '.gl-b-about-wrapper',
			start: 'top+=75px center',
			end: 'top+=85px center',
		},
	} );

	gsap.to( '.download-btn', {
		y: 0,
		stagger: 0.5,
		delay: 1,
		opacity: 1,
		scrub: 1,
		scrollTrigger: {
			trigger: '.gl-b-about-wrapper',
			start: 'top+=75px center',
			end: 'top+=85px center',
		},
	} );
} );
