<main class="row padding-x-3 blog-post">

    <header class="col-s-12 blog-post-meta margin-bottom-3">
        <h1><?php the_title(); ?></h1>
        <time><?php the_date(); ?></time>
    </header>

    <article class="col-s-12 blog-post-content">
        <?php the_content(); ?>
    </article>

</main>