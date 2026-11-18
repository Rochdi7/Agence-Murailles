<?php
/**
 * Custom Taxonomies
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Custom Taxonomies.
 */
function am_register_taxonomies() {

    // Property Type (Apartment, Villa, Condo, Office, Studio)
    register_taxonomy( 'property_type', 'property', array(
        'labels'            => array(
            'name'          => _x( 'Property Types', 'taxonomy general name', 'agence-murailles' ),
            'singular_name' => _x( 'Property Type', 'taxonomy singular name', 'agence-murailles' ),
            'search_items'  => __( 'Search Property Types', 'agence-murailles' ),
            'all_items'     => __( 'All Property Types', 'agence-murailles' ),
            'edit_item'     => __( 'Edit Property Type', 'agence-murailles' ),
            'add_new_item'  => __( 'Add New Property Type', 'agence-murailles' ),
            'menu_name'     => __( 'Property Types', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'property-type' ),
    ) );

    // Property Status (For Sale, For Rent, For Buy)
    register_taxonomy( 'property_status', 'property', array(
        'labels'            => array(
            'name'          => _x( 'Property Status', 'taxonomy general name', 'agence-murailles' ),
            'singular_name' => _x( 'Status', 'taxonomy singular name', 'agence-murailles' ),
            'menu_name'     => __( 'Property Status', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'property-status' ),
    ) );

    // Property Location / City
    register_taxonomy( 'property_city', 'property', array(
        'labels'            => array(
            'name'          => _x( 'Cities', 'taxonomy general name', 'agence-murailles' ),
            'singular_name' => _x( 'City', 'taxonomy singular name', 'agence-murailles' ),
            'menu_name'     => __( 'Cities', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'city' ),
    ) );

    // Property Amenities
    register_taxonomy( 'property_amenity', 'property', array(
        'labels'            => array(
            'name'          => _x( 'Amenities', 'taxonomy general name', 'agence-murailles' ),
            'singular_name' => _x( 'Amenity', 'taxonomy singular name', 'agence-murailles' ),
            'menu_name'     => __( 'Amenities', 'agence-murailles' ),
        ),
        'hierarchical'      => false,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => false,
        'rewrite'           => array( 'slug' => 'amenity' ),
    ) );

    // Agent Specialization
    register_taxonomy( 'agent_specialization', 'agent', array(
        'labels'            => array(
            'name'          => _x( 'Specializations', 'taxonomy general name', 'agence-murailles' ),
            'singular_name' => _x( 'Specialization', 'taxonomy singular name', 'agence-murailles' ),
            'menu_name'     => __( 'Specializations', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'specialization' ),
    ) );
}
add_action( 'init', 'am_register_taxonomies' );
