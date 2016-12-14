<?php get_header() ?>

	<!-- if have_posts -->
	<?php if (have_posts()) { ?>
		<ul>
		<!-- then show posts -->
		<?php while (have_posts()) : the_post(); ?>

		<li>
			<a href="<?php the_permalink() ?>">
				<h1 class="title"><?php the_title() ?></h1>
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
				<?php the_excerpt(); ?>
			</a>
		</li>
		<?php endwhile; ?>
		</ul>
	<?php } else { ?>
		<h1>No hay resultados</h1>
	<?php } wp_reset_query(); ?>

	<?php get_sidebar() ?>

<?php get_footer() ?>