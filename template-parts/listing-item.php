<section class="listing-item">
    <div class="listing-image">
        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->id,'large'); ?></a>
    </div>
    <div class="listing-content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>

        <div class="row row-spaced row-top margin-x-1">
            <?php inlineTagList(); ?>
            <a href="<?php the_permalink(); ?>" class="btn">View More</a>
        </div>
    </div>
</section>