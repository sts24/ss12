<div class="site-content">

    <?php
        // show regular post content
        while(have_posts()){
            the_post();
            the_content(); 
        }
    ?>

    </div>