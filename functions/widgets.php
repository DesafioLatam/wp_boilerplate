<?php

	function dl_widget_init() {
		register_sidebar( array(
			'name'          => 'Página de Contacto',
			'id'            => 'contact_widget',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));
		
		register_sidebar( array(
			'name'          => 'Barra Lateral',
			'id'            => 'sidebar_widget',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));
	}

	add_action( 'widgets_init', 'dl_widget_init' );

?>