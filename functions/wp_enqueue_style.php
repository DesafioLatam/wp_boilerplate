<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_theme_file_uri() . '/assets/css/reset.css', null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mainStyle', get_theme_file_uri() . '/assets/css/style.css', array('reset'), $theme_data->get( 'Version' ), 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>