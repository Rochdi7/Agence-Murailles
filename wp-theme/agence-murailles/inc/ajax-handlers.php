<?php
/**
 * AJAX Handlers for property filtering and search.
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * AJAX property filter/search.
 */
function am_ajax_filter_properties() {
    check_ajax_referer( 'am_nonce', 'nonce' );

    $args = array(
        'post_type'      => 'property',
        'posts_per_page' => get_theme_mod( 'am_properties_per_page', 12 ),
        'paged'          => isset( $_POST['page'] ) ? absint( $_POST['page'] ) : 1,
    );

    // Tax queries
    $tax_query = array( 'relation' => 'AND' );

    if ( ! empty( $_POST['property_type'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'property_type',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['property_type'] ),
        );
    }

    if ( ! empty( $_POST['property_status'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'property_status',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['property_status'] ),
        );
    }

    if ( ! empty( $_POST['city'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'property_city',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['city'] ),
        );
    }

    if ( count( $tax_query ) > 1 ) {
        $args['tax_query'] = $tax_query;
    }

    // Meta queries
    $meta_query = array( 'relation' => 'AND' );

    if ( ! empty( $_POST['min_price'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_price',
            'value'   => absint( $_POST['min_price'] ),
            'type'    => 'NUMERIC',
            'compare' => '>=',
        );
    }

    if ( ! empty( $_POST['max_price'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_price',
            'value'   => absint( $_POST['max_price'] ),
            'type'    => 'NUMERIC',
            'compare' => '<=',
        );
    }

    if ( ! empty( $_POST['bedrooms'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_bedrooms',
            'value'   => absint( $_POST['bedrooms'] ),
            'type'    => 'NUMERIC',
            'compare' => '>=',
        );
    }

    if ( ! empty( $_POST['bathrooms'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_bathrooms',
            'value'   => absint( $_POST['bathrooms'] ),
            'type'    => 'NUMERIC',
            'compare' => '>=',
        );
    }

    if ( count( $meta_query ) > 1 ) {
        $args['meta_query'] = $meta_query;
    }

    // Sorting
    if ( ! empty( $_POST['sort'] ) ) {
        switch ( $_POST['sort'] ) {
            case 'price_low':
                $args['meta_key'] = 'am_price';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'ASC';
                break;
            case 'price_high':
                $args['meta_key'] = 'am_price';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'DESC';
                break;
            case 'newest':
                $args['orderby'] = 'date';
                $args['order']   = 'DESC';
                break;
        }
    }

    // Search keyword
    if ( ! empty( $_POST['keyword'] ) ) {
        $args['s'] = sanitize_text_field( $_POST['keyword'] );
    }

    $query = new WP_Query( $args );

    ob_start();

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'template-parts/content-property-card' );
        }
    } else {
        echo '<div class="col-12"><div class="alert alert-warning text-center">';
        esc_html_e( 'No properties found matching your criteria.', 'agence-murailles' );
        echo '</div></div>';
    }

    $html = ob_get_clean();

    wp_send_json_success( array(
        'html'       => $html,
        'found'      => $query->found_posts,
        'max_pages'  => $query->max_num_pages,
    ) );

    wp_reset_postdata();
}
add_action( 'wp_ajax_am_filter_properties', 'am_ajax_filter_properties' );
add_action( 'wp_ajax_nopriv_am_filter_properties', 'am_ajax_filter_properties' );
