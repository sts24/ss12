<main class="row padding-x-3 blog-post">

    <header class="col-s-12 blog-post-meta margin-bottom-3">
        <?php postTitle('h1'); ?>
        <time><?php the_date(); ?></time>
    </header>

    <article class="col-s-12 blog-post-content">
        <?php the_content(); ?>
    </article>

</main>