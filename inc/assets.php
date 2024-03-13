<?php

function detect_assets()
{

	wp_deregister_script('jquery');

	if (!is_admin()) {
		/* Connect styles for Any Templates If needed */

		// if (is_page_template('views/layout.php')) {
		// 	wp_enqueue_style('layout', get_stylesheet_directory_uri()
		// 		. '/assets/css/pages/layout.css', array(), null);
		// }

		/* Connect main style */

		wp_enqueue_style('main-styles', get_stylesheet_directory_uri()
			. '/assets/css/main.css', array(), null);

		/*--------------------------------------------------
		-------------- Connect styles for Blog Archive and Single blog Post ----------- 
		---------------------------------------------------*/


		// Other Styles Scripts

		wp_enqueue_script('jquery', get_stylesheet_directory_uri()
			. '/assets/libs/jquery/jquery.min.js', '', '', true);

		wp_enqueue_script('main-scripts', get_stylesheet_directory_uri()
			. '/assets/js/main.js', '', '', false);

		// wp_enqueue_style('aos-styles', get_stylesheet_directory_uri() . '/assets/libs/aos/aos.css', array(), '1.0');

		// wp_enqueue_script('aos-scripts', get_stylesheet_directory_uri() . '/assets/libs/aos/aos.js', array('jquery'), '1.0', true);

		// wp_add_inline_script('aos-scripts', '
		// AOS.init({
		//     once: true, 
		//     duration: 1000 
		// });');

		// wp_register_style('swiper', get_stylesheet_directory_uri()
		// 	. '/assets/libs/swiper/swiper-bundle.min.css', array(), false);
		// wp_enqueue_style('swiper');
		// wp_register_script('swiper', get_stylesheet_directory_uri()
		// 	. '/assets/libs/swiper/swiper-bundle.min.js', 'jquery', '', false);
		// wp_enqueue_script('swiper');

		// wp_register_script(
		// 	'fancybox',
		// 	get_stylesheet_directory_uri() . '/assets/libs/fancybox/jquery.fancybox.min.js',
		// 	['jquery'],
		// 	'',
		// 	true
		// );
		// wp_enqueue_script('fancybox');

		// wp_register_style(
		// 	'fancybox',
		// 	get_stylesheet_directory_uri() . '/assets/libs/fancybox/jquery.fancybox.min.css',
		// 	[],
		// 	false
		// );
		// wp_enqueue_style('fancybox');

		wp_enqueue_script('jquery-ui-scripts', get_stylesheet_directory_uri() . '/assets/libs/jquery-ui/jquery-ui.min.js', array('jquery'), '1.0', );
	}
}
add_action('wp_enqueue_scripts', 'detect_assets');
