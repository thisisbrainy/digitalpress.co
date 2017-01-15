<?php

/*
Template Name: Themes
*/

get_header(); ?>

	<div class="wrap outer">

		<div id="the-themes">

			<h2>Themes</h2>
			<p>Carefully hand-crafted, beautiful, customizable.</p>

			<div class="contents">

				<?php
				$themes = new WP_Query(['post_type' => 'theme', 'posts_per_page' => 999]);
				if($themes->have_posts()): while($themes->have_posts()): $themes->the_post();
				?>

					<div class="theme">

						<div class="image" style="background:url(<?php echo the_post_thumbnail_url(); ?>) no-repeat;background-size:cover;"></div>

						<div class="content">

							<h3><?php the_title(); ?></h3>

							<div class="buttons">

								<a href="<?php echo get_post_meta(get_the_ID(), 'dp_theme_url', true); ?>" target="_blank">Demo Website</a>

							</div>

						</div>

					</div>

				<?php endwhile; endif; wp_reset_query(); ?>

			</div>

		</div>

	</div>

<?php get_footer();