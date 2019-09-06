<?php
function plae_submit_cf() {

	// The $_REQUEST contains all the data sent via ajax
	if ( isset( $_REQUEST ) ) {

		$fruit = $_REQUEST['fruit'];

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
}

add_action( 'wp_ajax_plae_submit_cf', 'plae_submit_cf' );
add_action( 'wp_ajax_nopriv_plae_submit_cf', 'plae_submit_cf' );

function plae_ajax_enqueue() {

	// The wp_localize_script allows us to output the ajax_url path for our script to use.

	wp_localize_script(
		'plae-ajax-script',
		'plae_ajax_obj',
		[
			'ajax_url' => admin_url( 'admin-ajax.php' ),
		]
	);

}

add_action( 'wp_enqueue_scripts', 'plae_ajax_enqueue' );

function my_resource() {
	wp_enqueue_script( 'my-jquery', get_template_directory_uri() . '/main.js', [ 'jquery' ], null, true );
	wp_localize_script( 'my-jquery', 'myback',
		[ 'ajax_url' => admin_url( 'admin-ajax.php' ) ] );
}

add_action( 'wp_enqueue_scripts', 'my_resource' );
function sendmail() {
	wp_send_json_error( 'hey' );
}

add_action( 'wp_ajax_nopriv_sendmail', 'sendmail' );
add_action( 'wp_ajax_sendmail', 'sendmail' );

