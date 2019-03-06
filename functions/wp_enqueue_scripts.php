<?php 

/**
 * Scripts Enqueue
 * Registers and Enqueue Scripts in footer or head
 *
 * @since   1.0
 * @version 1.5
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_script/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_script/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_scripts() {

	global $theme_options;
	$theme_data = wp_get_theme();
	$deps = null;

	/* Deregister Scripts */
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );


	/* Check jQuery Support */
	if ( $theme_options['jQuery'] || $theme_options['woocommerce'] || $theme_options['slider']['flexslider'] || $theme_options['slider']['flickity'] || $theme_options['bootstrap']['version_3'] || $theme_options['bootstrap']['version_4'] ) {

		wp_register_script('jquery', get_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.3.1', true);
		wp_register_script('jquery-migrate', get_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jquery'), '3.0.0', true);
		$deps = array('jquery-migrate');

	}


	/* Register Scripts */
	if ( $theme_options['bootstrap']['version_3'] ) {
		wp_register_script( 'bootstrap', get_theme_file_uri('/assets/js/lib/bootstrap.3.4.1.js'), array('jquery-migrate'), null, true );
		array_push($deps, 'bootstrap');
		
	} else if ( $theme_options['bootstrap']['version_4'] ) {
		wp_register_script( 'bootstrap', get_theme_file_uri('/assets/js/lib/bootstrap.bundle.4.3.1.js'), array('jquery-migrate'), null, true );
		array_push($deps, 'bootstrap');
	}

	wp_register_script( 'flickity', get_theme_file_uri('/assets/js/lib/flickity.pkgd.js'), array('jquery-migrate'), '2.1.0', true );
	wp_register_script( 'flexslider', get_theme_file_uri('/assets/js/lib/jquery.flexslider.js'), array('jquery-migrate'), null, true );
	wp_register_script( 'main_js', get_theme_file_uri('/assets/js/functions.js'), $deps, $theme_data->get( 'Version' ), true );


	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_script( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_script( 'flickity' );
	}

	wp_enqueue_script( 'main_js' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
