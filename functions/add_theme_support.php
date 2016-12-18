<?php 

	function dl_theme_setup() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'header-menu'  => __( 'Header Menu' ),
			'footer-menu'  => __( 'Footer Menu' ),
		) );
	}

	add_action( 'after_setup_theme', 'dl_theme_setup' );
	
?>