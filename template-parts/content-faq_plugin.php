<?php



$title = get_the_title();
$content = get_the_content();

$microdata = array(
	'@context' => 'https://schema.org',
	'@type' => 'FAQPage',
	'mainEntity' => array(
		array(
			'@type' => 'Question',
			'name' => $title,
			'acceptedAnswer' => array(
				'@type' => 'Answer',
				'text' => $content
			)
		)
	)
);
?>
<div class="group">
	<h3 class="faq-question"><?php echo the_title(); ?><i class="fas fa-arrow-alt-circle-down"></i></h3>
	<div class="faq-answer"><?php echo the_content(); ?></div>
</div>


<script type="application/ld+json">
	<?php echo json_encode($microdata, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>