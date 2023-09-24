/* global jQuery gsap SplitType*/
jQuery(function ($) {
	if ($(window).width() <= 1199) {

	

	// Calculate approximately one-third of the grid items
	const gridItems = $('.gl-b-hero-wrapper .grid-wrapper .grid-container .grid-item');
	const numItemsToHover = Math.floor(gridItems.length / 7);

	// Function to randomly hover over grid items
	function randomHover() {
		gridItems.removeClass('hovered'); // Reset previously hovered items

		for (let i = 0; i < numItemsToHover; i++) {
			const randomIndex = Math.floor(Math.random() * gridItems.length);
			const randomGridItem = gridItems.eq(randomIndex);
			randomGridItem.addClass('hovered');
		}
	}

	// Set an interval to trigger random hover effects every 2 seconds
	setInterval(randomHover, 1000);

	// Initial random hover
	randomHover();
}
	const myText = new SplitType( '#split' )
	const myText2 = new SplitType( '#splittext' )
	  
	  gsap.to('#split .char', {
		y:0,
		stagger: 0.02,
		delay: 0.6,
		duration: .1,
		opacity: 1,
	  });

	  gsap.to('#splittext .char', {
		y:0,
		stagger: 0.02,
		delay: 0.02,
		duration: .1,
		opacity: 1,
	  });

	  gsap.to('.button-description .p', {
		y:0,
		stagger: 0.5,
		delay: 1.8,
		duration: .1,
		opacity: 1,
	  });

	  gsap.to('.button-description a', {
		y:0,
		stagger: 0.5,
		delay: 2,
		duration: .1,
		opacity: 1,
	  });
});

