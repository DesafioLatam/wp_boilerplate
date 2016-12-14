<?php
	
	//Función para limitar cualquier tipo de archivo
	function my_myme_types($mime_types){
	    //Creating a new array will reset the allowed filetypes
	    $mime_types = array(
	        'jpg|jpeg|jpe' => 'image/jpeg',
	        'png' => 'image/png',
	        'pdf' => 'application/pdf',
	        'zip' => 'application/zip',
	    );
	    return $mime_types;
	}
	
	add_filter('upload_mimes', 'my_myme_types', 1, 1);
	
?>