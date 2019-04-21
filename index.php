<?php get_header();

get_template_part( 'template-parts/blog-header' );

echo '<main class="section-row">';
echo '<div class="site-content">';

if (have_posts() ) {
	while (have_posts() ) {
		the_post();
		get_template_part( 'template-parts/blog-posts-listing' );
	}
} else {
	// no posts found
}

echo '</div>';
echo '</main>';

get_footer(); ?>