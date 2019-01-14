<?php

if(is_page() || is_single()){
    $title = get_the_title();
}

if(is_archive()){
    $title = get_the_archive_title();
}


?>


<header class="page-title">
    <div class="site-content">
        <h1><?php echo $title; ?></h1>
    </div>
</header>