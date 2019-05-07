<?php get_header();

// WP_Query arguments
$args = array(
	'post_type'              => array( 'portfolio' ),
	'order'                  => 'dsc',
	'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );


get_template_part( 'template-parts/page-title' ); ?>

<main class="row padding-x-3">
	<div class="col-s-12">
		<p class="intro"><?php echo get_post_type_object('portfolio')->description; ?></p>
		<hr />

			<?php // The Loop
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
			?>
	</div>
</main>

<?php get_footer(); ?>