<section class="col-s-12 margin-x-3 padding-bottom-3 blog-post blog-post-listing-item">

	<h2 class="margin-top-0">
		<?php svg_icon('icon-link','icon-size-1 icon-inline blog-link-icon'); ?>
		<a href="<?php echo get_field('url'); ?>"><?php the_title(); ?></a>
	</h2>
	<?php the_content(); ?>

</section>