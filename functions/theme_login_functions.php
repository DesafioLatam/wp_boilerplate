<?php
	
	// Personalizar login.php
	function dl_login_logo() { ?>
	    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/login.css" />
	<?php }

	add_action( 'login_enqueue_scripts', 'dl_login_logo' );


	// Personalizar el link del logo
	function dl_login_logo_url() {
	    return get_bloginfo( 'url' );
	}

	add_filter( 'login_headerurl', 'dl_login_logo_url' );
	

	function dl_login_logo_url_title() {
	    return get_bloginfo('name');
	}

	add_filter( 'login_headertitle', 'dl_login_logo_url_title' );
	
?>