<?php get_header(); ?>

<div class="wrap outer">

	<div id="blog" class="content-with-sidebar">

		<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<div class="blog-post blog-post-id-<?php echo get_the_ID(); ?>">

				<h2 class="blog-post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>

				<div class="blog-post-meta">
					<?php the_time('jS F, Y'); ?> by <a href="<?php echo get_the_author_meta('url'); ?>"><?php echo get_the_author_meta('display_name'); ?></a>
				</div>

				<div class="post-entry">
					<?php the_content(); ?>
				</div>

			</div>

		<?php endwhile; endif; ?>

	</div> <!-- // blog -->

	<div id="blog-sidebar" class="sidebar">

		<?php dynamic_sidebar('blog-sidebar'); ?>

	</div>

</div>

<?php get_footer();