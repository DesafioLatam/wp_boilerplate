<?php 

	$GLOBALS["options"] = array(
		"WooCommerceEnabled"  => class_exists( 'WooCommerce' ),
		"theme_functions"     => glob(get_template_directory() . '/functions/*.php'),
		"wc_functions"        => glob(get_template_directory() . '/functions/woocommerce/*.php'),
		"slider"              => array(
			"flickity"        => false,
			"flexslider"      => true,
		)
	);
