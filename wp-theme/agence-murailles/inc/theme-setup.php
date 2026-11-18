<?php
/**
 * Theme Setup
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 */
function am_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain( 'agence-murailles', AM_THEME_DIR . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Image sizes
    add_image_size( 'am-property-card', 600, 400, true );
    add_image_size( 'am-property-gallery', 1200, 800, true );
    add_image_size( 'am-agent-avatar', 300, 300, true );
    add_image_size( 'am-blog-card', 600, 400, true );
    add_image_size( 'am-hero-banner', 1920, 800, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'agence-murailles' ),
        'footer'    => esc_html__( 'Footer Menu', 'agence-murailles' ),
        'social'    => esc_html__( 'Social Links', 'agence-murailles' ),
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

    // Custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Wide alignment support
    add_theme_support( 'align-wide' );

    // Editor styles
    add_theme_support( 'editor-styles' );
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
        'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Property Sidebar', 'agence-murailles' ),
        'id'            => 'sidebar-property',
        'description'   => esc_html__( 'Widgets for the property sidebar.', 'agence-murailles' ),
        'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'agence-murailles' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Footer column 1 widgets.', 'agence-murailles' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'agence-murailles' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Footer column 2 widgets.', 'agence-murailles' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3', 'agence-murailles' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Footer column 3 widgets.', 'agence-murailles' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'am_widgets_init' );

/**
 * Custom Walker for primary navigation to match Resido's nav structure.
 */
class AM_Nav_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"nav-dropdown nav-submenu\">\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $has_children = in_array( 'menu-item-has-children', $classes, true );
        $submenu_indicator = $has_children ? '<span class="submenu-indicator"></span>' : '';

        $item_output  = isset( $args->before ) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= ( isset( $args->link_before ) ? $args->link_before : '' ) . $title . $submenu_indicator . ( isset( $args->link_after ) ? $args->link_after : '' );
        $item_output .= '</a>';
        $item_output .= isset( $args->after ) ? $args->after : '';

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

/**
 * Fallback menu when no menu is assigned.
 */
function am_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( get_post_type_archive_link( 'property' ) ) . '">' . esc_html__( 'Properties', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( get_post_type_archive_link( 'agent' ) ) . '">' . esc_html__( 'Agents', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( get_post_type_archive_link( 'agency' ) ) . '">' . esc_html__( 'Agencies', 'agence-murailles' ) . '</a></li>';
    if ( get_option( 'page_for_posts' ) ) {
        echo '<li><a href="' . esc_url( get_permalink( get_option( 'page_for_posts' ) ) ) . '">' . esc_html__( 'Blog', 'agence-murailles' ) . '</a></li>';
    }
    echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact', 'agence-murailles' ) . '</a></li>';
    echo '</ul>';
}
