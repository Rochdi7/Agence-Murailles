<?php
/**
 * Single Property Template.
 * Based on single-property-1.html
 *
 * @package Agence_Murailles
 */

get_header();

while ( have_posts() ) :
    the_post();

    $price    = am_get_property_price();
    $location = am_get_property_location();
    $beds     = get_post_meta( get_the_ID(), 'am_bedrooms', true );
    $baths    = get_post_meta( get_the_ID(), 'am_bathrooms', true );
    $sqft     = get_post_meta( get_the_ID(), 'am_sqft', true );
    $garage   = get_post_meta( get_the_ID(), 'am_garage', true );
    $year     = get_post_meta( get_the_ID(), 'am_year_built', true );
    $address  = get_post_meta( get_the_ID(), 'am_address', true );
    $lat      = get_post_meta( get_the_ID(), 'am_latitude', true );
    $lng      = get_post_meta( get_the_ID(), 'am_longitude', true );
    $video    = get_post_meta( get_the_ID(), 'am_video_url', true );
    $gallery  = am_get_property_gallery();
    $agent    = am_get_property_agent();
?>

<!-- Gallery -->
<section class="pt-0 pb-0">
    <div class="featured_slick_gallery">
        <div class="row g-0">
            <?php if ( ! empty( $gallery ) ) : ?>
                <?php foreach ( array_slice( $gallery, 0, 3 ) as $i => $img ) : ?>
                    <div class="col-lg-<?php echo 0 === $i ? '8' : '4'; ?> col-md-<?php echo 0 === $i ? '8' : '4'; ?>">
                        <a href="<?php echo esc_url( $img['full'] ); ?>" class="mfp-gallery">
                            <img src="<?php echo esc_url( $img['full'] ); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" style="width:100%;height:<?php echo 0 === $i ? '500px' : '250px'; ?>;object-fit:cover;">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php elseif ( has_post_thumbnail() ) : ?>
                <div class="col-12">
                    <?php the_post_thumbnail( 'am-property-gallery', array( 'class' => 'img-fluid w-100', 'style' => 'height:500px;object-fit:cover;' ) ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Property Detail -->
<section class="gray-simple">
    <div class="container">
        <div class="row">

            <!-- Main Content -->
            <div class="col-lg-8 col-md-12">

                <!-- Header Info -->
                <div class="property_block_wrap style-2 p-4 rounded-3 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <?php echo am_get_property_status_badge(); ?>
                            <?php
                            $types = get_the_terms( get_the_ID(), 'property_type' );
                            if ( $types && ! is_wp_error( $types ) ) :
                                foreach ( $types as $type ) :
                            ?>
                                <span class="badge bg-primary ms-1"><?php echo esc_html( $type->name ); ?></span>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>

                    <h2 class="fw-bold mb-2"><?php the_title(); ?></h2>
                    <?php if ( $location ) : ?>
                        <p class="text-muted"><i class="fa-solid fa-location-dot me-1"></i><?php echo esc_html( $location ); ?></p>
                    <?php endif; ?>

                    <h3 class="text-main fw-bold"><?php echo $price; ?></h3>

                    <div class="property-specs d-flex flex-wrap gap-4 mt-3">
                        <?php if ( $beds ) : ?>
                            <div><strong><?php echo esc_html( $beds ); ?></strong> <span class="text-muted"><?php esc_html_e( 'Bedrooms', 'agence-murailles' ); ?></span></div>
                        <?php endif; ?>
                        <?php if ( $baths ) : ?>
                            <div><strong><?php echo esc_html( $baths ); ?></strong> <span class="text-muted"><?php esc_html_e( 'Bathrooms', 'agence-murailles' ); ?></span></div>
                        <?php endif; ?>
                        <?php if ( $sqft ) : ?>
                            <div><strong><?php echo esc_html( number_format( (float) $sqft ) ); ?></strong> <span class="text-muted"><?php esc_html_e( 'sqft', 'agence-murailles' ); ?></span></div>
                        <?php endif; ?>
                        <?php if ( $garage ) : ?>
                            <div><strong><?php echo esc_html( $garage ); ?></strong> <span class="text-muted"><?php esc_html_e( 'Garage', 'agence-murailles' ); ?></span></div>
                        <?php endif; ?>
                        <?php if ( $year ) : ?>
                            <div><strong><?php echo esc_html( $year ); ?></strong> <span class="text-muted"><?php esc_html_e( 'Year Built', 'agence-murailles' ); ?></span></div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Description -->
                <div class="property_block_wrap style-2 p-4 rounded-3 mb-4">
                    <h4 class="property_block_title"><?php esc_html_e( 'Description', 'agence-murailles' ); ?></h4>
                    <div class="block-body">
                        <?php the_content(); ?>
                    </div>
                </div>

                <!-- Amenities -->
                <?php
                $amenities = get_the_terms( get_the_ID(), 'property_amenity' );
                if ( $amenities && ! is_wp_error( $amenities ) ) :
                ?>
                <div class="property_block_wrap style-2 p-4 rounded-3 mb-4">
                    <h4 class="property_block_title"><?php esc_html_e( 'Amenities', 'agence-murailles' ); ?></h4>
                    <div class="block-body">
                        <ul class="row g-3 list-unstyled">
                            <?php foreach ( $amenities as $amenity ) : ?>
                                <li class="col-lg-4 col-md-6">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <?php echo esc_html( $amenity->name ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Video -->
                <?php if ( $video ) : ?>
                <div class="property_block_wrap style-2 p-4 rounded-3 mb-4">
                    <h4 class="property_block_title"><?php esc_html_e( 'Property Video', 'agence-murailles' ); ?></h4>
                    <div class="block-body">
                        <div class="ratio ratio-16x9">
                            <?php echo wp_oembed_get( $video ); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Map -->
                <?php if ( $lat && $lng ) : ?>
                <div class="property_block_wrap style-2 p-4 rounded-3 mb-4">
                    <h4 class="property_block_title"><?php esc_html_e( 'Location', 'agence-murailles' ); ?></h4>
                    <div class="block-body">
                        <div id="property-map" style="height:350px;border-radius:8px;background:#eee;">
                            <p class="text-center pt-5 text-muted"><?php esc_html_e( 'Map requires Google Maps API key. Set it in Customizer > Agence Murailles Options.', 'agence-murailles' ); ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12">

                <!-- Agent Info -->
                <?php if ( $agent ) : ?>
                <div class="card border-0 rounded-3 shadow-sm p-4 mb-4">
                    <div class="text-center mb-3">
                        <?php if ( $agent['thumbnail'] ) : ?>
                            <img src="<?php echo esc_url( $agent['thumbnail'] ); ?>" class="rounded-circle" style="width:100px;height:100px;object-fit:cover;" alt="<?php echo esc_attr( $agent['name'] ); ?>">
                        <?php endif; ?>
                        <h5 class="mt-2 mb-0"><?php echo esc_html( $agent['name'] ); ?></h5>
                        <a href="<?php echo esc_url( $agent['permalink'] ); ?>" class="text-muted small"><?php esc_html_e( 'View Profile', 'agence-murailles' ); ?></a>
                    </div>

                    <?php if ( $agent['phone'] ) : ?>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-telephone text-main"></i>
                            <a href="tel:<?php echo esc_attr( $agent['phone'] ); ?>"><?php echo esc_html( $agent['phone'] ); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if ( $agent['email'] ) : ?>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-envelope text-main"></i>
                            <a href="mailto:<?php echo esc_attr( $agent['email'] ); ?>"><?php echo esc_html( $agent['email'] ); ?></a>
                        </div>
                    <?php endif; ?>

                    <form class="agent-contact-form">
                        <input type="text" class="form-control mb-2" placeholder="<?php esc_attr_e( 'Your Name', 'agence-murailles' ); ?>">
                        <input type="email" class="form-control mb-2" placeholder="<?php esc_attr_e( 'Your Email', 'agence-murailles' ); ?>">
                        <textarea class="form-control mb-2" rows="3" placeholder="<?php esc_attr_e( 'Your Message', 'agence-murailles' ); ?>"></textarea>
                        <button type="submit" class="btn btn-main full-width"><?php esc_html_e( 'Send Message', 'agence-murailles' ); ?></button>
                    </form>
                </div>
                <?php endif; ?>

                <!-- Similar Properties -->
                <?php
                $similar = new WP_Query( array(
                    'post_type'      => 'property',
                    'posts_per_page' => 4,
                    'post__not_in'   => array( get_the_ID() ),
                    'orderby'        => 'rand',
                ) );

                if ( $similar->have_posts() ) :
                ?>
                <div class="card border-0 rounded-3 shadow-sm p-4">
                    <h5 class="mb-3"><?php esc_html_e( 'Similar Properties', 'agence-murailles' ); ?></h5>
                    <div class="sidebar_featured_property">
                        <?php
                        while ( $similar->have_posts() ) :
                            $similar->the_post();
                            get_template_part( 'template-parts/content-property-card', 'sidebar' );
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php
endwhile;
get_footer();
?>
