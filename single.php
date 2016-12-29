<?php get_header() ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>    
		
			<h1 class="title"><?php the_title() ?></h1>
			<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
			<?php the_content(); ?>

		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer() ?>