<?php
/**
 * About Block.
 *
 * @package greydientlab
 */

?>

<?php
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$description      = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$button           = empty( get_field( 'button_name' ) ) ? 'Button Name' : get_field( 'button_name' );
$background_color = empty( get_field( 'background_color' ) ) ? '#fff' : get_field( 'background_color' ); 
?>

<div class="gl-b-about-wrapper container-fluid" data-bg ="<?php echo esc_html( $background_color ); ?>"  style="background-color : <?php echo esc_attr( $background_color ); ?>" id="aboutSection">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 content-wrapper">
				<div class="content">
					<h4 id="aboutsplit"><?php echo esc_html( $main_title ); ?></h4>
					<div class="aboutdescription"><?php echo wp_kses_post( $description ); ?></div>
					<div class="download-btn">
						<a href=""><?php echo esc_html( $button ); ?></a>

					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 image-wrapper">
				<?php if ( get_field( 'featured_image' ) ) : ?>
					<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full' ); ?>
				<?php else : ?>
					<img src="<?php echo esc_url( get_block_asset_url( 'about', 'myprofile.png' ) ); ?>">
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
