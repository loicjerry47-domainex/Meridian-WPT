<?php
/**
 * Meridian functions and definitions
 *
 * @package Meridian
 */

if ( ! defined( 'MERIDIAN_VERSION' ) ) {
    define( 'MERIDIAN_VERSION', '1.0.0' );
}

function meridian_setup() {
    load_theme_textdomain( 'meridian', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
    
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'meridian' ),
        'footer' => esc_html__( 'Footer Menu', 'meridian' ),
    ) );
}
add_action( 'after_setup_theme', 'meridian_setup' );

function meridian_scripts() {
    wp_enqueue_style( 'meridian-style', get_stylesheet_uri(), array(), MERIDIAN_VERSION );
    wp_enqueue_style( 'meridian-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), MERIDIAN_VERSION );
    wp_enqueue_style( 'meridian-dark-mode', get_template_directory_uri() . '/assets/css/dark-mode.css', array(), MERIDIAN_VERSION );
    wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );

    wp_enqueue_script( 'meridian-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), MERIDIAN_VERSION, true );
    wp_enqueue_script( 'meridian-dark-mode-toggle', get_template_directory_uri() . '/assets/js/dark-mode-toggle.js', array(), MERIDIAN_VERSION, true );
    wp_enqueue_script( 'meridian-animations', get_template_directory_uri() . '/assets/js/animations.js', array(), MERIDIAN_VERSION, true );
    
    if ( is_front_page() || is_page_template( 'page-templates/template-landing.php' ) ) {
        wp_enqueue_script( 'meridian-testimonial-slider', get_template_directory_uri() . '/assets/js/testimonial-slider.js', array(), MERIDIAN_VERSION, true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'meridian_scripts' );

require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/template-tags.php';
