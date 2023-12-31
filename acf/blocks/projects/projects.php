<?php
/**
 * Projects Template.
 *
 * @package jm-portfolio
 */

?>

<?php
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$description      = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$background_color = empty( get_field( 'background_color' ) ) ? '#fff' : get_field( 'background_color' ); 
?>

<div class="gl-b-projects-wrapper" data-bg ="<?php echo esc_html( $background_color ); ?>"  style="background-color : <?php echo esc_attr( $background_color ); ?> " id="worksSection">
	<div class="container-fluid">

		<img src="<?php echo esc_url( get_block_asset_url( 'projects', 'white-dots.svg' ) ); ?>" class="bgimage white-dots">
		<img src="<?php echo esc_url( get_block_asset_url( 'projects', 'blue-dots.svg' ) ); ?>" class="bgimage blue-dots">
		<img src="<?php echo esc_url( get_block_asset_url( 'projects', 'blue-circle.svg' ) ); ?>" class="bgimage blue-circle">
		<img src="<?php echo esc_url( get_block_asset_url( 'projects', 'white-circles.svg' ) ); ?>" class="bgimage white-circle">
		<img src="<?php echo esc_url( get_block_asset_url( 'projects', 'orange-circ.png' ) ); ?>" class="bgimage orange-circ">
		<img src="<?php echo esc_url( get_block_asset_url( 'projects', 'orange-dia.svg' ) ); ?>" class="bgimage orange-dia">
		<img src="<?php echo esc_url( get_block_asset_url( 'projects', 'white-dia.svg' ) ); ?>" class="bgimage white-dia">

		<div class="container">
			<div class="row">
				<div class="col-12 project-header">
					<div id="projectsplit"><?php echo wp_kses_post( $main_title ); ?></div>
					<p><?php echo esc_html( $description ); ?></p>
				</div>
				<div class="col-12 project-body">
					<div class="row">
						<?php if ( have_rows( 'cards' ) ) : ?>

							<?php while ( have_rows( 'cards' ) ) : ?>
								<?php
								the_row();
								$main_title  = empty( get_sub_field( 'title' ) ) ? 'Your Title Here' : get_sub_field( 'title' );
								$description = empty( get_sub_field( 'description' ) ) ? 'Your description Here' : get_sub_field( 'description' );

								?>

								<div class="col-12 col-md-6 col-lg-4 cards-wrapper">
									<div class="cards">
										<h3><?php echo esc_html( $main_title ); ?></h3>
										<p><?php echo esc_html( $description ); ?></p>
										<a href="<?php the_sub_field( 'button_link' ); ?>" target="blank"><?php echo esc_html( the_sub_field( 'button_name' ) ); ?></a>
										<?php if ( get_sub_field( 'featured_image' ) ) : ?>
											<?php echo wp_get_attachment_image( get_sub_field( 'featured_image' ), 'full' ); ?>
										<?php endif; ?>
									</div>
								</div>

							<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
