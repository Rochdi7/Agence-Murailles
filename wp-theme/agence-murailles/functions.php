<?php
/**
 * Agence Murailles Theme Functions
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'AM_THEME_VERSION', '1.0.0' );
define( 'AM_THEME_DIR', get_template_directory() );
define( 'AM_THEME_URI', get_template_directory_uri() );

// Theme setup
require_once AM_THEME_DIR . '/inc/theme-setup.php';

// Enqueue scripts and styles
require_once AM_THEME_DIR . '/inc/enqueue.php';

// Custom Post Types
require_once AM_THEME_DIR . '/inc/custom-post-types.php';

// Custom Taxonomies
require_once AM_THEME_DIR . '/inc/custom-taxonomies.php';

// Custom Meta Boxes
require_once AM_THEME_DIR . '/inc/meta-boxes.php';

// Template Tags (helper functions)
require_once AM_THEME_DIR . '/inc/template-tags.php';

// Widgets
require_once AM_THEME_DIR . '/inc/widgets.php';

// Customizer
require_once AM_THEME_DIR . '/inc/customizer.php';

// AJAX handlers
require_once AM_THEME_DIR . '/inc/ajax-handlers.php';
