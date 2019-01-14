<section class="listing-item">
    <div class="listing-image">
    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->id,'large'); ?></a>
    </div>
    <div class="listing-content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    </div>
</section>