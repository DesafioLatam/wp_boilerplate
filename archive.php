<?php get_header() ?>

	<?php if (have_posts()) { ?>

	<ul>
		<?php while ( have_posts() ) { the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail() ?>
				<?php the_title() ?>
				<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
				<?php the_excerpt() ?>
			</a>
		</li>
		<?php }; ?>
	</ul>

	<?php } else { ?>
		<!-- Content -->
	<?php } wp_reset_query(); ?>

	<?php get_sidebar() ?>
<?php get_footer() ?>