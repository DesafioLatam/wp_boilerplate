<?php

	function dl_switch_theme() {
		switch_theme( WP_DEFAULT_THEME );
		unset( $_GET['activated'] );
		add_action( 'admin_notices', 'dl_upgrade_notice' );
	}

	add_action( 'after_switch_theme', 'dl_switch_theme' );



	function dl_upgrade_notice() {
		$message = sprintf( __( "Este theme requiere al menos Wordpress versión %s. El sitio esta funcionando sobre la versión %s. Por favor, actualiza la versión y prueba nuevamente activando este theme." ), $GLOBALS['wp_min_version'], $GLOBALS['wp_version'] );
		printf( '<div class="error"><p>%s</p></div>', $message );
	}



	function dl_preview() {
		if ( isset( $_GET['preview'] ) ) {
			wp_die( sprintf( __( "Este theme requiere al menos Wordpress versión %s. El sitio esta funcionando sobre la versión %s. Por favor, actualiza la versión y prueba nuevamente activando este theme." ), $GLOBALS['wp_min_version'], $GLOBALS['wp_version'] ) );
		}
	}

	add_action( 'template_redirect', 'dl_preview' );

?>