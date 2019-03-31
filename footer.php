

<footer class="site-footer blue-waves-bg">

<nav class="site-footer-nav">
    <ul class="special-links">
<?php 
    foreach(wp_get_nav_menu_items('social-media') as $key=>$item){
        
        ?>
            <li class="menu-item">
                <a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>">
                    <svg class="svg-icon" shape-rendering="geometricPrecision">
                        <use xlink:href="#<?php echo get_field('css_classes', $item->ID); ?>"></use>
                    </svg>
                    <span><?php echo $item->title; ?></span>
                </a>
            </li>
        <?php
    }
?>
    </ul>
</nav>



</footer>



</div>

<script src="<?php bloginfo('template_url'); ?>/js/ss-12.js"></script>

</body>
</html>