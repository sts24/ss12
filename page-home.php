<?php get_header(); ?>

<section class="row padding-bottom-3">
    <div class="col-s-12 col-m-8">

        <h2>Design & Code</h2>

        <p>Any web site is bigger than the sum of it’s parts. A great site needs a strong front-end framework to drive the visual experience for the user. I believe in building projects that strive for visual aesthetics, accessibility, and a code base that works in favor of the user experience. <a href="about/">More about myself</a></p>

    </div>
    <div class="col-s-12 col-m-4">
            
        <h3>What I Work On</h3>

        <ul class="icon-grid">
            <li><?php svg_icon('icon-html'); ?></li>
            <li><?php svg_icon('icon-sass'); ?></li>
            <li><?php svg_icon('icon-wordpress'); ?></li>
            <li><?php svg_icon('icon-php'); ?></li>
            <li><?php svg_icon('icon-vue'); ?></li>
            <li><?php svg_icon('icon-gulp'); ?></li>
            <li><?php svg_icon('icon-node'); ?></li>
        </ul>

    </div>
</section>


<section class="row padding-bottom-3">

    <div class="col-s-12">
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

<section class="row padding-bottom-5">
    <div class="col-s-12">

        <h2>Latest from the Journal</h2>
        
        <?php

            $query = new WP_Query(array(
                'posts_per_page' => 1,
                'order' => 'dsc'
            ));

            while ( $query->have_posts() ) {
                $query->the_post(); ?>
            
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>

            <?php }
            
            wp_reset_postdata();
        ?>

        <a href="journal/" class="btn margin-top-1">Read the Journal</a>
    </div>
</section>


<?php get_footer(); ?>
