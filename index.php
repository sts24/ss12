<?php get_header();

get_template_part( 'template-parts/page-title' );

echo '<main class="site-content">';

if (have_posts() ) {
	while (have_posts() ) {
		the_post();
		get_template_part( 'template-parts/post-item-listing' );
	}
} else {
	// no posts found
}

echo '</main>';

get_footer(); ?>