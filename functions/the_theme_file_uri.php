<?php
/**
 * Prints URI of the file
 * Shortcut for echo get_theme_file_uri function
 *
 * @param string $file
 *
 * @return void
 * @since  1.1.6
 */
function the_theme_file_uri( $file ) {
	echo get_theme_file_uri( $file );
}
