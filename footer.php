<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jm-portfolio
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container-fluid footer">
		<div class="container align-items-center">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4 footer-logo order-1">
					<?php
					the_custom_logo(); 
					?>
					<div class="title">
						<h6>JUN MAR MANUEL</h6>
						<p>Front End Developer</p>
					</div>

				</div>
				<div class="col-12 col-md-12 col-lg-4 copyright order-3 order-lg-2">
					<p>Built and Designed by JM &copy; 2023 </p>
				</div>
				<div class="col-12 col-md-6 col-lg-4 social-media order-2 order-lg-3">
				<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'socials-footer',
									'menu_id'        => 'socials-footer',
								)
							);
							?>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
