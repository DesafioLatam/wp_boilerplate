<?php

// 
/**
 * Myme Types Filter
 * Filter untrusted file extensions
 *
 * @return  void
 * @since   1.0
 * @see     https://codex.wordpress.org/Plugin_API/Filter_Reference/upload_mimes
 */
function dl_myme_types( $mime_types ) {

	//Creating a new array will reset the allowed filetypes
	$mime_types = array(
		'jpg|jpeg|jpe'	=> 'image/jpeg',
		'png'			=> 'image/png',
		'pdf'			=> 'application/pdf',
		'zip'			=> 'application/zip'
	);

	return $mime_types;

}

add_filter( 'upload_mimes', 'dl_myme_types', 1, 1 );
