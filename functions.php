<?php 

	/**
	 * This imports all the files inside the functions folder 
	 * and adds them into functions file
	*/

	require_once get_template_directory() . '/functions/__get_files.php';
	global $theme_options;
	$files = get_files_from_folders( $theme_options["functions"] );

	foreach($files as $file) {
		require_once $file;
	}


	/**
	 * This Theme only works in WordPress 4.8 or later.
	*/

	$GLOBALS['wp_min_version'] = '4.8';

	if ( version_compare( $GLOBALS['wp_version'], $GLOBALS['wp_min_version'], '<' ) ) {
		require get_template_directory() . '/functions/back-compat.php';
		return;
	}
