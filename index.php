<?php 

get_header();
get_template_part( 'template-parts/blog-header' );

?>

<main class="row padding-bottom-3">

	<?php if (have_posts() ) { ?>
		<?php while (have_posts() ) {
			the_post();
			get_template_part( 'template-parts/blog-posts-listing' );
		}
		?>
		
		<div class="row row-spaced">
			<div><?php previous_posts_link( 'Older posts' ); ?></div>
			<div><?php next_posts_link( 'Newer posts' ); ?></div>
		</div>

	<?php } else {
		// no posts found
	} ?>

	

</main>

<?php get_footer(); ?>