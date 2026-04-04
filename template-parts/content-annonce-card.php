<?php
/**
 * Template Part: Annonce Immobilier Card
 *
 * @package AgenceMurailles
 */

$prix    = am_get_annonce_meta( 'am_annonce_prix' );
$ref     = am_get_annonce_meta( 'am_annonce_ref' );
$dispo   = am_get_annonce_meta( 'am_annonce_disponible' );
?>

<article id="annonce-<?php the_ID(); ?>" <?php post_class( 'property-card annonce-card' ); ?>>
    <div class="property-card-image">
        <a href="<?php the_permalink(); ?>">
            <?php am_property_thumbnail( 'property-card' ); ?>
        </a>
        <div class="property-card-badges">
            <?php am_annonce_transaction_badge(); ?>
            <?php if ( $dispo === '1' ) : ?>
                <span class="annonce-badge badge-disponible"><?php esc_html_e( 'Disponible', 'agence-murailles' ); ?></span>
            <?php endif; ?>
        </div>
        <div class="property-card-price">
            <?php echo esc_html( am_format_price( $prix ) ); ?>
        </div>
    </div>

    <div class="property-card-body">
        <div class="property-card-meta">
            <span class="property-type-label"><?php am_annonce_categorie_label(); ?></span>
            <span class="property-city-label">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <?php am_annonce_ville_label(); ?>
            </span>
        </div>

        <h3 class="property-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <?php if ( $ref ) : ?>
            <span class="annonce-ref"><?php esc_html_e( 'Réf:', 'agence-murailles' ); ?> <?php echo esc_html( $ref ); ?></span>
        <?php endif; ?>

        <?php if ( has_excerpt() ) : ?>
            <p class="property-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 15 ) ); ?></p>
        <?php endif; ?>

        <?php am_annonce_quick_specs(); ?>
    </div>

    <div class="property-card-footer">
        <span class="annonce-date">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <?php echo esc_html( get_the_date() ); ?>
        </span>
        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline">
            <?php esc_html_e( 'Voir l\'annonce', 'agence-murailles' ); ?>
        </a>
    </div>
</article>
