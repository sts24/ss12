<?php 

get_header();

get_template_part( 'template-parts/blog-header' );

while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/blog-post' );


endwhile;


get_footer(); ?>