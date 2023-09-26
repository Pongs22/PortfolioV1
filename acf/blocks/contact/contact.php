<?php
/**
 * Contact Block.
 *
 * @package greydientlab
 */

?>

<?php
$main_title  = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$button      = empty( get_field( 'button_name' ) ) ? 'Button Name' : get_field( 'button_name' );
?>

<div class="gl-b-contact-wrapper" id="contactSection">
	<div class="container contact-wrapper">
		<div class="row mx-auto justify-content-center contact">
			<div class="col-12 col-lg-10 body-wrapper">
				<div class="row body-container">
					<div class="col-8">
						<h2><?php echo esc_html( $main_title ); ?></h2>
						<p><?php echo esc_html( $description ); ?></p>
					</div>
					<div class="col-4 button-wrapper">
						<a href="#"><?php echo esc_html( $button ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="featured-image-wrapper">
			<?php if ( get_field( 'featured_image' ) ) : ?>
				<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full' ); ?>
			<?php else : ?>
				<img src="<?php echo esc_url( get_block_asset_url( 'contact', 'footer-featured-image.png' ) ); ?>" alt="">
			<?php endif; ?>
		</div>
	</div>
</div>
