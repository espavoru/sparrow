<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_enqueue_scripts', 'header_scripts');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/css/media-queries.css');
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css');
}

function scripts_theme() {
    wp_enqueue_script('jquery-1.10.2.min.js', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js');
    wp_enqueue_script('jquery-migrate-1.2.1.min.js', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
    wp_enqueue_script('jquery.flexslider.js', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
    wp_enqueue_script('doubletaptogo.js', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
    wp_enqueue_script('init.js', get_template_directory_uri() . '/assets/js/init.js');
};

function header_scripts() {
    wp_enqueue_script('modernizr.js', get_template_directory_uri() . '/assets/js/modernizr.js');
}

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Header menu' );
	register_nav_menu( 'bottom', 'Footer menu' );
}
