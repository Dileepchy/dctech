<?php
// Theme setup
function custom_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');  
    // to enable featured image
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-header');
    add_theme_support('custom-logo', array('height' => 100, 'width' => 100));

    // Register navigation menus
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
        'secondary-menu' => 'Secondary Menu',
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');

// Enqueue styles and scripts
function custom_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('custom-style', get_stylesheet_uri());

    // Enqueue custom script
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
