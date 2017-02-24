<?php

	function dl_contact_widget_init() {
		register_sidebar( array(
			'name'          => 'Página de Contacto',
			'id'            => 'contact_widget',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}

	function dl_sidebar_widget_init() {
		register_sidebar( array(
			'name'          => 'Barra Lateral',
			'id'            => 'sidebar_widget',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}

	add_action( 'widgets_init', 'dl_sidebar_widget_init' );
	add_action( 'widgets_init', 'dl_contact_widget_init' );

?>