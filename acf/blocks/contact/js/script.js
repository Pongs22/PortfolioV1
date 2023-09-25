/* global jQuery */
( function( $ ) {
	const $hoverEffect = $( '.gl-b-contact-wrapper .contact-wrapper' );
	$( document ).ready( function() {
		$hoverEffect.hover3d( {
			sensitivity: 600,
			selector: '.contact',
		} );
	} );
}( jQuery ) );
