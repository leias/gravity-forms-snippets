// Change gform submit input to button
add_filter( 'gform_submit_button', 'input_to_button', 10, 2 );
add_filter( 'gform_next_button', 'input_to_button', 10, 2 );
add_filter( 'gform_previous_button', 'input_to_button', 10, 2 );
function input_to_button( $button, $form ) {
	if($form['id'] != '6' && $form['id'] != '9') { // Only set on specific form IDs
		$dom = new DOMDocument();
		$dom->loadHTML( $button );
		$input = $dom->getElementsByTagName( 'input' )->item(0);
		$new_button = $dom->createElement( 'button' );
		$new_button->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
		$input->removeAttribute( 'value' );
		foreach( $input->attributes as $attribute ) {
			$new_button->setAttribute( $attribute->name, $attribute->value );
		}
		$input->parentNode->replaceChild( $new_button, $input );

		return $dom->saveHtml( $new_button );
	} else {
		return $button;		
	}	
}
