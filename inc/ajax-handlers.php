<?php
/**
 * AJAX Handlers for property search and filter
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Handle AJAX property filter requests.
 */
function am_filter_properties() {
    check_ajax_referer( 'am_filter_nonce', 'nonce' );

    $paged = isset( $_POST['paged'] ) ? absint( $_POST['paged'] ) : 1;

    // Build query args
    $args = array(
        'post_type'      => 'property',
        'posts_per_page' => 9,
        'paged'          => $paged,
        'post_status'    => 'publish',
    );

    // Search keyword
    if ( ! empty( $_POST['keyword'] ) ) {
        $args['s'] = sanitize_text_field( $_POST['keyword'] );
    }

    // Taxonomy filters
    $tax_query = array();

    if ( ! empty( $_POST['property_type'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'property_type',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['property_type'] ),
        );
    }

    if ( ! empty( $_POST['property_city'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'property_city',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['property_city'] ),
        );
    }

    if ( ! empty( $_POST['property_status'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'property_status',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['property_status'] ),
        );
    }

    if ( ! empty( $tax_query ) ) {
        $tax_query['relation'] = 'AND';
        $args['tax_query']     = $tax_query;
    }

    // Meta query for price range, bedrooms, area
    $meta_query = array();

    if ( ! empty( $_POST['min_price'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_price',
            'value'   => absint( $_POST['min_price'] ),
            'compare' => '>=',
            'type'    => 'NUMERIC',
        );
    }

    if ( ! empty( $_POST['max_price'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_price',
            'value'   => absint( $_POST['max_price'] ),
            'compare' => '<=',
            'type'    => 'NUMERIC',
        );
    }

    if ( ! empty( $_POST['bedrooms'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_bedrooms',
            'value'   => absint( $_POST['bedrooms'] ),
            'compare' => '>=',
            'type'    => 'NUMERIC',
        );
    }

    if ( ! empty( $_POST['min_area'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_area',
            'value'   => absint( $_POST['min_area'] ),
            'compare' => '>=',
            'type'    => 'NUMERIC',
        );
    }

    if ( ! empty( $meta_query ) ) {
        $meta_query['relation'] = 'AND';
        $args['meta_query']     = $meta_query;
    }

    // Sorting
    if ( ! empty( $_POST['sort'] ) ) {
        switch ( $_POST['sort'] ) {
            case 'price_asc':
                $args['meta_key'] = 'am_price';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'ASC';
                break;
            case 'price_desc':
                $args['meta_key'] = 'am_price';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'DESC';
                break;
            case 'date_desc':
                $args['orderby'] = 'date';
                $args['order']   = 'DESC';
                break;
            case 'date_asc':
                $args['orderby'] = 'date';
                $args['order']   = 'ASC';
                break;
        }
    }

    $query = new WP_Query( $args );

    ob_start();

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'template-parts/content-property-card' );
        }
    } else {
        get_template_part( 'template-parts/content', 'none' );
    }

    $html = ob_get_clean();

    // Pagination info
    $max_pages = $query->max_num_pages;

    wp_reset_postdata();

    wp_send_json_success( array(
        'html'       => $html,
        'max_pages'  => $max_pages,
        'found'      => $query->found_posts,
        'paged'      => $paged,
    ) );
}
add_action( 'wp_ajax_am_filter_properties', 'am_filter_properties' );
add_action( 'wp_ajax_nopriv_am_filter_properties', 'am_filter_properties' );

/**
 * Handle contact form submission via AJAX.
 */
function am_submit_contact() {
    check_ajax_referer( 'am_filter_nonce', 'nonce' );

    $name    = isset( $_POST['contact_name'] ) ? sanitize_text_field( $_POST['contact_name'] ) : '';
    $email   = isset( $_POST['contact_email'] ) ? sanitize_email( $_POST['contact_email'] ) : '';
    $phone   = isset( $_POST['contact_phone'] ) ? sanitize_text_field( $_POST['contact_phone'] ) : '';
    $subject = isset( $_POST['contact_subject'] ) ? sanitize_text_field( $_POST['contact_subject'] ) : '';
    $message = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( $_POST['contact_message'] ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'agence-murailles' ) ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'agence-murailles' ) ) );
    }

    $to      = get_option( 'admin_email' );
    $subject = ! empty( $subject ) ? $subject : __( 'New Contact Form Message', 'agence-murailles' );
    $body    = sprintf(
        "Name: %s\nEmail: %s\nPhone: %s\n\nMessage:\n%s",
        $name,
        $email,
        $phone,
        $message
    );
    $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => __( 'Thank you! Your message has been sent successfully.', 'agence-murailles' ) ) );
    } else {
        wp_send_json_error( array( 'message' => __( 'Sorry, there was an error sending your message. Please try again.', 'agence-murailles' ) ) );
    }
}
add_action( 'wp_ajax_am_submit_contact', 'am_submit_contact' );
add_action( 'wp_ajax_nopriv_am_submit_contact', 'am_submit_contact' );
