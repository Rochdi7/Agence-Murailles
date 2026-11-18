<?php
/**
 * Theme Customizer
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function am_customize_register( $wp_customize ) {

    // ── Theme Options Section ───────────────────────────
    $wp_customize->add_section( 'am_theme_options', array(
        'title'    => __( 'Agence Murailles Options', 'agence-murailles' ),
        'priority' => 30,
    ) );

    // Google Maps API Key
    $wp_customize->add_setting( 'am_google_maps_key', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'am_google_maps_key', array(
        'label'   => __( 'Google Maps API Key', 'agence-murailles' ),
        'section' => 'am_theme_options',
        'type'    => 'text',
    ) );

    // Company Phone
    $wp_customize->add_setting( 'am_phone', array(
        'default'           => '+1 246-345-0695',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'am_phone', array(
        'label'   => __( 'Company Phone', 'agence-murailles' ),
        'section' => 'am_theme_options',
        'type'    => 'text',
    ) );

    // Company Email
    $wp_customize->add_setting( 'am_email', array(
        'default'           => 'info@example.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'am_email', array(
        'label'   => __( 'Company Email', 'agence-murailles' ),
        'section' => 'am_theme_options',
        'type'    => 'email',
    ) );

    // Company Address
    $wp_customize->add_setting( 'am_address', array(
        'default'           => 'Collins Street West, Victoria 8007, Australia.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'am_address', array(
        'label'   => __( 'Company Address', 'agence-murailles' ),
        'section' => 'am_theme_options',
        'type'    => 'textarea',
    ) );

    // Social Links
    $socials = array(
        'am_facebook'  => __( 'Facebook URL', 'agence-murailles' ),
        'am_twitter'   => __( 'Twitter URL', 'agence-murailles' ),
        'am_instagram' => __( 'Instagram URL', 'agence-murailles' ),
        'am_linkedin'  => __( 'LinkedIn URL', 'agence-murailles' ),
    );

    foreach ( $socials as $key => $label ) {
        $wp_customize->add_setting( $key, array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( $key, array(
            'label'   => $label,
            'section' => 'am_theme_options',
            'type'    => 'url',
        ) );
    }

    // Properties per page
    $wp_customize->add_setting( 'am_properties_per_page', array(
        'default'           => 12,
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( 'am_properties_per_page', array(
        'label'   => __( 'Properties Per Page', 'agence-murailles' ),
        'section' => 'am_theme_options',
        'type'    => 'number',
    ) );
}
add_action( 'customize_register', 'am_customize_register' );
