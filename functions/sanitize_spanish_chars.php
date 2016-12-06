<?php

	//Eliminar letras con acentos en archivos de la multimedia
	function sanitize_spanish_chars ($filename) {
		return remove_accents( $filename );
	}

	add_filter('sanitize_file_name', 'sanitize_spanish_chars', 10);
	
?>