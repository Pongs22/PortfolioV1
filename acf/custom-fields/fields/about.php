<?php
/**
 * ACF about.
 *
 * This is an example of how to create an ACF Banner Block.
 * Make sure that the location (setLocation) exists in the
 * acf/blocks and should match the name in block.json file
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$about = new StoutLogic\AcfBuilder\FieldsBuilder( 'about' );
$about
		->addColorPicker( 'background_color' )
		->addText( 'title' )
		->addWysiwyg( 'description' )
		->addText( 'button_name' )
		->addUrl( 'button_link' )
		->addImage(
			'featured_image',
			array(
				'preview_size'  => 'medium',
				'label'         => __( 'Featured Image', 'greydientlab' ),
				'return_format' => 'id',
			)
		)
	->setLocation( 'block', '==', 'acf/about' );

return $about;
