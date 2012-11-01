<?php get_header(); ?>
		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="tagline"><?php bloginfo('description'); ?></div>
			<div class ="posts">
			<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
			</div>

		</div>
	</div>

</body>
</html>