<?php 

	$GLOBALS["options"] = array(
		"woocommerce_enabled" => class_exists( 'WooCommerce' ),
		"functions"			  => array(
			"theme"		      => glob(get_template_directory() . '/functions/*.php'),
			"wc"        	  => glob(get_template_directory() . '/functions/woocommerce/*.php'),
		),
		"slider"              => array(
			"flickity"        => false,
			"flexslider"      => true,
		)
	);
