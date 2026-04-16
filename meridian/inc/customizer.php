<?php
/**
 * Customizer additions.
 */

function meridian_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'meridian_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'meridian_customize_partial_blogdescription',
            )
        );
    }
    
    // Theme options
    $wp_customize->add_panel( 'meridian_theme_options', array(
        'priority'       => 130,
        'title'          => esc_html__( 'Theme Options', 'meridian' ),
    ) );
    
    // Hero Section
    $wp_customize->add_section( 'meridian_hero', array(
        'title'    => esc_html__( 'Hero Section', 'meridian' ),
        'panel'    => 'meridian_theme_options',
    ) );
    
    $wp_customize->add_setting( 'meridian_hero_title', array(
        'default'           => 'Scale your business with Meridian',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'meridian_hero_title', array(
        'label'    => esc_html__( 'Title', 'meridian' ),
        'section'  => 'meridian_hero',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'meridian_hero_subtitle', array(
        'default'           => 'The all-in-one platform for modern teams to collaborate, ship faster, and grow revenue.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'meridian_hero_subtitle', array(
        'label'    => esc_html__( 'Subtitle', 'meridian' ),
        'section'  => 'meridian_hero',
        'type'     => 'textarea',
    ) );
    
    // Client Logos
    $wp_customize->add_section( 'meridian_clients', array(
        'title'    => esc_html__( 'Client Logos', 'meridian' ),
        'panel'    => 'meridian_theme_options',
    ) );
    
    for ( $i = 1; $i <= 6; $i++ ) {
        $wp_customize->add_setting( "meridian_client_logo_$i", array(
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "meridian_client_logo_$i", array(
            'label'    => sprintf( esc_html__( 'Logo %d', 'meridian' ), $i ),
            'section'  => 'meridian_clients',
        ) ) );
    }
    
    // Social Links
    $wp_customize->add_section( 'meridian_social', array(
        'title'    => esc_html__( 'Social Links', 'meridian' ),
        'panel'    => 'meridian_theme_options',
    ) );
    
    $socials = array( 'github' => 'GitHub', 'linkedin' => 'LinkedIn', 'twitter' => 'Twitter/X', 'email' => 'Email' );
    foreach ( $socials as $key => $label ) {
        $wp_customize->add_setting( "meridian_social_$key", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( "meridian_social_$key", array(
            'label'    => $label . ' URL',
            'section'  => 'meridian_social',
            'type'     => 'url',
        ) );
    }
}
add_action( 'customize_register', 'meridian_customize_register' );

function meridian_customize_partial_blogname() {
    bloginfo( 'name' );
}

function meridian_customize_partial_blogdescription() {
    bloginfo( 'description' );
}
