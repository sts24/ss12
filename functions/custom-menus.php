<?php



function site_nav() {

	$locations = array(
        'site_nav' => __( 'Main Site Nav'),
        'special_links' => __( 'Special Links'),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'site_nav' );

?>