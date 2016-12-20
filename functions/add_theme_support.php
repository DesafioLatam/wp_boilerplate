<?php 

	function dl_theme_setup() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'custom-logo', array(
			'size' => 'custom_logo'
		));

		register_nav_menus( array(
			'header-menu'  => __( 'Header Menu' ),
			'footer-menu'  => __( 'Footer Menu' ),
		) );
	}

	add_action( 'after_setup_theme', 'dl_theme_setup' );
	
?>