<?php

/**
 * Widget Initialization
 * Adds widget areas
 *
 * @since   1.0
 * @see     https://codex.wordpress.org/Widgets_API
 * @see     https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function dl_widget_init() {

	register_sidebar( array(
		'name'			=> 'Página de Contacto',
		'id'			=> 'contact-widget',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=> '',
		'after_title'	=> '',
	));
	register_sidebar( array(
		'name'			=> 'Barra Lateral',
		'id'			=> 'sidebar-widget',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=> '',
		'after_title'	=> '',
	));
	register_sidebar( array(
		'name'			=> 'Search Menu',
		'id'			=> 'menu-widget',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=> '',
		'after_title'	=> '',
	));

}

add_action( 'widgets_init', 'dl_widget_init' );
