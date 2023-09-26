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

$skill = new StoutLogic\AcfBuilder\FieldsBuilder( 'skill' );
$skill
	->addWysiwyg( 'title' )
	->addWysiwyg( 'content' )
	->addRepeater(
		'cards',
		array(
			'button_label' => 'Add Cards',
			'layout'       => 'block',
			'max'          => 4,
		)
	)

	->addText( 'title' )
	->addImage(
		'icons',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'Icons', 'greydientlab' ),
			'return_format' => 'id',
		)
	)
	->setLocation( 'block', '==', 'acf/skill' );

return $skill;
