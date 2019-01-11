<?php 

get_header();

while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/portfolio' );

endwhile;

get_footer(); ?>