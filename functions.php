<?php

require_once('functions/custom-post-types.php');
require_once('functions/custom-menus.php');
require_once('functions/wp-filters.php');

// theme supports
function theme_setup(){

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('post-formats', array('link'));

}

add_action( 'after_setup_theme', 'theme_setup' );

// custom functions
function svg_icon($icon_name,$class=null){
    $class = isset($class) ? 'svg-icon '.$class : 'svg-icon';
    echo '<svg class="'. $class .'" shape-rendering="geometricPrecision">
        <use xlink:href="#'.$icon_name.'"></use>
    </svg>';
}


// inline tag list
function inlineTagList(){
    $tags = get_the_tags();

    if($tags){
        echo '<ul class="list-inline tag-list">';
        foreach($tags as $key=>$item){
            echo '<li>'. $item->name .'</li>';
        }
        echo '</ul>';
    }
}


// blog title
function postTitle($tag,$class=null){
    $class = (isset($class)) ? 'class="'.$class.'"' : '';
    ?>
        <<?php echo $tag.' '.$class;?>>
            <?php if( has_post_format( 'link' )){ ?>
                <?php svg_icon('icon-link','icon-size-1 icon-inline blog-link-icon'); ?>
                <a href="<?php echo get_field('url'); ?>"><?php the_title(); ?></a>
            <?php } else { ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php } ?>
        </<?php echo $tag; ?>>
<?php }


?>