<?php

/**
 * Accordion Template.
 *
 * @package greydientlab
 */

?>

<?php
$main_title  = empty(get_field('title')) ? 'Your Title Here' : get_field('title');
$description = empty(get_field('description')) ? 'Your Description Here' : get_field('description');
$btn_name    = empty(get_field('button_name')) ? 'Button Name' : get_field('button_name');

?>

<div class="gl-b-hero-wrapper ">
	<div class="container-fluid">
		<div class="grid-wrapper">
			<div class="grid-container mx-auto justify-content-center align-items-center">
				<div class="grid-item" id="item-1"></div>
				<div class="grid-item" id="item-2"></div>
				<div class="grid-item" id="item-3"></div>
				<div class="grid-item" id="item-4"></div>
				<div class="grid-item" id="item-5"></div>
				<div class="grid-item" id="item-6"></div>
				<div class="grid-item" id="item-7"></div>
				<div class="grid-item" id="item-8"></div>
				<div class="grid-item" id="item-9"></div>
				<div class="grid-item" id="item-10"></div>
				<div class="grid-item" id="item-11"></div>
				<div class="grid-item" id="item-12"></div>
				<div class="grid-item" id="item-13"></div>
				<div class="grid-item" id="item-14"></div>
				<div class="grid-item" id="item-15"></div>
				<div class="grid-item" id="item-16"></div>
				<div class="grid-item" id="item-17"></div>
				<div class="grid-item" id="item-18"></div>
				<div class="grid-item" id="item-19"></div>
				<div class="grid-item" id="item-20"></div>
				<div class="grid-item" id="item-21"></div>
				<div class="grid-item" id="item-22"></div>
				<div class="grid-item" id="item-23"></div>
				<div class="grid-item" id="item-24"></div>
				<div class="grid-item" id="item-25"></div>
				<div class="grid-item" id="item-26"></div>
				<div class="grid-item" id="item-27"></div>
				<div class="grid-item" id="item-28"></div>
				<div class="grid-item" id="item-29"></div>
				<div class="grid-item" id="item-30"></div>
				<div class="grid-item" id="item-31"></div>
				<div class="grid-item" id="item-32"></div>
				<div class="grid-item" id="item-33"></div>
				<div class="grid-item" id="item-34"></div>
				<div class="grid-item" id="item-35"></div>
				<div class="grid-item" id="item-36"></div>
				<div class="grid-item" id="item-37"></div>
				<div class="grid-item" id="item-38"></div>
				<div class="grid-item" id="item-39"></div>
				<div class="grid-item" id="item-40"></div>
				<div class="grid-item" id="item-41"></div>
				<div class="grid-item" id="item-42"></div>
				<div class="grid-item" id="item-43"></div>
				<div class="grid-item" id="item-44"></div>
				<div class="grid-item" id="item-45"></div>
				<div class="grid-item" id="item-46"></div>
				<div class="grid-item" id="item-47"></div>
				<div class="grid-item" id="item-48"></div>
				<div class="grid-item" id="item-49"></div>
				<div class="grid-item" id="item-50"></div>
				<div class="grid-item" id="item-51"></div>
				<div class="grid-item" id="item-52"></div>
				<div class="grid-item" id="item-53"></div>
				<div class="grid-item" id="item-54"></div>
				<div class="grid-item" id="item-55"></div>
				<div class="grid-item" id="item-56"></div>
				<div class="grid-item" id="item-57"></div>
				<div class="grid-item" id="item-58"></div>
				<div class="grid-item" id="item-59"></div>
				<div class="grid-item" id="item-60"></div>
				<div class="grid-item" id="item-61"></div>
				<div class="grid-item" id="item-62"></div>
				<div class="grid-item" id="item-63"></div>
				<div class="grid-item" id="item-64"></div>
				<div class="grid-item" id="item-65"></div>
				<div class="grid-item" id="item-66"></div>
				<div class="grid-item" id="item-67"></div>
				<div class="grid-item" id="item-68"></div>
				<div class="grid-item" id="item-69"></div>
				<div class="grid-item" id="item-70"></div>

			</div>
		</div>
		<div class="container">
			<div class="title-content">
				<?php if (get_field('prehead')) : ?>
					<h3 id="splittext"><?php echo esc_html(get_field('prehead')); ?></h3>
				<?php endif; ?>
				<div id="split"><?php echo wp_kses_post($main_title); ?></div>
				<div class="button-description">
					<div class="p"><?php echo wp_kses_post($description); ?></div>
					<button id="workshead"><?php echo esc_html($btn_name); ?></button>
				</div>
			</div>
			<div class="image-container">
				<?php if (get_field('use_lottie')) : ?>
					<lottie-player id="lottie" src="<?php the_field('lottie_file'); ?>" background="transparent" speed="1" loop></lottie-player>
				<?php elseif (get_field('featured_image')) : ?>
					<?php echo wp_get_attachment_image(get_field('featured_image'), 'full'); ?>
				<?php else : ?>
					<img src="<?php echo esc_url(get_block_asset_url('hero', 'Picture.jpg')); ?>">
				<?php endif; ?>
			</div>
		</div>

	</div>

</div>