<?php
/**
 * Template Tags — helper functions for templates
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Get property price formatted.
 */
function am_get_property_price( $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    $price   = get_post_meta( $post_id, 'am_price', true );
    $period  = get_post_meta( $post_id, 'am_price_period', true );

    if ( ! $price ) {
        return __( 'Price on request', 'agence-murailles' );
    }

    $formatted = '$' . number_format( (float) $price, 0, '.', ',' );

    if ( 'month' === $period ) {
        $formatted .= '<small>/mo</small>';
    } elseif ( 'year' === $period ) {
        $formatted .= '<small>/yr</small>';
    }

    return $formatted;
}

/**
 * Get property status badge HTML.
 */
function am_get_property_status_badge( $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    $terms   = get_the_terms( $post_id, 'property_status' );

    if ( ! $terms || is_wp_error( $terms ) ) {
        return '';
    }

    $term  = $terms[0];
    $slug  = $term->slug;
    $class = 'sale';

    if ( strpos( $slug, 'rent' ) !== false ) {
        $class = '';
    } elseif ( strpos( $slug, 'buy' ) !== false ) {
        $class = 'buy';
    }

    return '<div class="property_types_vlix ' . esc_attr( $class ) . '">' . esc_html( $term->name ) . '</div>';
}

/**
 * Get property detail specs HTML (beds, baths, sqft).
 */
function am_get_property_specs( $post_id = null ) {
    $post_id   = $post_id ?: get_the_ID();
    $beds      = get_post_meta( $post_id, 'am_bedrooms', true );
    $baths     = get_post_meta( $post_id, 'am_bathrooms', true );
    $sqft      = get_post_meta( $post_id, 'am_sqft', true );

    $specs = array();

    if ( $beds ) {
        $specs[] = '<li><i class="bi bi-hospital"></i> ' . esc_html( $beds ) . ' Beds</li>';
    }
    if ( $baths ) {
        $specs[] = '<li><i class="bi bi-droplet"></i> ' . esc_html( $baths ) . ' Baths</li>';
    }
    if ( $sqft ) {
        $specs[] = '<li><i class="bi bi-arrows-fullscreen"></i> ' . esc_html( number_format( (float) $sqft ) ) . ' sqft</li>';
    }

    return $specs ? '<ul class="property-spec d-flex align-items-center gap-3 mb-0 p-0">' . implode( '', $specs ) . '</ul>' : '';
}

/**
 * Get property location.
 */
function am_get_property_location( $post_id = null ) {
    $post_id = $post_id ?: get_the_ID();
    $address = get_post_meta( $post_id, 'am_address', true );

    if ( $address ) {
        return $address;
    }

    $cities = get_the_terms( $post_id, 'property_city' );
    if ( $cities && ! is_wp_error( $cities ) ) {
        return $cities[0]->name;
    }

    return '';
}

/**
 * Get agent info for a property.
 */
function am_get_property_agent( $post_id = null ) {
    $post_id  = $post_id ?: get_the_ID();
    $agent_id = get_post_meta( $post_id, 'am_agent_id', true );

    if ( ! $agent_id || 'publish' !== get_post_status( $agent_id ) ) {
        return null;
    }

    return array(
        'id'        => $agent_id,
        'name'      => get_the_title( $agent_id ),
        'thumbnail' => get_the_post_thumbnail_url( $agent_id, 'am-agent-avatar' ),
        'phone'     => get_post_meta( $agent_id, 'am_agent_phone', true ),
        'email'     => get_post_meta( $agent_id, 'am_agent_email', true ),
        'permalink' => get_permalink( $agent_id ),
    );
}

/**
 * Get property gallery image URLs.
 */
function am_get_property_gallery( $post_id = null ) {
    $post_id    = $post_id ?: get_the_ID();
    $gallery_ids = get_post_meta( $post_id, 'am_gallery_ids', true );
    $images     = array();

    if ( $gallery_ids ) {
        $ids = array_map( 'intval', explode( ',', $gallery_ids ) );
        foreach ( $ids as $id ) {
            $full  = wp_get_attachment_image_url( $id, 'am-property-gallery' );
            $thumb = wp_get_attachment_image_url( $id, 'am-property-card' );
            if ( $full ) {
                $images[] = array( 'full' => $full, 'thumb' => $thumb );
            }
        }
    }

    // Add featured image if gallery is empty
    if ( empty( $images ) && has_post_thumbnail( $post_id ) ) {
        $images[] = array(
            'full'  => get_the_post_thumbnail_url( $post_id, 'am-property-gallery' ),
            'thumb' => get_the_post_thumbnail_url( $post_id, 'am-property-card' ),
        );
    }

    return $images;
}

/**
 * Pagination output for archive pages.
 */
function am_pagination( $query = null ) {
    global $wp_query;
    $q = $query ?: $wp_query;

    $big = 999999999;
    $links = paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, get_query_var( 'paged' ) ),
        'total'     => $q->max_num_pages,
        'type'      => 'array',
        'prev_text' => '<i class="bi bi-chevron-left"></i>',
        'next_text' => '<i class="bi bi-chevron-right"></i>',
    ) );

    if ( $links ) {
        echo '<nav class="d-flex justify-content-center mt-5"><ul class="pagination">';
        foreach ( $links as $link ) {
            $active = strpos( $link, 'current' ) !== false ? ' active' : '';
            echo '<li class="page-item' . $active . '">' . str_replace( 'page-numbers', 'page-link', $link ) . '</li>';
        }
        echo '</ul></nav>';
    }
}

/**
 * Truncate text with ellipsis.
 */
function am_truncate( $text, $length = 120 ) {
    if ( mb_strlen( $text ) <= $length ) {
        return $text;
    }
    return mb_substr( $text, 0, $length ) . '&hellip;';
}

/**
 * Get star rating HTML.
 */
function am_star_rating( $rating = 0 ) {
    $rating = max( 0, min( 5, (int) $rating ) );
    $html   = '';
    for ( $i = 1; $i <= 5; $i++ ) {
        $html .= $i <= $rating
            ? '<i class="fa-solid fa-star text-warning"></i>'
            : '<i class="fa-regular fa-star text-warning"></i>';
    }
    return $html;
}
