<?php
/**
 * Enqueue Scripts and Styles
 *
 * Since the original HTML template's local JS/CSS plugin files were corrupted
 * (saved as .html by HTTrack), we use CDN versions for all third-party libraries.
 * The main styles.css from the template is the real stylesheet and is loaded locally.
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue front-end styles and scripts.
 */
function am_enqueue_assets() {

    // ── CSS ──────────────────────────────────────────────

    // Bootstrap 5.3
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Bootstrap Icons
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
        array(),
        '1.11.3'
    );

    // Font Awesome 6
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Slick Carousel
    wp_enqueue_style(
        'slick',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',
        array(),
        '1.8.1'
    );
    wp_enqueue_style(
        'slick-theme',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',
        array( 'slick' ),
        '1.8.1'
    );

    // Select2
    wp_enqueue_style(
        'select2',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css',
        array(),
        '4.0.13'
    );

    // Magnific Popup
    wp_enqueue_style(
        'magnific-popup',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css',
        array(),
        '1.1.0'
    );

    // Ion Range Slider
    wp_enqueue_style(
        'ion-rangeslider',
        'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css',
        array(),
        '2.3.1'
    );

    // Animate.css
    wp_enqueue_style(
        'animate',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
        array(),
        '4.1.1'
    );

    // Main theme CSS (from original template)
    wp_enqueue_style(
        'am-main-styles',
        AM_THEME_URI . '/assets/css/styles.css',
        array( 'bootstrap', 'bootstrap-icons', 'font-awesome', 'slick', 'select2', 'magnific-popup', 'ion-rangeslider' ),
        AM_THEME_VERSION
    );

    // Theme color overrides
    wp_enqueue_style(
        'am-colors',
        AM_THEME_URI . '/assets/css/colors.css',
        array( 'am-main-styles' ),
        AM_THEME_VERSION
    );

    // WordPress default stylesheet (theme metadata)
    wp_enqueue_style(
        'am-theme-style',
        get_stylesheet_uri(),
        array( 'am-main-styles' ),
        AM_THEME_VERSION
    );

    // ── JavaScript ──────────────────────────────────────

    // jQuery (WordPress bundled)
    wp_enqueue_script( 'jquery' );

    // Popper.js (for Bootstrap)
    wp_enqueue_script(
        'popper',
        'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js',
        array(),
        '2.11.8',
        true
    );

    // Bootstrap 5.3
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js',
        array( 'popper' ),
        '5.3.3',
        true
    );

    // Slick Carousel
    wp_enqueue_script(
        'slick',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
        array( 'jquery' ),
        '1.8.1',
        true
    );

    // Select2
    wp_enqueue_script(
        'select2',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js',
        array( 'jquery' ),
        '4.0.13',
        true
    );

    // Magnific Popup
    wp_enqueue_script(
        'magnific-popup',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
        array( 'jquery' ),
        '1.1.0',
        true
    );

    // Ion Range Slider
    wp_enqueue_script(
        'ion-rangeslider',
        'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js',
        array( 'jquery' ),
        '2.3.1',
        true
    );

    // ImagesLoaded
    wp_enqueue_script(
        'imagesloaded',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js',
        array( 'jquery' ),
        '5.0.0',
        true
    );

    // Navigation JS (dropdown menus, mobile toggle)
    wp_enqueue_script(
        'am-navigation',
        AM_THEME_URI . '/assets/js/navigation.js',
        array( 'jquery' ),
        AM_THEME_VERSION,
        true
    );

    // Theme custom JS
    wp_enqueue_script(
        'am-custom',
        AM_THEME_URI . '/assets/js/custom.js',
        array( 'jquery', 'bootstrap', 'slick', 'select2', 'magnific-popup', 'am-navigation' ),
        AM_THEME_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script( 'am-custom', 'amAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'am_nonce' ),
        'homeUrl' => home_url( '/' ),
    ) );

    // Conditionally load Google Maps on property pages
    $google_maps_key = get_theme_mod( 'am_google_maps_key', '' );
    if ( $google_maps_key && ( is_singular( 'property' ) || is_page_template( 'page-templates/template-half-map.php' ) ) ) {
        wp_enqueue_script(
            'google-maps',
            'https://maps.googleapis.com/maps/api/js?key=' . esc_attr( $google_maps_key ),
            array(),
            null,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'am_enqueue_assets' );

/**
 * Add preconnect for CDN resources.
 */
function am_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://cdn.jsdelivr.net',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://cdnjs.cloudflare.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'am_resource_hints', 10, 2 );
