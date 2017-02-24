<?php 
	
	function dl_enqueue_style() {
		wp_register_style('reset', get_template_directory_uri() . '/assets/css/reset.css', null, null, null);
		wp_register_style('mainStyle', get_template_directory_uri() . '/assets/css/style.css', null, null, null);
		
		wp_enqueue_style('reset');
		wp_enqueue_style('mainStyle');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>