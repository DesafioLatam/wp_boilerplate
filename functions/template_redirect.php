<?php 

/**
 * Custom URL search page
 * Redirects to a custom URL search page
 *
 * @return  void
 * @since   1.0
 */
function dl_custom_search_url() {

	if ( is_search() && ! empty( $_GET['s'] ) ) {
		wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
		exit();
	}

}

add_action( 'template_redirect', 'dl_custom_search_url' );
