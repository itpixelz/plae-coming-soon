<?php
/**
 * Template Name: Email script
 **/

// The $_REQUEST contains all the data sent via ajax
if ( isset( $_REQUEST ) ) {

	print_r( $_REQUEST );
	$fruit = "Banana";

	// Let's take the data that was sent and do something with it
	if ( $fruit == 'Banana' ) {
		$fruit = 'Apple';
	}

	// Now we'll return it to the javascript function
	// Anything outputted will be returned in the response
	echo $fruit;

	// If you're debugging, it might be useful to see what was sent in the $_REQUEST
	// print_r($_REQUEST);

}

// Always die in functions echoing ajax content
die();
