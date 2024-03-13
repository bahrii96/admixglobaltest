<?php /* Template name: FAQ ACF field */
get_header();
$related_faqs = get_field('related_faqs');

$args = array(
	'post_type' => 'faq',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'post__in' => $related_faqs,
	'orderby' => 'post__in',
	'post_status' => 'publish',
);

$faq_query = new WP_Query($args);
?>
<section>
	<div class="container">
		<div id="accordion">
			<?php
			if ($faq_query->have_posts()) :
				while ($faq_query->have_posts()) : $faq_query->the_post();
					include(get_template_directory() . '/template-parts/content-faq_plugin.php');

				endwhile;
				wp_reset_postdata();
			else :
				echo '....';
			endif;

			get_footer();
			?>
		</div>
	</div>
</section>