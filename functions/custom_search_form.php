<?php

/**
 * Custom Search Form
 * Adds customized HTML search form
 *
 * @return echo HTML
 * @since  1.0
 * @uses   default disabled
 */
function dl_custom_search_form() {

	$form  = '<div class="search">';
	$form .= 	'<form role="search" method="get" class="search__form" action="' . get_bloginfo( 'url' ) . '">';
	$form .= 		'<label>';
	$form .= 			'<input type="search" class="search__field" placeholder="Buscador" value="" name="s" title="Buscar:" aria-label="Área de busqueda" />';
	$form .= 		'</label>';
	$form .= 		'<input type="submit" class="search__submit" value="&#xf002;" aria-label="Buscar" />';
	$form .= 	'</form>';
	$form .= '</div>';

	echo $form;

}

//add_filter( 'get_search_form', 'dl_custom_search_form' );
