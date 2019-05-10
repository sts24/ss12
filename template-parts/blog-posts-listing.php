<?php

	$link = (get_field('url') !== false) ? get_field('url') : get_permalink();

?>


<section class="col-s-12 margin-x-3 padding-bottom-3 blog-post blog-post-listing-item">

	<h2 class="margin-top-0">
		<?php if(get_field('url') !== false){ 
			echo '<div class="blog-link-icon">';
			svg_icon('icon-link');
			echo '</div>';
		} ?>
		<a href="<?php echo $link; ?>"><?php the_title(); ?></a>
	</h2>
	<?php the_content(); ?>

</section>