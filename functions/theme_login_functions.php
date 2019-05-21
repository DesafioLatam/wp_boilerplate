<?php

/**
 * Custom Login Style
 * Adds custom styles to login page
 *
 * @since   1.0
 * @version 1.1
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
 */
// Personalizar login.php
function dl_login_logo() {
	wp_enqueue_style( 'core', get_parent_theme_file_uri('/assets/css/login.css'), false );
}

add_action( 'login_enqueue_scripts', 'dl_login_logo', 10 );


/**
 * Custom Logo link
 * Adds custom URL to link on login
 *
 * @since   1.0
 * @see     https://codex.wordpress.org/Plugin_API/Filter_Reference/login_headerurl
 */
function dl_login_logo_url() {
	return get_bloginfo( 'url' );
}

add_filter( 'login_headerurl', 'dl_login_logo_url' );


/**
 * Custom Logo Title
 * Adds custom alt tag on logo
 *
 * @since   1.0
 * @see     https://developer.wordpress.org/reference/hooks/login_headertitle/
 * @see     https://codex.wordpress.org/Customizing_the_Login_Form
 */
function dl_login_logo_url_title() {
	return get_bloginfo( 'name' );
}

add_filter( 'login_headertext', 'dl_login_logo_url_title' );
