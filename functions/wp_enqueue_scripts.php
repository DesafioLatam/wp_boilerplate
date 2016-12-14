<?php 
	
	function enqueue_scripts() {
		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		wp_register_script('custom_jQuery', get_template_directory_uri() . '/assets/js/lib/jquery-3.1.0.min.js', null, null, true);
		wp_register_script('mainJS', get_template_directory_uri() . '/assets/js/functions.js', 'custom_jQuery', null, true);
		
		/* Enqueue Scripts */
		wp_enqueue_script('custom_jQuery');
		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
?>