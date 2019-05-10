<?php

	$link = (get_field('URL') !== '') ? get_field('URL') : get_the_permalink();

?>


<section class="col-s-12 margin-x-3 padding-bottom-3 blog-post blog-post-listing-item">

	<h2 class="margin-top-0">
		<?php if(get_field('URL') !== ''){ svg_icon('icon-link'); } ?>
		<a href="<?php echo $link; ?>"><?php the_title(); ?></a>
	</h2>
	<?php the_content(); ?>

</section>