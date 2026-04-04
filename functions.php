<?php
/**
 * Agence Murailles Theme Functions
 *
 * @package AgenceMurailles
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Theme constants
define( 'AM_THEME_VERSION', '2.3.1' );
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

// Custom Fields (Meta Boxes)
require_once AM_THEME_DIR . '/inc/custom-fields.php';

// AJAX Handlers
require_once AM_THEME_DIR . '/inc/ajax-handlers.php';

// Template Tags (reusable display helpers)
require_once AM_THEME_DIR . '/inc/template-tags.php';

// Annonce Immobilier (CPT, taxonomies, meta, AJAX, helpers)
require_once AM_THEME_DIR . '/inc/cpt-annonce.php';

// Blog Functions (reading time, related posts, breadcrumbs, share)
require_once AM_THEME_DIR . '/inc/blog-functions.php';
