<?php
/**
 * Custom Post Types Registration
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Custom Post Types.
 */
function am_register_post_types() {

    // ── Property CPT ────────────────────────────────────
    $property_labels = array(
        'name'               => _x( 'Properties', 'post type general name', 'agence-murailles' ),
        'singular_name'      => _x( 'Property', 'post type singular name', 'agence-murailles' ),
        'menu_name'          => _x( 'Properties', 'admin menu', 'agence-murailles' ),
        'add_new'            => __( 'Add New', 'agence-murailles' ),
        'add_new_item'       => __( 'Add New Property', 'agence-murailles' ),
        'edit_item'          => __( 'Edit Property', 'agence-murailles' ),
        'new_item'           => __( 'New Property', 'agence-murailles' ),
        'view_item'          => __( 'View Property', 'agence-murailles' ),
        'search_items'       => __( 'Search Properties', 'agence-murailles' ),
        'not_found'          => __( 'No properties found.', 'agence-murailles' ),
        'not_found_in_trash' => __( 'No properties found in Trash.', 'agence-murailles' ),
        'all_items'          => __( 'All Properties', 'agence-murailles' ),
    );

    register_post_type( 'property', array(
        'labels'             => $property_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'property', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-building',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
    ) );

    // ── Agent CPT ───────────────────────────────────────
    $agent_labels = array(
        'name'               => _x( 'Agents', 'post type general name', 'agence-murailles' ),
        'singular_name'      => _x( 'Agent', 'post type singular name', 'agence-murailles' ),
        'menu_name'          => _x( 'Agents', 'admin menu', 'agence-murailles' ),
        'add_new'            => __( 'Add New', 'agence-murailles' ),
        'add_new_item'       => __( 'Add New Agent', 'agence-murailles' ),
        'edit_item'          => __( 'Edit Agent', 'agence-murailles' ),
        'new_item'           => __( 'New Agent', 'agence-murailles' ),
        'view_item'          => __( 'View Agent', 'agence-murailles' ),
        'search_items'       => __( 'Search Agents', 'agence-murailles' ),
        'not_found'          => __( 'No agents found.', 'agence-murailles' ),
        'not_found_in_trash' => __( 'No agents found in Trash.', 'agence-murailles' ),
    );

    register_post_type( 'agent', array(
        'labels'             => $agent_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'agent', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-businessperson',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    ) );

    // ── Agency CPT ──────────────────────────────────────
    $agency_labels = array(
        'name'               => _x( 'Agencies', 'post type general name', 'agence-murailles' ),
        'singular_name'      => _x( 'Agency', 'post type singular name', 'agence-murailles' ),
        'menu_name'          => _x( 'Agencies', 'admin menu', 'agence-murailles' ),
        'add_new'            => __( 'Add New', 'agence-murailles' ),
        'add_new_item'       => __( 'Add New Agency', 'agence-murailles' ),
        'edit_item'          => __( 'Edit Agency', 'agence-murailles' ),
        'new_item'           => __( 'New Agency', 'agence-murailles' ),
        'view_item'          => __( 'View Agency', 'agence-murailles' ),
        'search_items'       => __( 'Search Agencies', 'agence-murailles' ),
        'not_found'          => __( 'No agencies found.', 'agence-murailles' ),
        'not_found_in_trash' => __( 'No agencies found in Trash.', 'agence-murailles' ),
    );

    register_post_type( 'agency', array(
        'labels'             => $agency_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'agency', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    ) );

    // ── Testimonial CPT ─────────────────────────────────
    register_post_type( 'testimonial', array(
        'labels'             => array(
            'name'          => _x( 'Testimonials', 'post type general name', 'agence-murailles' ),
            'singular_name' => _x( 'Testimonial', 'post type singular name', 'agence-murailles' ),
            'menu_name'     => _x( 'Testimonials', 'admin menu', 'agence-murailles' ),
            'add_new_item'  => __( 'Add New Testimonial', 'agence-murailles' ),
            'edit_item'     => __( 'Edit Testimonial', 'agence-murailles' ),
        ),
        'public'             => false,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'menu_position'      => 8,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    ) );
}
add_action( 'init', 'am_register_post_types' );

/**
 * Flush rewrite rules on theme activation.
 */
function am_rewrite_flush() {
    am_register_post_types();
    am_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'am_rewrite_flush' );
