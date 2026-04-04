<?php
/**
 * Theme Setup - Menus, widget areas, theme support
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Sets up theme defaults and registers support for WordPress features.
 */
function am_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );

    // Custom image sizes
    add_image_size( 'property-card', 600, 400, true );
    add_image_size( 'property-hero', 1200, 600, true );
    add_image_size( 'agent-avatar', 400, 400, true );
    add_image_size( 'testimonial-avatar', 100, 100, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'agence-murailles' ),
        'footer'    => esc_html__( 'Footer Menu', 'agence-murailles' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add support for wide and full alignment in Gutenberg
    add_theme_support( 'align-wide' );

    // Add support for responsive embedded content
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'am_theme_setup' );

/**
 * Register widget areas.
 */
function am_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'agence-murailles' ),
        'id'            => 'sidebar-blog',
        'description'   => esc_html__( 'Widgets for the blog sidebar.', 'agence-murailles' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'agence-murailles' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'First footer widget area.', 'agence-murailles' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'agence-murailles' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Second footer widget area.', 'agence-murailles' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3', 'agence-murailles' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Third footer widget area.', 'agence-murailles' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'am_widgets_init' );

/**
 * Add custom classes to body tag.
 */
function am_body_classes( $classes ) {
    if ( is_singular( 'property' ) ) {
        $classes[] = 'single-property-page';
    }
    if ( is_post_type_archive( 'property' ) ) {
        $classes[] = 'property-archive-page';
    }
    return $classes;
}
add_filter( 'body_class', 'am_body_classes' );
