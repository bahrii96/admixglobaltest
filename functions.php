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
		'cars',
		array(
			'labels' => array(
				'name' => __('Cars'),
				'singular_name' => __('Car')
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		)
	);
}

add_action('init', 'create_custom_post_type');

function create_custom_taxonomies()
{
	register_taxonomy('brand', 'cars', array(
		'hierarchical' => true,
		'label' => 'Brand',
		'query_var' => true,
		'rewrite' => array('slug' => 'brand'),
	));

	register_taxonomy('car_type', 'cars', array(
		'hierarchical' => true,
		'label' => 'Car Type',
		'query_var' => true,
		'rewrite' => array('slug' => 'car-type'),
	));

	register_taxonomy('color', 'cars', array(
		'hierarchical' => true,
		'label' => 'Color',
		'query_var' => true,
		'rewrite' => array('slug' => 'color'),
	));

	register_taxonomy('year_of_manufacture', 'cars', array(
		'hierarchical' => true,
		'label' => 'Year of Manufacture',
		'query_var' => true,
		'rewrite' => array('slug' => 'year-of-manufacture'),
	));
}

add_action('init', 'create_custom_taxonomies');


function my_enqueue_scripts()
{
	wp_enqueue_script('custom-ajax', get_template_directory_uri() . '/assets/js/ajax-script.js', array('jquery'), '1.0', true);

	wp_localize_script('custom-ajax', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function my_custom_function()
{
	$taxonomy_value = sanitize_text_field($_POST['taxonomy']);
	$price = intval($_POST['price']);


	$taxonomy_parts = explode('-', $taxonomy_value);

	$first_part = $taxonomy_parts[0];
	$second_part = $taxonomy_parts[1];

	$args = array(
		'post_type'      => 'cars',
		'posts_per_page' => -1,
	);

	if (!empty($price)) {
		$args['meta_query'] = array(
			array(
				'key'     => 'price',
				'value'   => $price,
				'type'    => 'NUMERIC',
				'compare' => '>=',
			),
		);
	}

	if (!empty($taxonomy_value)) {
		$taxonomy = '';

		if (strpos($first_part, 'brand') !== false) {
			$taxonomy = 'brand';
		} elseif (strpos($first_part, 'car_type') !== false) {
			$taxonomy = 'car_type';
		} elseif (strpos($first_part, 'color') !== false) {
			$taxonomy = 'color';
		} elseif (strpos($first_part, 'year_of_manufacture') !== false) {
			$taxonomy = 'year_of_manufacture';
		}

		$args['tax_query'] = array(
			array(
				'taxonomy' => $taxonomy,
				'field'    => 'slug',
				'terms'    => $second_part,
			),
		);
	}
	global $post;
	$query = new WP_Query($args);
	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();
			$prices = get_field('price', $post->ID);
?>
			<div class="car-item">
				<?php
				if (has_post_thumbnail()) {
					the_post_thumbnail('medium');
				}
				?>
				<div class="car-item__inf">
					<h2><?php the_title(); ?></h2>
					<h3><span>Price: </span><?php echo $prices ?></h3>
				</div>
			</div>

<?php
		endwhile;
		wp_reset_postdata();
	else :
		echo 'Empty.....';
	endif;

	wp_die();
}

add_action('wp_ajax_my_custom_action', 'my_custom_function');
add_action('wp_ajax_nopriv_my_custom_action', 'my_custom_function');
