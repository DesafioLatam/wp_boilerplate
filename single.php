<?php get_header() ?>
	<?php the_post() ?>

	<h1 class="title"><?php the_title() ?></h1>
	<?php the_date( 'Y-m-d', '<h2>', '</h2>' ); ?>
	<?php the_content(); ?>

<?php get_footer() ?>