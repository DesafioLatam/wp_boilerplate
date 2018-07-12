<?php 

/**
 * Hide Users Endpoint
 * Hides users endpoint on API Rest to the unlogged users
 *
 * @return void
 * @since  1.5.0
 * @see    https://developer.wordpress.org/reference/hooks/rest_endpoints/
 */
function dl_remove_users_endpoint( $endpoints ) {

	if ( is_user_logged_in() ) {
		return $endpoints;
	}
	
	if ( isset( $endpoints['/wp/v2/users'] ) ) {
		unset( $endpoints['/wp/v2/users'] );
	}

	if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
		unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}

	return $endpoints;
}

add_filter( 'rest_endpoints', 'dl_remove_users_endpoint' );