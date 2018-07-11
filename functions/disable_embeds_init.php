<?php

/**
 * Hide Tags on Header
 * Removes elements from header tag
 *
 * @return void
 * @since  1.0
 */
function dl_disable_embeds_init() {

	// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );

	// Remove Emojis
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove DNS prefetch 
	remove_action( 'wp_head', 'wp_resource_hints', 2 );

	// Wordpress version
	remove_action( 'wp_head', 'wp_generator' );

	// Remove RSD link
	remove_action( 'wp_head', 'rsd_link' );

	//Remove wlwmanifest Link
	remove_action( 'wp_head', 'wlwmanifest_link' );

}

add_action( 'init', 'dl_disable_embeds_init' );
