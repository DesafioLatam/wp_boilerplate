<?php 

	function dl_theme_setup() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
	}

	add_action( 'after_setup_theme', 'dl_theme_setup' );
	
?>