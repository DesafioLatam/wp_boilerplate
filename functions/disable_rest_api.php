<?php

/**
 * Authentication Checker
 * Checks if current user is authenticated
 *
 * @return void
 * @since  1.0.4
 * @uses   default disabled
 * @see    https://developer.wordpress.org/reference/hooks/rest_authentication_errors/
 */
function dl_disable_rest_api_access( $access ) {

	if( ! is_user_logged_in() ) {
		
		return new WP_Error( 
			'rest_cannot_access',
			__( 'Only authenticated users can access the REST API.', 'disable-json-api' ),
			array( 'status' => rest_authorization_required_code()
		));
		
	}

	return $access;
}

if ( version_compare( $GLOBALS['wp_version'], '4.7', '>=' ) ) {
	// add_filter( 'rest_authentication_errors', 'dl_disable_rest_api_access' );
}
