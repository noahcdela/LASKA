<?php

function additional_custom_files() {
    if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', false, '3.3.1', true);
        wp_enqueue_script('jquery');
        
        wp_enqueue_script('jquery-easing', get_theme_file_uri('/js/jquery.easing.min.js'), array ('jquery'), '1.0', true);
        wp_enqueue_script('flickity-js', get_theme_file_uri('/js/flickity.js'), array ('jquery'), '1.0', true);
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/functions.js', NULL, 1.0, true);
	}

    wp_enqueue_style('font-inconsolata', '//fonts.googleapis.com/css?family=Inconsolata:400,700');
    wp_enqueue_style('flickity', '//unpkg.com/flickity@2/dist/flickity.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'additional_custom_files' );

function features() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'features');