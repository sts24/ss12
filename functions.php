<?php

require_once('functions/custom-post-types.php');
require_once('functions/custom-menus.php');
require_once('functions/wp-filters.php');

// theme supports
function theme_setup(){

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'link' ) );

}

add_action( 'after_setup_theme', 'theme_setup' );

// custom functions
function svg_icon($icon_name){
    echo '<svg class="svg-icon" shape-rendering="geometricPrecision">
        <use xlink:href="#'.$icon_name.'"></use>
    </svg>';
}


?>