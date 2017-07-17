<?php
	
	if ( version_compare( $GLOBALS['wp_version'], '4.7', '>=' ) ) {
		dl_check_if_has_authentication();
	}

	function dl_check_if_has_authentication() {
		add_filter( 'rest_authentication_errors', 'dl_disable_rest_api_access' );
	}

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

?>