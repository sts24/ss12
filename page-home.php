<?php get_header(); ?>

<section class="section-row bg-gray">
    <div class="site-content grid">
        <div class="grid-col">

            <h2>Design & Code</h2>

            <p>Any web site is bigger than the sum of it’s parts. A great site needs a strong front-end framework to drive the visual experience for the user. I believe in building projects that strive for visual aesthetics, accessibility, and a code base that works in favor of the user experience.</p>

        </div>
        <div class="grid-col">
            
            <h3>What I Work On</h3>

            <ul class="featured-grid">
                <li></li>
            </ul>
        </div>
    </div>
</section>


<section class="section-row bg-gray">

<div class="site-content">
    <h2>Featured Work</h2>

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
</div>
</section>

<section class="section-row bg-gray">

<div class="site-content">

    <h2>From the Journal</h2>
    
    <?php

        $query = new WP_Query(array(
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
</div>
</section>


<?php get_footer(); ?>
