<?php

// Add Theme Support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');

// Load in our CSS
function wphierarchy_enqueue_styles()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap.min.css', [], time(), 'all');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

}
function my_scripts_method()
{
    wp_enqueue_script(
        'jquery',
        get_stylesheet_directory_uri() . '/js/jquery-3.3.1.slim.min.js', time(), 'all'
    );
    wp_enqueue_script(
        'bootstrap',
        get_stylesheet_directory_uri() . '/js/bootstrap.min.js', time(), 'all'
    );
    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/js/scripts.js', time(), 'all'
    );
}

add_action('wp_footer', 'my_scripts_method');

add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_styles');

// Register Menu Locations
register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'wpheirarchy'),
]);

if (!defined(img_path)) {
    define('img_path', get_stylesheet_directory_uri() . '/images');
}
