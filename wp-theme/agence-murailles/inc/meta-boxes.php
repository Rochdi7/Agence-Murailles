<?php
/**
 * Custom Meta Boxes (native WordPress — no ACF dependency)
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register meta boxes.
 */
function am_register_meta_boxes() {
    add_meta_box( 'am_property_details', __( 'Property Details', 'agence-murailles' ), 'am_property_details_cb', 'property', 'normal', 'high' );
    add_meta_box( 'am_property_gallery',  __( 'Property Gallery', 'agence-murailles' ),  'am_property_gallery_cb',  'property', 'normal', 'default' );
    add_meta_box( 'am_agent_details',    __( 'Agent Details', 'agence-murailles' ),    'am_agent_details_cb',    'agent',    'normal', 'high' );
    add_meta_box( 'am_agency_details',   __( 'Agency Details', 'agence-murailles' ),   'am_agency_details_cb',   'agency',   'normal', 'high' );
    add_meta_box( 'am_testimonial_meta', __( 'Testimonial Details', 'agence-murailles' ), 'am_testimonial_meta_cb', 'testimonial', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'am_register_meta_boxes' );

/* ─── Property Details ───────────────────────────────── */

function am_property_details_cb( $post ) {
    wp_nonce_field( 'am_property_details_nonce', 'am_property_nonce' );

    $fields = array(
        'am_price'        => array( 'label' => __( 'Price ($)', 'agence-murailles' ),     'type' => 'number' ),
        'am_price_period' => array( 'label' => __( 'Price Period', 'agence-murailles' ),   'type' => 'select', 'options' => array( '' => '—', 'month' => 'Per Month', 'year' => 'Per Year', 'total' => 'Total' ) ),
        'am_bedrooms'     => array( 'label' => __( 'Bedrooms', 'agence-murailles' ),       'type' => 'number' ),
        'am_bathrooms'    => array( 'label' => __( 'Bathrooms', 'agence-murailles' ),      'type' => 'number' ),
        'am_sqft'         => array( 'label' => __( 'Area (sqft)', 'agence-murailles' ),    'type' => 'number' ),
        'am_garage'       => array( 'label' => __( 'Garage', 'agence-murailles' ),         'type' => 'number' ),
        'am_year_built'   => array( 'label' => __( 'Year Built', 'agence-murailles' ),     'type' => 'number' ),
        'am_address'      => array( 'label' => __( 'Address', 'agence-murailles' ),        'type' => 'text' ),
        'am_latitude'     => array( 'label' => __( 'Latitude', 'agence-murailles' ),       'type' => 'text' ),
        'am_longitude'    => array( 'label' => __( 'Longitude', 'agence-murailles' ),      'type' => 'text' ),
        'am_featured'     => array( 'label' => __( 'Featured?', 'agence-murailles' ),      'type' => 'checkbox' ),
        'am_video_url'    => array( 'label' => __( 'Video URL', 'agence-murailles' ),      'type' => 'url' ),
        'am_agent_id'     => array( 'label' => __( 'Assigned Agent (Post ID)', 'agence-murailles' ), 'type' => 'number' ),
    );

    echo '<table class="form-table"><tbody>';
    foreach ( $fields as $key => $field ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<tr><th><label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] ) . '</label></th><td>';

        if ( 'select' === $field['type'] ) {
            echo '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '">';
            foreach ( $field['options'] as $opt_val => $opt_label ) {
                echo '<option value="' . esc_attr( $opt_val ) . '"' . selected( $value, $opt_val, false ) . '>' . esc_html( $opt_label ) . '</option>';
            }
            echo '</select>';
        } elseif ( 'checkbox' === $field['type'] ) {
            echo '<input type="checkbox" name="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" value="1"' . checked( $value, '1', false ) . '>';
        } else {
            echo '<input type="' . esc_attr( $field['type'] ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" class="regular-text">';
        }

        echo '</td></tr>';
    }
    echo '</tbody></table>';
}

/**
 * Property Gallery meta box.
 */
