<?php 

/**
 * Disable Admin Bar on Front End
 * Adds the hook to disable admin bar
 *
 * @return  void
 * @since   1.1.2
 * @version 1.1
 * @uses    default disabled
 * @see     https://codex.wordpress.org/Global_Variables 
 * @see     https://codex.wordpress.org/Function_Reference/show_admin_bar
 */
global $is_safari;
global $is_iphone;
global $is_chrome;
global $is_opera;
global $is_edge;
global $is_IE;

if ( $is_safari || $is_chrome ) {
	// add_filter( 'show_admin_bar', '__return_false' );
}
