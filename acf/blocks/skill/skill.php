<?php
/**
 * Skill Template.
 *
 * @package greydientlab
 */

?>

<?php
$main_title = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$content    = empty( get_field( 'content' ) ) ? 'Your Content Here' : get_field( 'content' );
?>

<div class="gl-b-skill-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 skill-description-wrapper">
				<div class="description">
				<div class="title"><?php echo wp_kses_post( $main_title ); ?></div>
				<div class="content"><?php echo wp_kses_post( $content ); ?></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 skill-icon-wrapper">
				<div class="row">
					<?php if ( have_rows( 'cards' ) ) : ?>
						<?php 
						while ( have_rows( 'cards' ) ) :
							the_row();
							$icon_name = empty( get_sub_field( 'title' ) ) ? 'Your Title Here' : get_sub_field( 'title' );
							?>
							<div class="col-12 col-md-6 cards-wrapper">
								<div class="cards">
								<?php if ( get_sub_field( 'icons' ) ) : ?>
									<?php echo wp_get_attachment_image( get_sub_field( 'icons' ), 'full' ); ?>
								<?php endif; ?>
								<p class="icon-name"><?php echo esc_html( $icon_name ); ?></p>
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
