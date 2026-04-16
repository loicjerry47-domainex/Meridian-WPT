<?php
/**
 * Custom Post Types setup
 */

function meridian_register_cpts() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post Type General Name', 'meridian' ),
        'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'meridian' ),
        'menu_name'             => __( 'Testimonials', 'meridian' ),
        'all_items'             => __( 'All Testimonials', 'meridian' ),
        'add_new_item'          => __( 'Add New Testimonial', 'meridian' ),
        'add_new'               => __( 'Add New', 'meridian' ),
        'new_item'              => __( 'New Testimonial', 'meridian' ),
        'edit_item'             => __( 'Edit Testimonial', 'meridian' ),
        'update_item'           => __( 'Update Testimonial', 'meridian' ),
        'view_item'             => __( 'View Testimonial', 'meridian' ),
    );
    $args = array(
        'label'                 => __( 'Testimonial', 'meridian' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
    );
    register_post_type( 'meridian_testimonial', $args );
}
add_action( 'init', 'meridian_register_cpts', 0 );

// Meta boxes for Testimonial CPT
function meridian_add_testimonial_metaboxes() {
    add_meta_box(
        'meridian_testimonial_details',
        __( 'Testimonial Details', 'meridian' ),
        'meridian_testimonial_metabox_callback',
        'meridian_testimonial',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'meridian_add_testimonial_metaboxes' );

function meridian_testimonial_metabox_callback( $post ) {
    wp_nonce_field( 'meridian_testimonial_save_data', 'meridian_testimonial_meta_nonce' );

    $client_name = get_post_meta( $post->ID, '_meridian_client_name', true );
    $client_title = get_post_meta( $post->ID, '_meridian_client_title', true );
    $company_name = get_post_meta( $post->ID, '_meridian_company_name', true );
    $rating = get_post_meta( $post->ID, '_meridian_rating', true );
    if ( ! $rating ) $rating = 5;

    echo '<div style="margin-bottom: 15px;">';
    echo '<label for="meridian_client_name" style="display:block;margin-bottom:5px;"><strong>' . __( 'Client Name', 'meridian' ) . '</strong></label>';
    echo '<input type="text" id="meridian_client_name" name="meridian_client_name" value="' . esc_attr( $client_name ) . '" style="width:100%;" />';
    echo '</div>';

    echo '<div style="margin-bottom: 15px;">';
    echo '<label for="meridian_client_title" style="display:block;margin-bottom:5px;"><strong>' . __( 'Client Title/Role', 'meridian' ) . '</strong></label>';
    echo '<input type="text" id="meridian_client_title" name="meridian_client_title" value="' . esc_attr( $client_title ) . '" style="width:100%;" />';
    echo '</div>';

    echo '<div style="margin-bottom: 15px;">';
    echo '<label for="meridian_company_name" style="display:block;margin-bottom:5px;"><strong>' . __( 'Company Name', 'meridian' ) . '</strong></label>';
    echo '<input type="text" id="meridian_company_name" name="meridian_company_name" value="' . esc_attr( $company_name ) . '" style="width:100%;" />';
    echo '</div>';

    echo '<div style="margin-bottom: 15px;">';
    echo '<label for="meridian_rating" style="display:block;margin-bottom:5px;"><strong>' . __( 'Rating (1-5)', 'meridian' ) . '</strong></label>';
    echo '<input type="number" min="1" max="5" id="meridian_rating" name="meridian_rating" value="' . esc_attr( $rating ) . '" style="width:100%;" />';
    echo '</div>';
}

function meridian_save_testimonial_meta( $post_id ) {
    if ( ! isset( $_POST['meridian_testimonial_meta_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( $_POST['meridian_testimonial_meta_nonce'], 'meridian_testimonial_save_data' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['meridian_client_name'] ) ) {
        update_post_meta( $post_id, '_meridian_client_name', sanitize_text_field( $_POST['meridian_client_name'] ) );
    }
    if ( isset( $_POST['meridian_client_title'] ) ) {
        update_post_meta( $post_id, '_meridian_client_title', sanitize_text_field( $_POST['meridian_client_title'] ) );
    }
    if ( isset( $_POST['meridian_company_name'] ) ) {
        update_post_meta( $post_id, '_meridian_company_name', sanitize_text_field( $_POST['meridian_company_name'] ) );
    }
    if ( isset( $_POST['meridian_rating'] ) ) {
        update_post_meta( $post_id, '_meridian_rating', absint( $_POST['meridian_rating'] ) );
    }
}
add_action( 'save_post', 'meridian_save_testimonial_meta' );
