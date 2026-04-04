<?php
/**
 * Template Tags - Reusable display helper functions
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Format price with currency.
 */
function am_format_price( $price ) {
    if ( empty( $price ) ) {
        return __( 'Price on request', 'agence-murailles' );
    }
    return number_format( (float) $price, 0, ',', ' ' ) . ' MAD';
}

/**
 * Get property meta value.
 */
function am_get_property_meta( $key, $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    return get_post_meta( $post_id, $key, true );
}

/**
 * Display property badge (status).
 */
function am_property_status_badge( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $statuses = get_the_terms( $post_id, 'property_status' );
    if ( $statuses && ! is_wp_error( $statuses ) ) {
        foreach ( $statuses as $status ) {
            $class = sanitize_html_class( $status->slug );
            echo '<span class="property-badge badge-' . esc_attr( $class ) . '">' . esc_html( $status->name ) . '</span>';
        }
    }
}

/**
 * Display property type label.
 */
function am_property_type_label( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $types = get_the_terms( $post_id, 'property_type' );
    if ( $types && ! is_wp_error( $types ) ) {
        echo esc_html( $types[0]->name );
    }
}

/**
 * Display property city label.
 */
function am_property_city_label( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $cities = get_the_terms( $post_id, 'property_city' );
    if ( $cities && ! is_wp_error( $cities ) ) {
        echo esc_html( $cities[0]->name );
    }
}

/**
 * Display star rating.
 */
function am_display_rating( $rating ) {
    $rating = (int) $rating;
    $output = '<div class="star-rating">';
    for ( $i = 1; $i <= 5; $i++ ) {
        $output .= ( $i <= $rating ) ? '<span class="star filled">&#9733;</span>' : '<span class="star">&#9734;</span>';
    }
    $output .= '</div>';
    echo $output;
}

/**
 * Get property features as array.
 */
function am_get_features( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $features = get_post_meta( $post_id, 'am_features', true );
    if ( empty( $features ) ) {
        return array();
    }
    return array_map( 'trim', explode( ',', $features ) );
}

/**
 * Get property gallery image IDs as array.
 */
function am_get_gallery_ids( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $gallery = get_post_meta( $post_id, 'am_gallery', true );
    if ( empty( $gallery ) ) {
        return array();
    }
    return array_filter( array_map( 'absint', explode( ',', $gallery ) ) );
}

/**
 * Display property quick specs (bedrooms, bathrooms, area).
 */
function am_property_quick_specs( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    $bedrooms  = am_get_property_meta( 'am_bedrooms', $post_id );
    $bathrooms = am_get_property_meta( 'am_bathrooms', $post_id );
    $area      = am_get_property_meta( 'am_area', $post_id );

    echo '<div class="property-specs">';
    if ( $bedrooms ) {
        echo '<span class="spec"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7v11a2 2 0 002 2h14a2 2 0 002-2V7"/><path d="M21 7V5a2 2 0 00-2-2H5a2 2 0 00-2 2v2"/><path d="M3 11h18"/></svg> ' . esc_html( $bedrooms ) . ' ' . esc_html__( 'Bed', 'agence-murailles' ) . '</span>';
    }
    if ( $bathrooms ) {
        echo '<span class="spec"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12h16a1 1 0 011 1v3a4 4 0 01-4 4H7a4 4 0 01-4-4v-3a1 1 0 011-1z"/><path d="M6 12V5a2 2 0 012-2h3v2.25"/></svg> ' . esc_html( $bathrooms ) . ' ' . esc_html__( 'Bath', 'agence-murailles' ) . '</span>';
    }
    if ( $area ) {
        echo '<span class="spec"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 3v18"/></svg> ' . esc_html( $area ) . ' m²</span>';
    }
    echo '</div>';
}

/**
 * Get placeholder image URL.
 */
function am_placeholder_image() {
    return AM_THEME_URI . '/assets/images/placeholder.jpg';
}

/**
 * Display property thumbnail or placeholder.
 */
function am_property_thumbnail( $size = 'property-card' ) {
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( $size, array( 'class' => 'property-img', 'loading' => 'lazy' ) );
    } else {
        echo '<img src="' . esc_url( am_placeholder_image() ) . '" alt="' . esc_attr( get_the_title() ) . '" class="property-img" loading="lazy">';
    }
}
