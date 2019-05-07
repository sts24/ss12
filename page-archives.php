<?php get_header();

get_template_part( 'template-parts/blog-header' );

echo '<main class="section-row">';
echo '<div class="site-content">';

echo wp_get_archives(array(
	'type' => 'monthly',
	'post_type' => 'post'
));




echo '</div>';
echo '</main>';

get_footer(); ?>