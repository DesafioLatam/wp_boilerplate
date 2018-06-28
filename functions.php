<?php 

	function optionsFilter($string) {
		return strpos($string, '__options.php') === false;
	}

	require_once get_template_directory() . '/functions/__options.php';

	$files = array_merge($GLOBALS["options"]["theme_functions"], $GLOBALS["options"]["wc_functions"]);
	$files = array_filter($files, 'optionsFilter');

	foreach($files as $file) {
		if (basename($file, ".php") != 'back-compat') {
			require_once $file;
		}
	}


	/**
	 * This Theme only works in WordPress 4.8 or later.
	*/

	$GLOBALS['wp_min_version'] = '4.8';

	if ( version_compare( $GLOBALS['wp_version'], $GLOBALS['wp_min_version'], '<' ) ) {
		require get_template_directory() . '/functions/back-compat.php';
		return;
	}
