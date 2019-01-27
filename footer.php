
<?php if(!is_page('home')){ ?>
<footer class="site-footer blue-waves-bg">

<nav class="site-footer-nav">
<?php 
    wp_nav_menu(array(
        'theme_location' => 'special_links',
        'menu_id' => 'footer-special-links',
        'menu_class' => 'special-links',
        'container' => '',
        'depth' => 1

    )); 
?>
</nav>

</footer>
<?php } ?>


</div>

<script src="<?php bloginfo('template_url'); ?>/js/ss-12.js"></script>

</body>
</html>