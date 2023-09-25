<?php
/**
 * ACF Contact.
 *
 * This is an example of how to create an ACF Banner Block.
 * Make sure that the location (setLocation) exists in the
 * acf/blocks and should match the name in block.json file
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$contact = new StoutLogic\AcfBuilder\FieldsBuilder( 'contact' );
$contact
		->addText( 'title' )
		->addText( 'description' )
		->addText( 'button_name' )
		->addUrl( 'button_link' )
	->setLocation( 'block', '==', 'acf/contact' );

return $contact;
