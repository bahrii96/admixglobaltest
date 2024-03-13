<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<h3 class="faq-question"><?php the_title(); ?><i class="fas fa-arrow-alt-circle-down"></i></h3>
		<div class="faq-answer"><?php the_content(); ?></div>
<?php endwhile;
endif;
?>