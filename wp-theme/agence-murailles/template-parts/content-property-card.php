<?php
/**
 * Template Part: Property Card (Grid View)
 *
 * @package Agence_Murailles
 */

$price    = am_get_property_price();
$location = am_get_property_location();
$beds     = get_post_meta( get_the_ID(), 'am_bedrooms', true );
$baths    = get_post_meta( get_the_ID(), 'am_bathrooms', true );
$sqft     = get_post_meta( get_the_ID(), 'am_sqft', true );
$featured = get_post_meta( get_the_ID(), 'am_featured', true );
?>

<div class="property-listing card border-0 rounded-3">
    <div class="listing-img-wrapper p-3">
        <div class="list-img-slide position-relative">
            <?php if ( $featured ) : ?>
                <div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
                    <div class="label verified-listing d-inline-flex align-items-center justify-content-center">
                        <span class="svg-icon text-light svg-icon-2hx me-1">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242Z" fill="currentColor"/>
                                <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
                            </svg>
                        </span><?php esc_html_e( 'Verified', 'agence-murailles' ); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="click-view-property" role="img">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'am-property-card', array( 'class' => 'img-fluid' ) ); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url( AM_THEME_URI . '/assets/img/p-1.jpg' ); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </div>

    <div class="listing-detail-wrapper pb-3 px-3">
        <div class="listing-short-detail-wrap">
            <div class="listing-short-detail">
                <?php echo am_get_property_status_badge(); ?>
                <h4 class="listing-name fw-semibold mb-1">
                    <a href="<?php the_permalink(); ?>" class="prt-link-detail"><?php the_title(); ?></a>
                </h4>
                <?php if ( $location ) : ?>
                    <span class="listing-location text-muted">
                        <i class="fa-solid fa-location-dot me-1"></i><?php echo esc_html( $location ); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="price-features-wrapper px-3 pb-3">
        <div class="list-fx-features d-flex align-items-center justify-content-between">
            <div class="listing-card-info-icon d-flex align-items-center gap-3">
                <?php if ( $beds ) : ?>
                    <span class="text-muted"><i class="bi bi-hospital me-1"></i><?php echo esc_html( $beds ); ?> Beds</span>
                <?php endif; ?>
                <?php if ( $baths ) : ?>
                    <span class="text-muted"><i class="bi bi-droplet me-1"></i><?php echo esc_html( $baths ); ?> Baths</span>
                <?php endif; ?>
                <?php if ( $sqft ) : ?>
                    <span class="text-muted"><i class="bi bi-arrows-fullscreen me-1"></i><?php echo esc_html( number_format( (float) $sqft ) ); ?> sqft</span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="listing-detail-footer d-flex align-items-center justify-content-between px-3 py-2 border-top">
        <div class="footer-first">
            <h4 class="listing-card-info-price mb-0 text-main"><?php echo $price; ?></h4>
        </div>
        <div class="footer-flex">
            <a href="<?php the_permalink(); ?>" class="prt-view text-muted">
                <?php esc_html_e( 'View', 'agence-murailles' ); ?> <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</div>
