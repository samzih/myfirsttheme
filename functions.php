<?php

// support for theme
function theme_support(){
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'theme_support');


// navigation menu(s) that can be controlled via the WordPress admin panel
function menus(){
    register_nav_menus(
        array(
            'top-menu' => 'Top Menu Location',
            'side-menu' => 'Side Menu Location',
            //'socials-menu' => 'Bottom Social Media Menu Location'
        )
    );
}
add_action('init', 'menus');


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
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', '', false, true);
}
add_action('wp_enqueue_scripts', 'load_js');


// register the sidebar widgets
function sidebar_widgets()
{
	register_sidebar(array(
		'name' => 'Sidebar Widget Area 1',
		'id' => 'sidebar-widget-area-1',
		'description' => '',
		'before_widget' => '<ul><li>',
		'after_widget' => '</li></ul>',
		'before_title' => '',
		'after_title'=> '',
	));

	register_sidebar(array(
		'name' => 'Sidebar Widget Area 2',
		'id' => 'sidebar-widget-area-2',
		'description' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title'=> '',
	));

	register_sidebar(array(
		'name' => 'Sidebar Widget Area 3',
		'id' => 'sidebar-widget-area-3',
		'description' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title'=> '',
	));

	register_sidebar(array(
		'name' => 'Sidebar Widget Area 4',
		'id' => 'sidebar-widget-area-4',
		'description' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title'=> '',
	));
}
add_action('widgets_init', 'sidebar_widgets');


// register the footer widgets
function footer_widgets()
{
	register_sidebar(array(
		'name' => 'Footer Widget Area 1',
		'id' => 'footer-widget-area-1',
		'description' => 'Widgets added here will appear in the first column of the footer.',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Footer Widget Area 2',
		'id' => 'footer-widget-area-2',
		'description' => 'Widgets added here will appear in the second column of the footer.',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Footer Widget Area 3',
		'id' => 'footer-widget-area-3',
		'description' => 'Widgets added here will appear in the third column of the footer.',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'class' => 'social',
	));

	register_sidebar(array(
		'name' => 'Footer Widget Area 4',
		'id' => 'footer-widget-area-4',
		'description' => 'Widgets added here will appear in the fourth column of the footer.',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'footer_widgets');