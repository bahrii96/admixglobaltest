<?php

// Adding code before closing head tag

add_action('wp_head', function () {
	if (get_theme_mod('header-scripts-settings')) :
		echo get_theme_mod('header-scripts-settings');
	endif;
});

// Adding code before closing body tag

add_action('wp_footer', function () {
	if (get_theme_mod('footer-scripts-settings')) :
		echo get_theme_mod('footer-scripts-settings');
	endif;
});


// blocks connect
include 'inc/blocks/blocks-connect.php';

/* Custom Theme Settings funcitons.php */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

register_nav_menus(array(
	'primary_left' => __('Primary Menu'),
));

add_theme_support('post-thumbnails');

function allow_svg_upload($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'allow_svg_upload');

include 'inc/settings.php';
include 'inc/customizer-theme-settings.php';
include 'inc/assets.php';
include 'inc/disable-emojis.php';
include 'inc/features.php';



require_once get_stylesheet_directory() . '/inc/navigation.php';


function create_custom_post_type()
{
	register_post_type(
		'faq',
		array(
			'labels' => array(
				'name' => __('FAQ'),
				'singular_name' => __('FAQ')
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		)
	);
}
add_action('init', 'create_custom_post_type');





function my_enqueue_scripts()
{
	wp_enqueue_script('custom-ajax', get_template_directory_uri() . '/assets/js/ajax-script.js', array('jquery'), '1.0', );

	wp_localize_script('custom-ajax', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');




function load_faq_posts_callback()
{
	$args = array(
		'post_type' => 'faq',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'orderby' => 'title',
		'order' => 'ASC'
	);

	$faq_query = new WP_Query($args);

	if ($faq_query->have_posts()) :
		?>
				<?php
		while ($faq_query->have_posts()) : $faq_query->the_post();
			include(get_template_directory() . '/template-parts/content-faq_ajax.php');
		endwhile;
		?>
		<?php 
		wp_reset_postdata();
	else :
		echo 'No FAQ posts found.';
	endif;

	die(); 
}
add_action('wp_ajax_load_faq_posts', 'load_faq_posts_callback');
add_action('wp_ajax_nopriv_load_faq_posts', 'load_faq_posts_callback');

