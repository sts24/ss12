<section class="col-s-12 margin-x-3 padding-bottom-3 blog-post blog-post-listing-item">

	<h2 class="margin-top-0">
		<div class="blog-link-icon">
			<?php svg_icon('icon-link'); ?>
		</div>
		<a href="<?php echo get_field('url'); ?>"><?php the_title(); ?></a>
	</h2>
	<?php the_content(); ?>

</section>