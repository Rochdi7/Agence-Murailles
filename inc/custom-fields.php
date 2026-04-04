<?php
/**
 * Custom Fields (Meta Boxes) for Properties and Agents
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ═══════════════════════════════════════════════════════════
// PROPERTY META BOX
// ═══════════════════════════════════════════════════════════

/**
 * Register property details meta box.
 */
function am_property_meta_boxes() {
    add_meta_box(
        'am_property_details',
        __( 'Property Details', 'agence-murailles' ),
        'am_property_details_callback',
        'property',
        'normal',
        'high'
    );

    add_meta_box(
        'am_property_gallery',
        __( 'Property Gallery', 'agence-murailles' ),
        'am_property_gallery_callback',
        'property',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'am_property_meta_boxes' );

/**
 * Property details meta box callback.
 */
function am_property_details_callback( $post ) {
    wp_nonce_field( 'am_property_details_nonce', 'am_property_nonce' );

    $fields = array(
        'am_price'          => array( 'label' => __( 'Price (MAD)', 'agence-murailles' ),       'type' => 'number' ),
        'am_area'           => array( 'label' => __( 'Area (m²)', 'agence-murailles' ),         'type' => 'number' ),
        'am_bedrooms'       => array( 'label' => __( 'Bedrooms', 'agence-murailles' ),          'type' => 'number' ),
        'am_bathrooms'      => array( 'label' => __( 'Bathrooms', 'agence-murailles' ),         'type' => 'number' ),
        'am_garages'        => array( 'label' => __( 'Garages', 'agence-murailles' ),           'type' => 'number' ),
        'am_year_built'     => array( 'label' => __( 'Year Built', 'agence-murailles' ),        'type' => 'number' ),
        'am_address'        => array( 'label' => __( 'Address', 'agence-murailles' ),           'type' => 'text' ),
        'am_map_lat'        => array( 'label' => __( 'Latitude', 'agence-murailles' ),          'type' => 'text' ),
        'am_map_lng'        => array( 'label' => __( 'Longitude', 'agence-murailles' ),         'type' => 'text' ),
        'am_video_url'      => array( 'label' => __( 'Video URL', 'agence-murailles' ),         'type' => 'url' ),
        'am_featured'       => array( 'label' => __( 'Featured Property', 'agence-murailles' ), 'type' => 'checkbox' ),
    );

    echo '<div class="am-meta-grid">';
    foreach ( $fields as $key => $field ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<div class="am-meta-field">';
        echo '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] ) . '</label>';

        if ( 'checkbox' === $field['type'] ) {
            echo '<input type="checkbox" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="1" ' . checked( $value, '1', false ) . '>';
        } else {
            echo '<input type="' . esc_attr( $field['type'] ) . '" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" class="widefat">';
        }

        echo '</div>';
    }
    echo '</div>';

    // Property features (comma-separated)
    $features = get_post_meta( $post->ID, 'am_features', true );
    echo '<div class="am-meta-field am-meta-full">';
    echo '<label for="am_features">' . esc_html__( 'Features (comma-separated: Pool, Garden, Elevator, Parking, Security, etc.)', 'agence-murailles' ) . '</label>';
    echo '<textarea id="am_features" name="am_features" class="widefat" rows="3">' . esc_textarea( $features ) . '</textarea>';
    echo '</div>';
}

/**
 * Property gallery meta box callback.
 */
function am_property_gallery_callback( $post ) {
    $gallery = get_post_meta( $post->ID, 'am_gallery', true );
    ?>
    <div id="am-gallery-container">
        <p><?php esc_html_e( 'Enter image IDs separated by commas, or use the Media Library to upload images and note their IDs.', 'agence-murailles' ); ?></p>
        <input type="text" id="am_gallery" name="am_gallery" value="<?php echo esc_attr( $gallery ); ?>" class="widefat" placeholder="e.g., 12,34,56,78">
        <p class="description"><?php esc_html_e( 'Tip: Upload images via Media > Add New, then enter their IDs here.', 'agence-murailles' ); ?></p>
    </div>
    <?php
}

/**
 * Save property meta data.
 */
function am_save_property_meta( $post_id ) {
    // Verify nonce
    if ( ! isset( $_POST['am_property_nonce'] ) || ! wp_verify_nonce( $_POST['am_property_nonce'], 'am_property_details_nonce' ) ) {
        return;
    }

    // Check autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Numeric fields
    $numeric_fields = array( 'am_price', 'am_area', 'am_bedrooms', 'am_bathrooms', 'am_garages', 'am_year_built' );
    foreach ( $numeric_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }

    // Text fields
    $text_fields = array( 'am_address', 'am_map_lat', 'am_map_lng' );
    foreach ( $text_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }

    // URL fields
    if ( isset( $_POST['am_video_url'] ) ) {
        update_post_meta( $post_id, 'am_video_url', esc_url_raw( $_POST['am_video_url'] ) );
    }

    // Checkbox
    $featured = isset( $_POST['am_featured'] ) ? '1' : '0';
    update_post_meta( $post_id, 'am_featured', $featured );

    // Features textarea
    if ( isset( $_POST['am_features'] ) ) {
        update_post_meta( $post_id, 'am_features', sanitize_textarea_field( $_POST['am_features'] ) );
    }

    // Gallery
    if ( isset( $_POST['am_gallery'] ) ) {
        update_post_meta( $post_id, 'am_gallery', sanitize_text_field( $_POST['am_gallery'] ) );
    }
}
add_action( 'save_post_property', 'am_save_property_meta' );


// ═══════════════════════════════════════════════════════════
// AGENT META BOX
// ═══════════════════════════════════════════════════════════

/**
 * Register agent details meta box.
 */
function am_agent_meta_boxes() {
    add_meta_box(
        'am_agent_details',
        __( 'Agent Details', 'agence-murailles' ),
        'am_agent_details_callback',
        'agent',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'am_agent_meta_boxes' );

/**
 * Agent details meta box callback.
 */
function am_agent_details_callback( $post ) {
    wp_nonce_field( 'am_agent_details_nonce', 'am_agent_nonce' );

    $fields = array(
        'am_agent_position'  => array( 'label' => __( 'Position / Title', 'agence-murailles' ), 'type' => 'text' ),
        'am_agent_phone'     => array( 'label' => __( 'Phone', 'agence-murailles' ),            'type' => 'tel' ),
        'am_agent_email'     => array( 'label' => __( 'Email', 'agence-murailles' ),            'type' => 'email' ),
        'am_agent_facebook'  => array( 'label' => __( 'Facebook URL', 'agence-murailles' ),     'type' => 'url' ),
        'am_agent_instagram' => array( 'label' => __( 'Instagram URL', 'agence-murailles' ),    'type' => 'url' ),
        'am_agent_linkedin'  => array( 'label' => __( 'LinkedIn URL', 'agence-murailles' ),     'type' => 'url' ),
        'am_agent_whatsapp'  => array( 'label' => __( 'WhatsApp Number', 'agence-murailles' ),  'type' => 'text' ),
    );

    echo '<div class="am-meta-grid">';
    foreach ( $fields as $key => $field ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<div class="am-meta-field">';
        echo '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] ) . '</label>';
        echo '<input type="' . esc_attr( $field['type'] ) . '" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" class="widefat">';
        echo '</div>';
    }
    echo '</div>';
}

/**
 * Save agent meta data.
 */
function am_save_agent_meta( $post_id ) {
    if ( ! isset( $_POST['am_agent_nonce'] ) || ! wp_verify_nonce( $_POST['am_agent_nonce'], 'am_agent_details_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $text_fields = array( 'am_agent_position', 'am_agent_phone', 'am_agent_whatsapp' );
    foreach ( $text_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }

    if ( isset( $_POST['am_agent_email'] ) ) {
        update_post_meta( $post_id, 'am_agent_email', sanitize_email( $_POST['am_agent_email'] ) );
    }

    $url_fields = array( 'am_agent_facebook', 'am_agent_instagram', 'am_agent_linkedin' );
    foreach ( $url_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, esc_url_raw( $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post_agent', 'am_save_agent_meta' );


// ═══════════════════════════════════════════════════════════
// TESTIMONIAL META BOX
// ═══════════════════════════════════════════════════════════

/**
 * Register testimonial details meta box.
 */
function am_testimonial_meta_boxes() {
    add_meta_box(
        'am_testimonial_details',
        __( 'Testimonial Details', 'agence-murailles' ),
        'am_testimonial_details_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'am_testimonial_meta_boxes' );

/**
 * Testimonial details meta box callback.
 */
function am_testimonial_details_callback( $post ) {
    wp_nonce_field( 'am_testimonial_details_nonce', 'am_testimonial_nonce' );

    $rating   = get_post_meta( $post->ID, 'am_testimonial_rating', true );
    $location = get_post_meta( $post->ID, 'am_testimonial_location', true );

    echo '<div class="am-meta-grid">';

    echo '<div class="am-meta-field">';
    echo '<label for="am_testimonial_rating">' . esc_html__( 'Rating (1-5)', 'agence-murailles' ) . '</label>';
    echo '<input type="number" id="am_testimonial_rating" name="am_testimonial_rating" value="' . esc_attr( $rating ) . '" min="1" max="5" class="widefat">';
    echo '</div>';

    echo '<div class="am-meta-field">';
    echo '<label for="am_testimonial_location">' . esc_html__( 'Client Location', 'agence-murailles' ) . '</label>';
    echo '<input type="text" id="am_testimonial_location" name="am_testimonial_location" value="' . esc_attr( $location ) . '" class="widefat">';
    echo '</div>';

    echo '</div>';
}

/**
 * Save testimonial meta data.
 */
function am_save_testimonial_meta( $post_id ) {
    if ( ! isset( $_POST['am_testimonial_nonce'] ) || ! wp_verify_nonce( $_POST['am_testimonial_nonce'], 'am_testimonial_details_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['am_testimonial_rating'] ) ) {
        $rating = absint( $_POST['am_testimonial_rating'] );
        $rating = min( 5, max( 1, $rating ) );
        update_post_meta( $post_id, 'am_testimonial_rating', $rating );
    }

    if ( isset( $_POST['am_testimonial_location'] ) ) {
        update_post_meta( $post_id, 'am_testimonial_location', sanitize_text_field( $_POST['am_testimonial_location'] ) );
    }
}
add_action( 'save_post_testimonial', 'am_save_testimonial_meta' );
