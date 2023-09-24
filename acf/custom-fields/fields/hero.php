<?php
/**
 * ACF Acoordion Block Fields.
 *
 * This is an example of how to create an ACF Banner Block.
 * Make sure that the location (setLocation) exists in the
 * acf/blocks and should match the name in block.json file
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$hero = new StoutLogic\AcfBuilder\FieldsBuilder( 'hero' );
$hero
	->addText( 'prehead' )
	->addWysiwyg( 'title' )
	->addWysiwyg( 'description' )
	->addFile(
		'lottie_file',
		array(
			'return_format' => 'url',
			'mime_types'    => 'json',
		)
	)
	->addTrueFalse(
		'use_lottie',
		array(
			'default_value' => 0,
		)
	)
	->conditional( 'use_lottie', '==', 1 )
	->addImage(
		'featured_image',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'Featured Image', 'greydientlab' ),
			'return_format' => 'id',
		)
	)
	->conditional( 'use_lottie', '==', 0 )
	->setLocation( 'block', '==', 'acf/hero' );

return $hero;
