<?php

function cptui_register_my_cpts_portfolio() {

	/**
	 * Post Type: Portfolio.
	 */

	$portfolio_labels = array(
		"name" => __( "Portfolio", "custom-post-type-ui" ),
		"singular_name" => __( "Portfolio Item", "custom-post-type-ui" ),
		"archives" => __( "Portfolio", "custom-post-type-ui" ),
	);

	$portfolio = array(
		"label" => __( "Portfolio", "custom-post-type-ui" ),
		"labels" => $portfolio_labels,
		"description" => "My work ranges from higher education marketing, developing for WordPress and OUCampus, to teaching at the college level, and illustration.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "category", "post_tag" ),
    );
    

    // Projects Post Type

    $projects_labels = array(
		"name" => __( "Projects", "custom-post-type-ui" ),
		"singular_name" => __( "Project", "custom-post-type-ui" ),
		"archives" => __( "Projects", "custom-post-type-ui" ),
	);

	$projects = array(
		"label" => __( "Projects", "custom-post-type-ui" ),
		"labels" => $projects_labels,
		"description" => "A collection of my side projects.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projects", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

    register_post_type( "portfolio", $portfolio );
    register_post_type( "projects", $projects );
}

add_action( 'init', 'cptui_register_my_cpts_portfolio' );


?>