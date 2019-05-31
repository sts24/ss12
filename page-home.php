<?php get_header(); ?>
<main>
<section class="row padding-x-3">
    <div class="col-s-12 col-m-8">

        <h2 class="margin-top-0">Design & Code</h2>

        <p>Any web site is bigger than the sum of it’s parts. A great site needs a strong front-end framework to drive the visual experience for the user. I believe in building projects that strive for visual aesthetics, accessibility, and a code base that works in favor of the user experience. <a href="about/">More about myself</a></p>

    </div>
    <div class="col-s-12 col-m-4">
            
        <h3 class="margin-top-0">What I Work On</h3>

        <ul class="icon-grid">
            <li aria-label="HTML"><?php svg_icon('icon-html','icon-size-3'); ?></li>
            <li aria-label="Sass"><?php svg_icon('icon-sass','icon-size-3'); ?></li>
            <li aria-label="Word Press"><?php svg_icon('icon-wordpress','icon-size-3'); ?></li>
            <li aria-label="PHP"><?php svg_icon('icon-php','icon-size-3'); ?></li>
            <li aria-label="Vue"><?php svg_icon('icon-vue','icon-size-3'); ?></li>
            <li aria-label="Gulp"><?php svg_icon('icon-gulp','icon-size-3'); ?></li>
            <li aria-label="Node"><?php svg_icon('icon-node','icon-size-3'); ?></li>
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
                'order' => 'DESC',
                'meta_key' => 'hightlight-post',
                'meta_value' => '1'
            ));

            echo '<ul class="featured-grid">';

            while ( $query->have_posts() ) {
                $query->the_post(); ?>
            
                <li>
                    <a href="<?php the_permalink(); ?>" class="featured-grid-item" aria-label="<?php the_title(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <header role="presentation" id="<?php echo $post->post_name; ?>"><?php the_title(); ?></header>
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
            
                <?php                 
                    postTitle('h3');
                    echo '<p>'. get_the_excerpt() .'... <a href="'. get_the_permalink() .'">Read More</a></p>';
                ?>

                <a href="journal/" class="btn margin-top-1">Read the Journal</a>

            <?php }
            
            wp_reset_postdata();
        ?>

        
    </div>
</section>


<?php get_footer(); ?>
