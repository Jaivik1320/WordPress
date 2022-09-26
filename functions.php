<?php
/*
* Theme Functions File
*/
function Jpcompany_theme_setup() {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size ('home-featured', 680, 400, array('center', 'center'));
    add_image_size ('single-post', 580, 272, array('center', 'center'));
    add_image_size ('portfolio-thumb', 374, 260, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'Jpcompany' )
    ) );
    
};
add_action('after_setup_theme', 'Jpcompany_theme_setup');

function Jpcompany_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');

    wp_enqueue_script('Jpcompany-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
    wp_enqueue_script('Jpcompany-breakpoints', get_template_directory_uri(). '/assets/js/breakpoints.min.js');
    wp_enqueue_script('Jpcompany-util', get_template_directory_uri(). '/assets/js/util.js');
    wp_enqueue_script('Jpcompany-browser', get_template_directory_uri(). '/assets/js/main.js');

}
add_action('wp_enqueue_scripts', 'Jpcompany_scripts');

function Jpcompany_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'Jpcompany' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Home Banner', 'Jpcompany' ),
        'id'            => 'home-banner',
        'description'   => 'Banner Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Home Services', 'Jpcompany' ),
        'id'            => 'home-services',
        'description'   => 'Services Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'Jpcompany' ),
        'id'            => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'Jpcompany' ),
        'id'            => 'footer-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'Jpcompany' ),
        'id'            => 'footer-3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
}
add_action( 'widgets_init', 'Jpcompany_widgets_init' );

//Custom Post Types
require get_template_directory().'/inc/portfolio.php';