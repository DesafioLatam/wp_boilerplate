<?php
	
	function dl_custom_search_form() {
		$form = '<div class="search">';
		$form .= '<form role="search" method="get" class="search-form" action="';
		$form .= get_bloginfo('url');
		$form .= '">';
		$form .= '<label>';
		$form .= '<input type="search" class="search-field" placeholder="Buscador" value="" name="s" title="Buscar:" aria-label="Área de busqueda" />';
		$form .= '</label>';
		$form .= '<input type="submit" class="search-submit" value="&#xf002;" aria-label="Buscar" />';
		$form .= '</form>';
		$form .= '</div>';

		echo $form;
	}

	//add_filter( 'get_search_form', 'dl_custom_search_form' );

?>