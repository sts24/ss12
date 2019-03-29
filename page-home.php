<?php get_header(); ?>

<section class="home-content">

    <header class="home-header blue-waves-bg">

        <div class="home-header-contents">
            <h1 class="site-title"><span class="hide"><?php bloginfo('name'); ?></span></h1>
            <h2><?php bloginfo('description'); ?></h2>

            <?php 
                while ( have_posts() ) :
                    the_post();
            
                 the_content(); 
                 
                endwhile;
            ?>


            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'special_links',
                    'menu_id' => 'home-special-links',
                    'menu_class' => 'special-links',
                    'container' => '',
                    'depth' => 1

                )); 
            ?>
        </div>

    </header>

    <aside class="home-decoration"></aside>

</section>

<?php get_footer(); ?>