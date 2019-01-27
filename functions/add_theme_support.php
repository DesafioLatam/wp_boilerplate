<?php 

/**
 * Adds Theme Support
 * Adds menus and theme support initialization
 *
 * @return  void
 * @since   1.0
 * @version 1.4
 * @see     https://codex.wordpress.org/Function_Reference/register_nav_menus
 * @see     https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 * @see     https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/
 */
function dl_theme_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/* Gutenberg Support */
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );
	// add_theme_support('disable-custom-font-sizes');
	// add_theme_support( 'disable-custom-colors' );

	/* Woocommerce */
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'size'	=> 'custom_logo'
		)
	);

	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => 'Desafio Green',
			'slug'  => 'dl-green',
			'color' => '#61B94C',
		),
		array(
			'name'  => 'White',
			'slug'  => 'white',
			'color' => '#fff',
		)
	) );

	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
		)
	);

}

add_action( 'after_setup_theme', 'dl_theme_setup' );
