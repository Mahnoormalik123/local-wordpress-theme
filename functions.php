<?php

function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'stylecss', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' )


?>
