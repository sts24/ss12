<?php 

get_header();

while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/page' );

endwhile;

get_footer(); ?>