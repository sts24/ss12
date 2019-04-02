<?php get_header(); ?>

<main class="site-content">

    <?php 
        while ( have_posts() ) :
            the_post();

            the_content(); 
            
        endwhile;
    ?>



    <?php

        $query = new WP_Query(array(
            'post_type' => array('portfolio'),
            'posts_per_page' => 4,
            'order' => 'dsc'
        ));

        echo '<ul class="featured-grid">';

    	while ( $query->have_posts() ) {
		    $query->the_post(); ?>
        
            <li>
                <a href="<?php the_permalink(); ?>" class="featured-grid-item">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <header><?php the_title(); ?></header>
                </a>
            </li>

        <?php }
        
        echo '</ul>';
        
        wp_reset_postdata();
    ?>

</main>

<?php get_footer(); ?>
