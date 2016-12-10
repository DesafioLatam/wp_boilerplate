<?php
	
	// Personalizar login.php
	function my_login_logo() { ?>
	    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/login.css" />
	<?php }

	add_action( 'login_enqueue_scripts', 'my_login_logo' );


	// Personalizar el link del logo
	function my_login_logo_url() {
	    return get_bloginfo( 'url' );
	}

	add_filter( 'login_headerurl', 'my_login_logo_url' );
	

	function my_login_logo_url_title() {
	    return get_bloginfo('name');
	}

	add_filter( 'login_headertitle', 'my_login_logo_url_title' );
	
?>