<?php get_header() ?>
	<?php the_post() ?>

	<?php the_title() ?>
	<?php the_content(); ?>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>

<?php get_footer() ?>