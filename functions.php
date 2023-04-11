<?php

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