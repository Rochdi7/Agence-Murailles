<?php
/**
 * Template Part: Property Card
 *
 * @package AgenceMurailles
 */

$price = am_get_property_meta( 'am_price' );
?>

<article id="property-<?php the_ID(); ?>" <?php post_class( 'property-card' ); ?>>
    <div class="property-card-image">
        <a href="<?php the_permalink(); ?>">
            <?php am_property_thumbnail( 'property-card' ); ?>
        </a>
        <div class="property-card-badges">
            <?php am_property_status_badge(); ?>
        </div>
        <div class="property-card-price">
            <?php echo esc_html( am_format_price( $price ) ); ?>
        </div>
    </div>

    <div class="property-card-body">
        <div class="property-card-meta">
            <span class="property-type-label"><?php am_property_type_label(); ?></span>
            <span class="property-city-label">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <?php am_property_city_label(); ?>
            </span>
        </div>

        <h3 class="property-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <?php if ( has_excerpt() ) : ?>
            <p class="property-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 15 ) ); ?></p>
        <?php endif; ?>

        <?php am_property_quick_specs(); ?>
    </div>

    <div class="property-card-footer">
        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline">
            <?php esc_html_e( 'View Details', 'agence-murailles' ); ?>
        </a>
    </div>
</article>
