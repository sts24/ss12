<?php get_header();


// WP_Query arguments
$args = array(
	'post_type'              => array( 'portfolio' ),
	'order'                  => 'dsc',
	'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );


get_template_part( 'template-parts/page-title' );


echo '<main class="site-content">';


echo '<p class="intro">'.get_post_type_object('portfolio')->description.'</p>';
echo '<hr />';


// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		get_template_part( 'template-parts/listing-item' );
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

echo '</main>';


get_footer(); ?>