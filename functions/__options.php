<?php 

/**
 * theme_options Variable
 * Sets all theme options
 *
 * @since   1.4.3
 * @version 1.1.3
 */
$theme_options = array(
	'wp_min_version'		=> '5.0.3',
	'woocommerce'			=> class_exists( 'WooCommerce' ),
	'functions'				=> array(
		'theme'				=> glob( get_template_directory() . '/functions/*.php' ),
		'wc'				=> glob( get_template_directory() . '/functions/woocommerce/*.php' ),
	),
	'slider'				=> array(
		'flickity'			=> false,
		'flexslider'		=> true,
	),
	'jQuery'				=> true,
	'fontawesome'			=> true,
	'menu'					=> array(
		'button_home'		=> true,
		'button_name'		=> 'Home'
	)
);
