<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.5
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();
	$deps = array('reset');


	/* Register Styles */
	if ( $theme_options['bootstrap']['version_3'] ) {
		wp_register_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.3.4.0.css'), null, null, 'screen' );
		$deps = array('bootstrap');

	} else if ( $theme_options['bootstrap']['version_4'] ) {
		wp_register_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.4.2.1.css'), null, null, 'screen' );
		$deps = array('bootstrap');
	}

	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'bootstrap_3', get_theme_file_uri( '/assets/css/bootstrap.3.4.0.css'), null, null, 'screen' );
	wp_register_style( 'bootstrap_4', get_theme_file_uri( '/assets/css/bootstrap.4.2.1.css'), null, null, 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'fontawesome', get_theme_file_uri( '/assets/css/fontawesome.css'), null, '5.2.0', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), $deps, $theme_data->get( 'Version' ), 'screen' );


	/* Enqueue Styles */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	if ( $theme_options['fontawesome'] ) {
		wp_enqueue_style( 'fontawesome' );
	}

	wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
