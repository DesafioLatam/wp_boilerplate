<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		//wp_register_script('jQuery1', get_theme_file_uri() . '/assets/js/lib/jquery-1.12.4.min.js', null, null, true);
		wp_register_script('jQuery3', get_theme_file_uri() . '/assets/js/lib/jquery-3.1.1.min.js', null, null, true);
		wp_register_script('jQuery_migrate', get_theme_file_uri() . '/assets/js/lib/jquery-migrate-3.0.0.min.js', array('jQuery3'), null, true);
		wp_register_script('flexslider', get_theme_file_uri() . '/assets/js/lib/jquery.flexslider-min.js', array('jQuery_migrate'), null, true);
		wp_register_script('mainJS', get_theme_file_uri() . '/assets/js/functions.js', array('jQuery_migrate'), $theme_data->get( 'Version' ), true);
		
		/* Enqueue Scripts */
		//wp_enqueue_script('jQuery1');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>