<?php
/**
 * Register widget area.
 */

function meridian_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'meridian' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'meridian' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 1', 'meridian' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here.', 'meridian' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 2', 'meridian' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here.', 'meridian' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 3', 'meridian' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here.', 'meridian' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__( 'CTA Sidebar (Landing pages)', 'meridian' ),
            'id'            => 'cta-sidebar',
            'description'   => esc_html__( 'Used on landing page templates.', 'meridian' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'meridian_widgets_init' );
