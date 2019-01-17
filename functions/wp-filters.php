<?php

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );





// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
 return ' <a class="moretag" href="'.get_permalink($post->ID).'">Read more about '.get_the_title().'</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>