function am_property_gallery_cb( $post ) {
    $gallery_ids = get_post_meta( $post->ID, 'am_gallery_ids', true );
    ?>
    <div id="am-gallery-wrap">
        <input type="hidden" name="am_gallery_ids" id="am_gallery_ids" value="<?php echo esc_attr( $gallery_ids ); ?>">
        <div id="am-gallery-preview" style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:10px;">
            <?php
            if ( $gallery_ids ) {
                $ids = explode( ',', $gallery_ids );
                foreach ( $ids as $id ) {
                    $img = wp_get_attachment_image_url( intval( $id ), 'thumbnail' );
                    if ( $img ) {
                        echo '<img src="' . esc_url( $img ) . '" style="width:80px;height:80px;object-fit:cover;border-radius:4px;">';
                    }
                }
            }
            ?>
        </div>
        <button type="button" class="button" id="am-add-gallery"><?php esc_html_e( 'Add Gallery Images', 'agence-murailles' ); ?></button>
        <button type="button" class="button" id="am-clear-gallery"><?php esc_html_e( 'Clear Gallery', 'agence-murailles' ); ?></button>
    </div>
    <script>
    jQuery(function($){
        $('#am-add-gallery').on('click',function(e){
            e.preventDefault();
            var frame = wp.media({title:'Select Gallery Images',multiple:true,library:{type:'image'}});
            frame.on('select',function(){
                var ids=[];
                frame.state().get('selection').each(function(att){ids.push(att.id);});
                var current=$('#am_gallery_ids').val();
                if(current)ids=current.split(',').concat(ids);
                $('#am_gallery_ids').val(ids.join(','));
                var html='';
                ids.forEach(function(id){
                    var att=wp.media.attachment(id);att.fetch();
                    html+='<img src="'+att.get('url')+'" style="width:80px;height:80px;object-fit:cover;border-radius:4px;">';
                });
                $('#am-gallery-preview').html(html);
            });
            frame.open();
        });
        $('#am-clear-gallery').on('click',function(){
            $('#am_gallery_ids').val('');
            $('#am-gallery-preview').html('');
        });
    });
    </script>
    <?php
}

/**
 * Save property meta.
 */
