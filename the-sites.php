<?php

/*
Template Name: Sites
*/
if(!is_user_logged_in()) wp_safe_redirect('/');

get_header(); ?>

	<div class="wrap outer">

		<div id="the-sites">

			<h2>Your Websites</h2>

			<div class="contents">

				<ul>

					<?php foreach(dp_your_websites() as $site): ?>

						<li>

							<h3><a href="<?php echo $site['url']; ?>/wp-admin" target="_blank"><?php echo $site['name']; ?></a>

								<div class="links">
									<a href="<?php echo $site['url']; ?>/wp-admin">Dashboard</a>
									<a href="<?php echo $site['url']; ?>" target="_blank">Visit</a>
								</div>

							</h3>

							<div class="stats">

								<div class="col">

									<div class="no"><?php echo $site['views']; ?></div>
									<span>Views</span>

								</div>

								<div class="col">

									<div class="no"><?php echo $site['people']; ?></div>
									<span>People</span>

								</div>

								<div class="col">

									<div class="no"><?php echo $site['runtime']; ?></div>
									<span>Runtime</span>

								</div>

							</div>

							<div class="clear"></div>

						</li>

					<?php endforeach ;?>

				</ul>

			</div>

		</div>

	</div>

<?php get_footer();
