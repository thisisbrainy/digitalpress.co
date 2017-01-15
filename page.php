<?php get_header(); ?>

<div class="wrap outer">

	<div id="page">

		<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<div class="page">

				<h2 class="page-title"><?php the_title(); ?></h2>

				<div class="post-entry">
					<?php the_content(); ?>
				</div>

			</div>

		<?php endwhile; endif; ?>

	</div> <!-- // page -->

</div>

<?php get_footer();