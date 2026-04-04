<?php
/**
 * Custom Taxonomies for Properties
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register custom taxonomies.
 */
function am_register_taxonomies() {

    // ── Property Type (Apartment, Villa, House, Land, Commercial) ──
    register_taxonomy( 'property_type', 'property', array(
        'labels' => array(
            'name'              => _x( 'Property Types', 'taxonomy general name', 'agence-murailles' ),
            'singular_name'     => _x( 'Property Type', 'taxonomy singular name', 'agence-murailles' ),
            'search_items'      => __( 'Search Property Types', 'agence-murailles' ),
            'all_items'         => __( 'All Property Types', 'agence-murailles' ),
            'edit_item'         => __( 'Edit Property Type', 'agence-murailles' ),
            'update_item'       => __( 'Update Property Type', 'agence-murailles' ),
            'add_new_item'      => __( 'Add New Property Type', 'agence-murailles' ),
            'new_item_name'     => __( 'New Property Type Name', 'agence-murailles' ),
            'menu_name'         => __( 'Property Types', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'property-type' ),
    ) );

    // ── City ──────────────────────────────────────────────
    register_taxonomy( 'property_city', 'property', array(
        'labels' => array(
            'name'              => _x( 'Cities', 'taxonomy general name', 'agence-murailles' ),
            'singular_name'     => _x( 'City', 'taxonomy singular name', 'agence-murailles' ),
            'search_items'      => __( 'Search Cities', 'agence-murailles' ),
            'all_items'         => __( 'All Cities', 'agence-murailles' ),
            'edit_item'         => __( 'Edit City', 'agence-murailles' ),
            'update_item'       => __( 'Update City', 'agence-murailles' ),
            'add_new_item'      => __( 'Add New City', 'agence-murailles' ),
            'new_item_name'     => __( 'New City Name', 'agence-murailles' ),
            'menu_name'         => __( 'Cities', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'city' ),
    ) );

    // ── Property Status (For Sale, For Rent, Sold, Rented) ──
    register_taxonomy( 'property_status', 'property', array(
        'labels' => array(
            'name'              => _x( 'Property Status', 'taxonomy general name', 'agence-murailles' ),
            'singular_name'     => _x( 'Status', 'taxonomy singular name', 'agence-murailles' ),
            'search_items'      => __( 'Search Statuses', 'agence-murailles' ),
            'all_items'         => __( 'All Statuses', 'agence-murailles' ),
            'edit_item'         => __( 'Edit Status', 'agence-murailles' ),
            'update_item'       => __( 'Update Status', 'agence-murailles' ),
            'add_new_item'      => __( 'Add New Status', 'agence-murailles' ),
            'new_item_name'     => __( 'New Status Name', 'agence-murailles' ),
            'menu_name'         => __( 'Status', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'property-status' ),
    ) );
}
add_action( 'init', 'am_register_taxonomies' );
