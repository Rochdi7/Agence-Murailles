<?php
/**
 * Single Property Template
 *
 * @package AgenceMurailles
 */

get_header();

$price     = am_get_property_meta( 'am_price' );
$area      = am_get_property_meta( 'am_area' );
$bedrooms  = am_get_property_meta( 'am_bedrooms' );
$bathrooms = am_get_property_meta( 'am_bathrooms' );
$garages   = am_get_property_meta( 'am_garages' );
$year_built = am_get_property_meta( 'am_year_built' );
$address   = am_get_property_meta( 'am_address' );
$map_lat   = am_get_property_meta( 'am_map_lat' );
$map_lng   = am_get_property_meta( 'am_map_lng' );
$video_url = am_get_property_meta( 'am_video_url' );
$features  = am_get_features();
$gallery   = am_get_gallery_ids();
?>

<main id="main-content" class="site-main single-property">

    <?php while ( have_posts() ) : the_post(); ?>

    <!-- Property Header -->
    <section class="property-header">
        <div class="container">
            <div class="property-header-content">
                <div class="property-header-left">
                    <div class="property-header-badges">
                        <?php am_property_status_badge(); ?>
                        <span class="property-type-tag"><?php am_property_type_label(); ?></span>
                    </div>
                    <h1 class="property-title"><?php the_title(); ?></h1>
                    <?php if ( $address ) : ?>
                        <p class="property-address">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php echo esc_html( $address ); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="property-header-right">
                    <div class="property-price-large">
                        <?php echo esc_html( am_format_price( $price ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Gallery -->
    <section class="property-gallery-section">
        <div class="container">
            <div class="property-gallery">
                <div class="gallery-main">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'property-hero', array( 'class' => 'gallery-main-img', 'id' => 'gallery-main-image' ) ); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url( am_placeholder_image() ); ?>" alt="<?php the_title_attribute(); ?>" class="gallery-main-img" id="gallery-main-image">
                    <?php endif; ?>
                </div>
                <?php if ( ! empty( $gallery ) ) : ?>
                    <div class="gallery-thumbs">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <button class="gallery-thumb active" data-full="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'property-hero' ) ); ?>">
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                            </button>
                        <?php endif; ?>
                        <?php foreach ( $gallery as $image_id ) : ?>
                            <?php
                            $full_url  = wp_get_attachment_image_url( $image_id, 'property-hero' );
                            $thumb_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );
                            if ( $full_url ) :
                            ?>
                                <button class="gallery-thumb" data-full="<?php echo esc_url( $full_url ); ?>">
                                    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="" loading="lazy">
                                </button>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Property Content -->
    <section class="property-content-section">
        <div class="container">
            <div class="property-layout">

                <!-- Main Content -->
                <div class="property-main">

                    <!-- Quick Specs -->
                    <div class="property-detail-card">
                        <h2 class="detail-card-title"><?php esc_html_e( 'Property Details', 'agence-murailles' ); ?></h2>
                        <div class="detail-specs-grid">
                            <?php if ( $area ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Area', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $area ); ?> m²</span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $bedrooms ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Bedrooms', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $bedrooms ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $bathrooms ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Bathrooms', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $bathrooms ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $garages ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Garages', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $garages ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $year_built ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Year Built', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $year_built ); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="detail-spec">
                                <span class="detail-spec-label"><?php esc_html_e( 'Type', 'agence-murailles' ); ?></span>
                                <span class="detail-spec-value"><?php am_property_type_label(); ?></span>
                            </div>
                            <div class="detail-spec">
                                <span class="detail-spec-label"><?php esc_html_e( 'City', 'agence-murailles' ); ?></span>
                                <span class="detail-spec-value"><?php am_property_city_label(); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="property-detail-card">
                        <h2 class="detail-card-title"><?php esc_html_e( 'Description', 'agence-murailles' ); ?></h2>
                        <div class="property-description">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- Features -->
                    <?php if ( ! empty( $features ) ) : ?>
                        <div class="property-detail-card">
                            <h2 class="detail-card-title"><?php esc_html_e( 'Features & Amenities', 'agence-murailles' ); ?></h2>
                            <ul class="features-grid">
                                <?php foreach ( $features as $feature ) : ?>
                                    <li class="feature-tag">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20,6 9,17 4,12"/></svg>
                                        <?php echo esc_html( $feature ); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- Video -->
                    <?php if ( $video_url ) : ?>
                        <div class="property-detail-card">
                            <h2 class="detail-card-title"><?php esc_html_e( 'Video Tour', 'agence-murailles' ); ?></h2>
                            <div class="property-video">
                                <?php echo wp_oembed_get( $video_url ); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Map -->
                    <?php if ( $map_lat && $map_lng ) : ?>
                        <div class="property-detail-card">
                            <h2 class="detail-card-title"><?php esc_html_e( 'Location', 'agence-murailles' ); ?></h2>
                            <div class="property-map">
                                <iframe
                                    width="100%"
                                    height="400"
                                    frameborder="0"
                                    style="border:0; border-radius: 8px;"
                                    src="https://www.google.com/maps?q=<?php echo esc_attr( $map_lat ); ?>,<?php echo esc_attr( $map_lng ); ?>&output=embed"
                                    allowfullscreen
                                    loading="lazy"
                                ></iframe>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

                <!-- Sidebar -->
                <aside class="property-sidebar">

                    <!-- Contact Agent Card -->
                    <div class="sidebar-card contact-agent-card">
                        <h3><?php esc_html_e( 'Interested in this property?', 'agence-murailles' ); ?></h3>
                        <form class="property-inquiry-form" id="property-inquiry-form">
                            <?php wp_nonce_field( 'am_filter_nonce', 'nonce' ); ?>
                            <input type="hidden" name="action" value="am_submit_contact">
                            <input type="hidden" name="contact_subject" value="<?php printf( esc_attr__( 'Inquiry about: %s', 'agence-murailles' ), get_the_title() ); ?>">

                            <div class="form-group">
                                <input type="text" name="contact_name" placeholder="<?php esc_attr_e( 'Your Name *', 'agence-murailles' ); ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="contact_email" placeholder="<?php esc_attr_e( 'Your Email *', 'agence-murailles' ); ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="contact_phone" placeholder="<?php esc_attr_e( 'Your Phone', 'agence-murailles' ); ?>">
                            </div>
                            <div class="form-group">
                                <textarea name="contact_message" rows="4" placeholder="<?php esc_attr_e( 'I am interested in this property...', 'agence-murailles' ); ?>" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-full">
                                <?php esc_html_e( 'Send Inquiry', 'agence-murailles' ); ?>
                            </button>
                            <div class="form-message" id="inquiry-message"></div>
                        </form>
                    </div>

                    <!-- Share -->
                    <div class="sidebar-card">
                        <h3><?php esc_html_e( 'Share This Property', 'agence-murailles' ); ?></h3>
                        <div class="share-buttons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_the_permalink() ); ?>" target="_blank" rel="noopener" class="share-btn share-facebook">Facebook</a>
                            <a href="https://wa.me/?text=<?php echo urlencode( get_the_title() . ' - ' . get_the_permalink() ); ?>" target="_blank" rel="noopener" class="share-btn share-whatsapp">WhatsApp</a>
                            <a href="mailto:?subject=<?php echo rawurlencode( get_the_title() ); ?>&body=<?php echo rawurlencode( get_the_permalink() ); ?>" class="share-btn share-email">Email</a>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    <!-- Related Properties -->
    <section class="section related-properties-section">
        <div class="container">
            <h2 class="section-title"><?php esc_html_e( 'Similar Properties', 'agence-murailles' ); ?></h2>

            <div class="properties-grid">
                <?php
                $property_types = get_the_terms( get_the_ID(), 'property_type' );
                $type_slugs = array();
                if ( $property_types && ! is_wp_error( $property_types ) ) {
                    $type_slugs = wp_list_pluck( $property_types, 'slug' );
                }

                $related_args = array(
                    'post_type'      => 'property',
                    'posts_per_page' => 3,
                    'post__not_in'   => array( get_the_ID() ),
                    'post_status'    => 'publish',
                );

                if ( ! empty( $type_slugs ) ) {
                    $related_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'property_type',
                            'field'    => 'slug',
                            'terms'    => $type_slugs,
                        ),
                    );
                }

                $related_query = new WP_Query( $related_args );

                if ( $related_query->have_posts() ) :
                    while ( $related_query->have_posts() ) : $related_query->the_post();
                        get_template_part( 'template-parts/content-property-card' );
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();
