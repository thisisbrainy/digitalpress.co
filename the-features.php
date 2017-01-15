<?php

/*
Template Name: Features
*/

get_header(); ?>

	<div class="wrap outer">

		<div id="the-features">

			<h2>Features</h2>
			<p>Things that make us cool. And you, too, if you join us.</p>

			<div class="contents">

				<ul>

					<li class="feature-dashboard">
						
						<div class="image">
							<div class="img"></div>
						</div>

						<div class="content">

							<h3>Dashboard, reimagined</h3>

							<p>We completely redesigned the WordPress dashboard, with built-in analytics, storage management and website refueling right there, beautifully.</p>

					</li>

					<li class="feature-page-builder">

						<div class="image">
							<div class="img"></div>
						</div>

						<div class="content">

							<h3>Page Builder, baked in</h3>

							<p>We couldn't quite make a page builder as sweet as this, so we included <a href="https://siteorigin.com">SiteOrigin</a>'s Page Builder instead. You'll be more than happy we did. It's an amazing thing.</p>

						</div>

					</li>

					<li class="feature-storage">

						<div class="image">
							<div class="img"></div>
						</div>

						<div class="content">

							<h3>Storage space, expandable</h3>

							<p>We give every website a default setting of 10GB of space. More than enough for most websites out there. Need more? Expand it, right from the Dashboard.</p>

						</div>

					</li>

					<li class="feature-custom-domains">

						<div class="image">
							<div class="img"></div>
						</div>

						<div class="content">

							<h3>Custom domains</h3>

							<p>We give every website a temporary address to use, but we recommend you always add your own domain to your website as well. You can add as many domains to your website as you wish.</p>

						</div>

					</li>

					<li class="feature-languages">

						<div class="image">
							<div class="img"></div>
						</div>

						<div class="content">

							<h3>Multilinguage</h3>

							<p>With baked in <a href="https://wordpress.org/plugins/polylang/">Polylang</a>, you can translate your website into as many different languages as you wish. Beautifully.</p>

						</div>

					</li>

					<li class="feature-security">

						<div class="content">

							<h3>Safe and sound</h3>

							<p>Daily backups, and weekly backups of backups. Hourly scanning of viruses and weird behaviour. Trust us, we're on top of our game when it comes to keeping your WordPress website safe.</p>

						</div>

					</li>

				</ul>

			</div>

			<div class="cta">

				<a href="<?php echo get_site_url(); ?>/pricing/">Pricing</a>
				<?php if(!is_user_logged_in()): ?><a href="<?php echo get_site_url(); ?>/signup/">Sign Up</a><?php endif; ?>

			</div>

		</div>

	</div>

<?php get_footer();