<?php get_header(); ?>

<section class="home-content">

    <header class="home-header blue-waves-bg">

        <div class="home-header-contents">
            <h1 class="site-title"><span class="hide"><?php bloginfo('name'); ?></span></h1>
            <h2><?php bloginfo('description'); ?></h2>

            <p>I am a web designer <a href="<?php bloginfo('url'); ?>/about-scott">born and raised in Southern California</a>. With a specialty in front-end development, I have extensive experience with working in higher education. See my <a href="<?php bloginfo('url'); ?>/portfolio">portfolio of work</a> or check up on my <a href="<?php bloginfo('url'); ?>/projects">latest side projects</a>.

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