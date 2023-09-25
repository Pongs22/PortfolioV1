/* global jQuery gsap ScrollTrigger*/
( function( $ ) {
	/* Background transition*/
	$( '.gl-b-projects-wrapper' ).addClass( 'color' );
	$( '.gl-b-about-wrapper ' ).addClass( 'color' );

	gsap.utils.toArray( '.color' ).forEach( function( elem ) {
		const color = elem.getAttribute( 'data-bg' );

		ScrollTrigger.create( {
			trigger: elem,
			start: 'top+=100 50%',
			end: 'bottom+=150 50%',
			onEnter: () => gsap.to( '.gl-b-about-wrapper, .gl-b-projects-wrapper', { backgroundColor: color } ),
			onEnterBack: () => gsap.to( '.gl-b-about-wrapper, .gl-b-projects-wrapper', { backgroundColor: color } ),
			scrub: 1,
		} );
	} );
	/* custom navbar */
	$( document ).ready( function() {
		$( '#btnWorks' ).click( function() {
			scrollToSection( '#worksSection' );
		} );
		$( '#btnContact' ).click( function() {
			scrollToSection( '#contactSection' );
		} );
		$( '#btnAbout' ).click( function() {
			scrollToSection( '#aboutSection' );
		} );
		function scrollToSection( sectionId ) {
			$( 'html, body' ).animate( {
				scrollTop: $( sectionId ).offset().top,
			}, 100 );
		}
	} );
}( jQuery ) );
