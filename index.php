<?php get_header();

get_template_part( 'template-parts/blog-header' );

echo '<main class="row padding-bottom-3">';


if (have_posts() ) {
	while (have_posts() ) {
		the_post();
		get_template_part( 'template-parts/blog-posts-listing' );
	}
} else {
	// no posts found
}


echo '</main>';

get_footer(); ?>