function am_save_property_meta( $post_id ) {
    if ( ! isset( $_POST['am_property_nonce'] ) || ! wp_verify_nonce( $_POST['am_property_nonce'], 'am_property_details_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $text_fields = array( 'am_price', 'am_price_period', 'am_bedrooms', 'am_bathrooms', 'am_sqft', 'am_garage', 'am_year_built', 'am_address', 'am_latitude', 'am_longitude', 'am_video_url', 'am_agent_id' );

    foreach ( $text_fields as $key ) {
        if ( isset( $_POST[ $key ] ) ) {
            update_post_meta( $post_id, $key, sanitize_text_field( $_POST[ $key ] ) );
        }
    }

    // Checkbox
    update_post_meta( $post_id, 'am_featured', isset( $_POST['am_featured'] ) ? '1' : '0' );

    // Gallery
    if ( isset( $_POST['am_gallery_ids'] ) ) {
        update_post_meta( $post_id, 'am_gallery_ids', sanitize_text_field( $_POST['am_gallery_ids'] ) );
    }
}
add_action( 'save_post_property', 'am_save_property_meta' );

/* ─── Agent Details ──────────────────────────────────── */

function am_agent_details_cb( $post ) {
    wp_nonce_field( 'am_agent_details_nonce', 'am_agent_nonce' );

    $fields = array(
        'am_agent_phone'    => array( 'label' => __( 'Phone', 'agence-murailles' ),    'type' => 'text' ),
        'am_agent_email'    => array( 'label' => __( 'Email', 'agence-murailles' ),    'type' => 'email' ),
        'am_agent_website'  => array( 'label' => __( 'Website', 'agence-murailles' ),  'type' => 'url' ),
        'am_agent_facebook' => array( 'label' => __( 'Facebook', 'agence-murailles' ), 'type' => 'url' ),
        'am_agent_twitter'  => array( 'label' => __( 'Twitter', 'agence-murailles' ),  'type' => 'url' ),
        'am_agent_linkedin' => array( 'label' => __( 'LinkedIn', 'agence-murailles' ), 'type' => 'url' ),
        'am_agent_agency'   => array( 'label' => __( 'Agency (Post ID)', 'agence-murailles' ), 'type' => 'number' ),
        'am_agent_rating'   => array( 'label' => __( 'Rating (1-5)', 'agence-murailles' ),     'type' => 'number' ),
    );

    echo '<table class="form-table"><tbody>';
    foreach ( $fields as $key => $field ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<tr><th><label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] ) . '</label></th><td>';
        echo '<input type="' . esc_attr( $field['type'] ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" class="regular-text">';
        echo '</td></tr>';
    }
    echo '</tbody></table>';
}

function am_save_agent_meta( $post_id ) {
    if ( ! isset( $_POST['am_agent_nonce'] ) || ! wp_verify_nonce( $_POST['am_agent_nonce'], 'am_agent_details_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $keys = array( 'am_agent_phone', 'am_agent_email', 'am_agent_website', 'am_agent_facebook', 'am_agent_twitter', 'am_agent_linkedin', 'am_agent_agency', 'am_agent_rating' );
    foreach ( $keys as $key ) {
        if ( isset( $_POST[ $key ] ) ) {
            update_post_meta( $post_id, $key, sanitize_text_field( $_POST[ $key ] ) );
        }
    }
}
add_action( 'save_post_agent', 'am_save_agent_meta' );

/* ─── Agency Details ─────────────────────────────────── */

function am_agency_details_cb( $post ) {
    wp_nonce_field( 'am_agency_details_nonce', 'am_agency_nonce' );

    $fields = array(
        'am_agency_phone'    => array( 'label' => __( 'Phone', 'agence-murailles' ),    'type' => 'text' ),
        'am_agency_email'    => array( 'label' => __( 'Email', 'agence-murailles' ),    'type' => 'email' ),
        'am_agency_website'  => array( 'label' => __( 'Website', 'agence-murailles' ),  'type' => 'url' ),
        'am_agency_address'  => array( 'label' => __( 'Address', 'agence-murailles' ),  'type' => 'text' ),
        'am_agency_facebook' => array( 'label' => __( 'Facebook', 'agence-murailles' ), 'type' => 'url' ),
        'am_agency_twitter'  => array( 'label' => __( 'Twitter', 'agence-murailles' ),  'type' => 'url' ),
        'am_agency_linkedin' => array( 'label' => __( 'LinkedIn', 'agence-murailles' ), 'type' => 'url' ),
    );

    echo '<table class="form-table"><tbody>';
    foreach ( $fields as $key => $field ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<tr><th><label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] ) . '</label></th><td>';
        echo '<input type="' . esc_attr( $field['type'] ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" class="regular-text">';
        echo '</td></tr>';
    }
    echo '</tbody></table>';
}

function am_save_agency_meta( $post_id ) {
    if ( ! isset( $_POST['am_agency_nonce'] ) || ! wp_verify_nonce( $_POST['am_agency_nonce'], 'am_agency_details_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $keys = array( 'am_agency_phone', 'am_agency_email', 'am_agency_website', 'am_agency_address', 'am_agency_facebook', 'am_agency_twitter', 'am_agency_linkedin' );
    foreach ( $keys as $key ) {
        if ( isset( $_POST[ $key ] ) ) {
            update_post_meta( $post_id, $key, sanitize_text_field( $_POST[ $key ] ) );
        }
    }
}
add_action( 'save_post_agency', 'am_save_agency_meta' );

/* ─── Testimonial Meta ───────────────────────────────── */

function am_testimonial_meta_cb( $post ) {
    wp_nonce_field( 'am_testimonial_nonce', 'am_test_nonce' );
    $role   = get_post_meta( $post->ID, 'am_testimonial_role', true );
    $rating = get_post_meta( $post->ID, 'am_testimonial_rating', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="am_testimonial_role"><?php esc_html_e( 'Role / Title', 'agence-murailles' ); ?></label></th>
            <td><input type="text" name="am_testimonial_role" id="am_testimonial_role" value="<?php echo esc_attr( $role ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="am_testimonial_rating"><?php esc_html_e( 'Rating (1-5)', 'agence-murailles' ); ?></label></th>
            <td><input type="number" name="am_testimonial_rating" id="am_testimonial_rating" value="<?php echo esc_attr( $rating ); ?>" min="1" max="5" class="small-text"></td>
        </tr>
    </table>
    <?php
}

function am_save_testimonial_meta( $post_id ) {
    if ( ! isset( $_POST['am_test_nonce'] ) || ! wp_verify_nonce( $_POST['am_test_nonce'], 'am_testimonial_nonce' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['am_testimonial_role'] ) ) {
        update_post_meta( $post_id, 'am_testimonial_role', sanitize_text_field( $_POST['am_testimonial_role'] ) );
    }
    if ( isset( $_POST['am_testimonial_rating'] ) ) {
        update_post_meta( $post_id, 'am_testimonial_rating', absint( $_POST['am_testimonial_rating'] ) );
    }
}
add_action( 'save_post_testimonial', 'am_save_testimonial_meta' );
