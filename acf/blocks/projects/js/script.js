/* global jQuery gsap SplitType*/
jQuery( function( $ ) {
	const tl = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.gl-b-projects-wrapper',
				start: 'center-=125px center',
				end: 'center-=75px center',
				scrub: 2,
			},
		} );
	tl.from( '.orange-circ', { x: '30%', duration: .25 } )
		.from( '.blue-circle', { y: '30%', duration: .25 } )
		.from( '.blue-dots', { y: '-10%', duration: .25 } )
		.from( '.white-dia', { x: '-30%', duration: .25 } )
		.from( '.orange-dia', { y: '30%', duration: .25 } )
		.from( '.white-dots', { y: '30%', duration: .25 } );

	gsap.to( '.white-dots', {
		opacity: 1,
		scrollTrigger: {
			trigger: '.gl-b-projects-wrapper',
			start: 'center-=125px center',
			end: 'center-=75px center',
			stagger: 0.02,
			scrub: 1,
		},
	} );

	gsap.to( '.blue-dots', {
		opacity: 1,
		scrollTrigger: {
			trigger: '.gl-b-projects-wrapper',
			start: 'center-=125px center',
			end: 'center-=75px center',
			stagger: 0.2,
			scrub: 1,
		},
	} );

	gsap.to( '.orange-circ', {
		opacity: 1,
		scrollTrigger: {
			trigger: '.gl-b-projects-wrapper',
			start: 'center-=125px center',
			end: 'center-=75px center',
			stagger: 0.2,
			scrub: 1,
		},
	} );

	gsap.to( '.blue-circle', {
		opacity: 1,
		scrollTrigger: {
			trigger: '.gl-b-projects-wrapper',
			start: 'center-=125px center',
			end: 'center-=75px center',
			stagger: 0.02,
			scrub: 1,
		},
	} );

	gsap.to( '.white-dia', {
		opacity: 1,
		scrollTrigger: {
			trigger: '.gl-b-projects-wrapper',
			start: 'center-=125px center',
			end: 'center-=75px center',
			stagger: 0.4,
			scrub: 1,
		},
	} );

	gsap.to( '.orange-dia', {
		opacity: 1,
		scrollTrigger: {
			trigger: '.gl-b-projects-wrapper',
			start: 'center-=125px center',
			end: 'center-=75px center',
			stagger: 0.4,
			scrub: 1,
		},
	} );

	new SplitType( '#projectsplit' );

	gsap.to( '#projectsplit .char', {
		y: 0,
		stagger: 0.02,
		delay: 0.02,
		duration: .1,
		opacity: 1,
		scrollTrigger: {
			trigger: '.gl-b-projects-wrapper',
			start: 'top-=75px center',
			stagger: 0.2,
		},
	} );

	gsap.to( '.project-header p', {
		y: 0,
		stagger: 0.5,
		delay: 0.75,
		duration: .1,
		opacity: 1,
		scrollTrigger: {
			trigger: '.gl-b-projects-wrapper',
			start: 'top-=75px center',
		},
	} );
} );
