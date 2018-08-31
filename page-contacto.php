<?php get_header() ?>
	<?php the_post() ?>

	<?php the_title() ?>
	<?php the_content(); ?>
	
	<?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
		<?php dynamic_sidebar( 'contact-widget' ); ?>
	<?php }; ?>

<?php get_footer() ?>