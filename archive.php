<?php get_header() ?>

	<ul>
		<li>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<li>
						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail() ?>
							<h1><?php the_title() ?></h1>
							<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>

							<p class="minimize clearfix"><?php the_excerpt() ?></p>
						</a>
					</li>

				<?php endwhile; ?>
			<?php endif; wp_reset_query(); ?>
		</li>
	</ul>
	<?php get_sidebar() ?>

<?php get_footer() ?>