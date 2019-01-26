<?php

/**
 * Menu Home Button
 * Adds a Menu Home Button from functions
 *
 *
 * @return string
 * @since  1.5
 * @version 1.1
 */

global $theme_options;

function dl_adds_menu_home_button( $items, $args ) {

	global $theme_options;

	if ( $args->theme_location == 'header-menu' || $args->theme_location == 'footer-menu' ) {

		$li_class = '';
		$a_class = '';

		if ( $theme_options['bootstrap']['version_4'] ) {
			$li_class .= 'nav-item ';
			$a_class = 'nav-link';
		}

		if ( (is_home() || is_front_page()) && $theme_options['bootstrap']['version_4'] ) {
			$li_class .= 'active';
		
		} else if ( is_home() || is_front_page() ) {
			$li_class .= 'current-menu-item';
		}

		$home  = '<li class="'. $li_class .'">';
		$home .= '<a class="'. $a_class .'" href="' . esc_url( get_home_url( '/' ) ) . '" title="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'">';
		$home .= $theme_options['menu']['button_name'] ? $theme_options['menu']['button_name'] : 'Home';
		$home .= '</a></li>';

		$items = $home . $items;

	}

	return $items;

}

if ( $theme_options['menu']['button_home'] ) {
	add_filter( 'wp_nav_menu_items', 'dl_adds_menu_home_button', 10, 2 );
}
