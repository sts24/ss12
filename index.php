<?php 

get_header();
get_template_part( 'template-parts/blog-header' );

?>

<main class="row padding-bottom-3">

	<?php if (have_posts() ) { ?>
		<?php while (have_posts() ) {
			the_post();
			if( has_post_format( 'link' )){
				get_template_part( 'template-parts/blog-link-listing' );
			} else {
				get_template_part( 'template-parts/blog-posts-listing' );
			}
		}
		?>
		
		<div class="row row-spaced">
			<div class="col-auto"><?php next_posts_link( 'Older Posts' ); ?></div>
			<div class="col-auto"><?php previous_posts_link( 'Newer Posts' ); ?></div>
		</div>

	<?php } else {
		// no posts found
	} ?>

	

</main>

<?php get_footer(); ?>