<?php get_header();

get_template_part( 'template-parts/blog-header' );

echo '<main class="row padding-x-3">';
echo '<div class="col-s-12">';

echo wp_get_archives(array(
	'type' => 'monthly',
	'post_type' => 'post'
));




echo '</div>';
echo '</main>';

get_footer(); ?>