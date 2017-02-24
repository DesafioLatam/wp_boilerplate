<?php

	// Agrega tamaños de imágenes personalizadas en posts
	if ( function_exists( 'add_theme_support' ) ) { 
		add_image_size( 'slideshow', 800, 600, true);
		add_image_size( 'custom_logo', 800, 600, true);

		add_filter('image_size_names_choose', 'dl_image_sizes');
	}
	
	// Agrega los tamaños personalizados en la lista de tamaños disponibles en el administrador
	function dl_image_sizes($sizes) {
	    $addsizes = array(
	        "slideshow" => __( "Tamaño slideshow")
	    );
	    
	    return array_merge($sizes, $addsizes);
	}

?>