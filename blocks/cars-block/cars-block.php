<?php

/**
 * Accordion Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<section class="cars">
	<div class="container">
		<div class="cars__filter">
			<form>
				<label for="taxonomy-filter">Filter for:</label>
				<select id="taxonomy-filter" name="taxonomy">
					<option value="">All</option>
					<?php
					$taxonomies = array('brand', 'car_type', 'color', 'year_of_manufacture');

					foreach ($taxonomies as $taxonomy) {
						$terms = get_terms($taxonomy, array('hide_empty' => false));

						if ($terms) {
							echo '<optgroup label="' . esc_attr($taxonomy) . '">';

							foreach ($terms as $term) {
								echo '<option value="' . esc_attr($taxonomy . '-' . $term->slug) . '">' . esc_attr($term->name) . '</option>';
							}

							echo '</optgroup>';
						}
					}
					?>
				</select>
			</form>
			<div class="cars__filter-price"> <input type="range" id="price-input" step="1000" min="1000" max="6000" value="1000">
				<span id="selected-value">1000</span>
			</div>
		</div>

		<div class="cars__item-container">
			<?php
			$args = array(
				'post_type' => 'cars',
				'posts_per_page' => -1,
			);
			global $post;
			$query = new WP_Query($args);
			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
					$price = get_field('price', $post->ID);
			?>
					<div class="car-item">
						<?php
						if (has_post_thumbnail()) {
							the_post_thumbnail('medium');
						}
						?>
						<div class="car-item__inf">
							<h2><?php the_title(); ?></h2>
							<h3><span>Price: </span><?php echo $price ?></h3>
						</div>
					</div>
			<?php
				endwhile;
				wp_reset_postdata();
			else :
				echo 'Немає доступних автомобілів.';
			endif;
			?>
		</div>
	</div>
</section>