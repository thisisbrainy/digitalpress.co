<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?><?php if($_SERVER['REQUEST_URI'] === '/'): ?> id="is-home"<?php endif; ?>>

	<div class="header-container">

		<div class="wrap outer">

			<div class="header">

				<div class="left">
					<a href="<?php bloginfo('url'); ?>">
						DigitalPress
					</a>
				</div>

				<div class="header-menu">
					<?php wp_nav_menu(['theme_location' => 'primary', 'container' => '']); ?>
				</div>

			</div>

		</div>

	</div> <!-- // header -->

	<?php if(is_user_logged_in()): ?>

		<div class="sub-header-container">

			<div class="wrap outer">

				<div class="sub-header">

					<div class="left">

						<a href="<?php echo get_site_url(); ?>/your-websites/">Your Websites

							<a class="sub" href="<?php echo get_site_url(); ?>/signup/">+</a>

						</a>

						<?php if(is_super_admin()): ?>

							<a href="<?php echo network_admin_url(); ?>">Network</a>

						<?php endif; ?>

					</div>

					<div class="right">

						<a href="<?php echo wp_logout_url(home_url()); ?>">Sign Out</a>

					</div>

				</div>

			</div>

		</div>

	<?php endif; ?>
