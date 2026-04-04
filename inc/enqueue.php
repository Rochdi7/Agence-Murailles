<?php
/**
 * Enqueue scripts and styles
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue front-end styles and scripts.
 */
function am_enqueue_assets() {
    // Google Fonts - Inter
    wp_enqueue_style(
        'am-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'am-main-style',
        AM_THEME_URI . '/assets/css/main.css',
        array(),
        AM_THEME_VERSION
    );

    // Responsive stylesheet
    wp_enqueue_style(
        'am-responsive',
        AM_THEME_URI . '/assets/css/responsive.css',
        array( 'am-main-style' ),
        AM_THEME_VERSION
    );

    // Theme default style.css (required by WordPress)
    wp_enqueue_style(
        'am-theme-style',
        get_stylesheet_uri(),
        array( 'am-main-style' ),
        AM_THEME_VERSION
    );

    // Navigation JS
    wp_enqueue_script(
        'am-navigation',
        AM_THEME_URI . '/assets/js/navigation.js',
        array(),
        AM_THEME_VERSION,
        true
    );

    // Main JS
    wp_enqueue_script(
        'am-main',
        AM_THEME_URI . '/assets/js/main.js',
        array(),
        AM_THEME_VERSION,
        true
    );

    // Property filter JS (only on property archives and front page)
    if ( is_post_type_archive( 'property' ) || is_front_page() || is_tax( 'property_city' ) || is_tax( 'property_type' ) || is_tax( 'property_status' ) ) {
        wp_enqueue_script(
            'am-property-filter',
            AM_THEME_URI . '/assets/js/property-filter.js',
            array(),
            AM_THEME_VERSION,
            true
        );

        wp_localize_script( 'am-property-filter', 'amAjax', array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'am_filter_nonce' ),
        ) );
    }
}
add_action( 'wp_enqueue_scripts', 'am_enqueue_assets' );

/**
 * Enqueue admin styles for meta boxes.
 */
function am_admin_enqueue( $hook ) {
    if ( in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
        wp_enqueue_style(
            'am-admin-style',
            AM_THEME_URI . '/assets/css/admin.css',
            array(),
            AM_THEME_VERSION
        );
    }
}
add_action( 'admin_enqueue_scripts', 'am_admin_enqueue' );
