<?php

function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'firstWebsitestyles', get_stylesheet_uri() );
	// wp_enqueue_scripts("index", get_template_directory_uri() . "/js/index.js");
	
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


function custom_theme_navigation_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
        )
    );
}

add_action( 'init', 'custom_theme_navigation_menus' );


function enqueue_custom_scripts() {
    // Enqueue your custom JS file
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/index.js', array('jquery'), '1.0', true);
}
?>
