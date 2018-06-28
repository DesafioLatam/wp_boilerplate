<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('flexslider', get_parent_theme_file_uri('/assets/css/flexslider.css'), null, '2.7.1', 'screen');
		wp_register_style('flickity', get_parent_theme_file_uri('/assets/css/flickity.css'), null, '2.1.0', 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		
		/* Enqueue Scripts */
		if ($GLOBALS["options"]["slider"]["flexslider"]) {
			wp_enqueue_style('flexslider');
		}

		if ($GLOBALS["options"]["slider"]["flickity"]) {
			wp_enqueue_style('flickity');
		}


		wp_enqueue_style('mainStyle');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );