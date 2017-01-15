<?php

/* Your Websites */
if(!function_exists('dp_your_websites') && !is_admin()) {

	function dp_your_websites() {

		$sites = [];
		$user_id = get_current_user_id();
		$cache = dp_cache_get('dp_sites_' . $user_id);

		if(!$cache) {

			$current_site = get_current_blog_id();

			foreach(get_blogs_of_user($user_id) as $blog) {

				$people = count(ORM::for_table('dp_stats')
					->where('site_id', $blog->userblog_id)
					->where('is_unique', 1)
					->where('is_robot', 0)
					->where('month', date('m'))
					->where('year', date('Y'))
					->find_many());

				if(!$people) {

					$people = 0;

				}

				$views = count(ORM::for_table('dp_stats')
					->where('site_id', $blog->userblog_id)
					->where('is_robot', 0)
					->where('month', date('m'))
					->where('year', date('Y'))
					->find_many());

				if(!$views) {

					$views = 0;

				}

				$runtime = number_format((int) get_blog_option($blog->userblog_id, 'dp_days', 0));

				$sites[] = [
					'url' => $blog->siteurl,
					'name' => $blog->blogname,
					'views' => number_format($views),
					'people' => number_format($people),
					'runtime' => $runtime
				];

			}

			dp_cache_set('dp_sites_' . $user_id, $sites);

		} else {

			$sites = $cache;

		}

		return $sites;

	}

}

/* Themes Post Type */
add_action('init', function() {

	register_post_type('theme', [
		'labels' => [
			'name' => 'Themes',
			'singular_name' => 'Theme'
		],
		'description' => 'Themes',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => ['slug' => 'theme', 'with_front' => false],
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']
	]);

});

/* Theme setup */
add_action('after_setup_theme', function() {

	/** Support */
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('html5', [
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption']
	);

});

/* Scripts and Styles */
add_action('wp_enqueue_scripts', function() {


	wp_deregister_script('jquery');

	wp_enqueue_style('style', get_stylesheet_uri(), [], time());
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', [], '3.1.1', true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', [], time(), true);

});

/* Sidebar support for blog */
add_action('widgets_init', function() {

	register_sidebar([
		'name' => 'Blog Sidebar',
		'id' => 'blog-sidebar'
	]);

});

/* Prevent getting hacked with the Brute Force Amplification Attack */
add_filter('xmlrpc_methods', function($methods) {

	unset($methods['system.multicall']);

	return $methods;

});

/* Disable EMOJIS */
add_filter('emoji_svg_url', '__return_false');
add_action('init', function() {

	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

});