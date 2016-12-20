<?php 

	$files = glob(get_template_directory() . '/functions/*.php');

	foreach($files as $file) {
		if (basename($file, ".php") != 'back-compat') {
			require_once $file;
		}
	}


	/**
	 * This Theme only works in WordPress 4.7 or later.
	*/

	if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
		require get_template_directory() . '/functions/back-compat.php';
		return;
	}

?>