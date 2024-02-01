<?php

function firsttheme_files() {
	wp_enqueue_style('main-styling', get_stylesheet_uri() );
	wp_enqueue_script('main-js',get_template_directory_uri(). '/js/index.js',array(),'1.1',true);
}
add_action( 'wp_enqueue_script', 'firsttheme_files');

register_nav_menus(array('firsttheme_mainmenu'=>'main menu', 'firsttheme_footermenu' => 'footer menu' ));

?>
