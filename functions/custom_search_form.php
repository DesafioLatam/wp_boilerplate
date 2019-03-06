<?php

/**
 * Custom Search Form
 * Adds customized HTML search form
 *
 * @return echo HTML
 * @since  1.1
 * @uses   default disabled
 */
function dl_custom_search_form_bootstrap_3() {

	$form  = '<form class="navbar-form navbar-right" method="get" action="' . get_bloginfo( 'url' ) . '">';
	$form .= 	'<div class="form-group">';
	$form .= 		'<input type="text" class="form-control" placeholder="Buscador" name="s">';
	$form .= 	'</div>';
	$form .= 	'<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>';
	$form .= '</form>';

	return $form;

}

function dl_custom_search_form_bootstrap_4() {

	$form  = '<form class="form-inline my-2 my-lg-0 flex-nowrap" role="search" method="get" action="' . get_bloginfo( 'url' ) . '">';
	$form .= 	'<input type="search" class="form-control mr-2 w-100" placeholder="Buscador" name="s" value="" aria-label="Search">';
	$form .= 	'<button type="submit" class="btn btn-outline-success my-2 my-sm-0" aria-label="Buscar"><i class="fas fa-search"></i></button>';
	$form .= '</form>';

	return $form;

}

if ($theme_options['bootstrap']['version_3']) {
	add_filter( 'get_search_form', 'dl_custom_search_form_bootstrap_3' );
} else if ($theme_options['bootstrap']['version_4']) {
	add_filter( 'get_search_form', 'dl_custom_search_form_bootstrap_4' );
}
