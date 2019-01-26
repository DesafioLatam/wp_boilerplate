<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">Navbar</a>
		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
			<?php wp_nav_menu( array(
				'theme_location'	=> 'header-menu',
				'depth'				=> 2,
				'container'			=> 'div',
				'container_class'	=> 'collapse navbar-collapse',
				'container_id'		=> 'bs-example-navbar-collapse-1',
				'menu_class'		=> 'nav navbar-nav',
				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
				'walker'			=> new WP_Bootstrap_Navwalker(),
			) );
			?>
		<?php } ?>
	</div>
</nav>