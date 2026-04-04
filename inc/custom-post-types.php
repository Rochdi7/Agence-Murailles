<?php
/**
 * Custom Post Types: Property, Agent, Testimonial
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Custom Post Types.
 */
function am_register_post_types() {

    // ── Property CPT ──────────────────────────────────────
    $property_labels = array(
        'name'                  => _x( 'Properties', 'Post type general name', 'agence-murailles' ),
        'singular_name'         => _x( 'Property', 'Post type singular name', 'agence-murailles' ),
        'menu_name'             => _x( 'Properties', 'Admin Menu text', 'agence-murailles' ),
        'add_new'               => __( 'Add New Property', 'agence-murailles' ),
        'add_new_item'          => __( 'Add New Property', 'agence-murailles' ),
        'edit_item'             => __( 'Edit Property', 'agence-murailles' ),
        'new_item'              => __( 'New Property', 'agence-murailles' ),
        'view_item'             => __( 'View Property', 'agence-murailles' ),
        'search_items'          => __( 'Search Properties', 'agence-murailles' ),
        'not_found'             => __( 'No properties found.', 'agence-murailles' ),
        'not_found_in_trash'    => __( 'No properties found in Trash.', 'agence-murailles' ),
        'all_items'             => __( 'All Properties', 'agence-murailles' ),
        'featured_image'        => __( 'Property Main Image', 'agence-murailles' ),
        'set_featured_image'    => __( 'Set property image', 'agence-murailles' ),
        'remove_featured_image' => __( 'Remove property image', 'agence-murailles' ),
    );

    register_post_type( 'property', array(
        'labels'             => $property_labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'properties', 'with_front' => false ),
        'menu_icon'          => 'dashicons-building',
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true,
        'capability_type'    => 'post',
        'taxonomies'         => array(),
    ) );

    // ── Agent CPT ─────────────────────────────────────────
    $agent_labels = array(
        'name'               => _x( 'Agents', 'Post type general name', 'agence-murailles' ),
        'singular_name'      => _x( 'Agent', 'Post type singular name', 'agence-murailles' ),
        'menu_name'          => _x( 'Agents', 'Admin Menu text', 'agence-murailles' ),
        'add_new'            => __( 'Add New Agent', 'agence-murailles' ),
        'add_new_item'       => __( 'Add New Agent', 'agence-murailles' ),
        'edit_item'          => __( 'Edit Agent', 'agence-murailles' ),
        'new_item'           => __( 'New Agent', 'agence-murailles' ),
        'view_item'          => __( 'View Agent', 'agence-murailles' ),
        'search_items'       => __( 'Search Agents', 'agence-murailles' ),
        'not_found'          => __( 'No agents found.', 'agence-murailles' ),
        'not_found_in_trash' => __( 'No agents found in Trash.', 'agence-murailles' ),
        'all_items'          => __( 'All Agents', 'agence-murailles' ),
    );

    register_post_type( 'agent', array(
        'labels'             => $agent_labels,
        'public'             => true,
        'has_archive'        => false,
        'rewrite'            => array( 'slug' => 'agents', 'with_front' => false ),
        'menu_icon'          => 'dashicons-groups',
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
        'capability_type'    => 'post',
    ) );

    // ── Testimonial CPT ───────────────────────────────────
    $testimonial_labels = array(
        'name'               => _x( 'Testimonials', 'Post type general name', 'agence-murailles' ),
        'singular_name'      => _x( 'Testimonial', 'Post type singular name', 'agence-murailles' ),
        'menu_name'          => _x( 'Testimonials', 'Admin Menu text', 'agence-murailles' ),
        'add_new'            => __( 'Add New Testimonial', 'agence-murailles' ),
        'add_new_item'       => __( 'Add New Testimonial', 'agence-murailles' ),
        'edit_item'          => __( 'Edit Testimonial', 'agence-murailles' ),
        'new_item'           => __( 'New Testimonial', 'agence-murailles' ),
        'view_item'          => __( 'View Testimonial', 'agence-murailles' ),
        'search_items'       => __( 'Search Testimonials', 'agence-murailles' ),
        'not_found'          => __( 'No testimonials found.', 'agence-murailles' ),
        'not_found_in_trash' => __( 'No testimonials found in Trash.', 'agence-murailles' ),
        'all_items'          => __( 'All Testimonials', 'agence-murailles' ),
    );

    register_post_type( 'testimonial', array(
        'labels'             => $testimonial_labels,
        'public'             => true,
        'has_archive'        => false,
        'rewrite'            => array( 'slug' => 'testimonials', 'with_front' => false ),
        'menu_icon'          => 'dashicons-format-quote',
        'menu_position'      => 7,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true,
        'capability_type'    => 'post',
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
