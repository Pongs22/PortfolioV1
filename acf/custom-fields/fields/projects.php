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

$projects = new StoutLogic\AcfBuilder\FieldsBuilder( 'projects' );
$projects
	->addColorPicker( 'background_color' )
	->addWysiwyg( 'title' )
	->addTextarea(
		'description',
		array(
			'new_lines' => 'br',
		)
	)

	->addRepeater(
		'cards',
		array(
			'button_label' => 'Add Cards',
			'layout'       => 'block',
			'max'          => 3,
		)
	)

	->addText( 'title' )
	->addTextarea(
		'description',
		array(
			'new_lines' => 'br',
		)
	)
	->addImage(
		'featured_image',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'Featured Image', 'greydientlab' ),
			'return_format' => 'id',
		)
	)
	->setLocation( 'block', '==', 'acf/projects' );

return $projects;
