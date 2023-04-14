<?php

// support for theme
function theme_support(){
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'theme_support');


// loads the misc css styling files
function load_css(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', 'bootstrap', false, 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
}
add_action('wp_enqueue_scripts', 'load_css');


// loads the misc javascript files
function load_js(){
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', 'jquery', false, true);
}
add_action('wp_enqueue_scripts', 'load_js');