<?php

/*
Template Name: Pricing
*/

get_header(); ?>

	<div class="wrap outer">

		<div id="the-pricing">

			<h2>Pricing</h2>
			<p>Straight-forward, pay for what you use.</p>

			<div class="contents">

				<div class="col runtime">

					<h3>Runtime</h3>

					<p class="big">&euro;0.25 per day or &euro;7.5 per month per website.</p>

					<div class="about">

						<p>Runtime is the thing that runs each website. 1 runtime day equals 24 hours the website is live. You can purchase as many runtime days as you wish, straight from the dashboard, and we'll let you know when you start running low.</p>

					</div>

				</div>

				<div class="col storage">

					<h3>Space</h3>

					<p class="big">10GB for free then &euro;1 per additional 5GB.</p>

					<div class="about">

						<p>Space is needed to store all your images, documents and what-have-you. The free 10GB of space should cover most websites and use-cases, but in case it doesn't, purchasing more is as simple as navigating to the dashboard.</p>

					</div>

				</div>

			</div>

			<div class="cta">

				<a href="<?php echo get_site_url(); ?>/features/">Features</a>
				<?php if(!is_user_logged_in()): ?><a href="<?php echo get_site_url(); ?>/wp-signup.php">Sign Up</a><?php endif; ?>

			</div>


		</div>

	</div>

<?php get_footer();