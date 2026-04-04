<?php
/**
 * Single Annonce Immobilier Template
 *
 * @package AgenceMurailles
 */

get_header();

$prix        = am_get_annonce_meta( 'am_annonce_prix' );
$surface     = am_get_annonce_meta( 'am_annonce_surface' );
$chambres    = am_get_annonce_meta( 'am_annonce_chambres' );
$sdb         = am_get_annonce_meta( 'am_annonce_sdb' );
$etage       = am_get_annonce_meta( 'am_annonce_etage' );
$adresse     = am_get_annonce_meta( 'am_annonce_adresse' );
$contact     = am_get_annonce_meta( 'am_annonce_contact' );
$email       = am_get_annonce_meta( 'am_annonce_email' );
$whatsapp    = am_get_annonce_meta( 'am_annonce_whatsapp' );
$ref         = am_get_annonce_meta( 'am_annonce_ref' );
$disponible  = am_get_annonce_meta( 'am_annonce_disponible' );
$equipements = am_get_annonce_equipements();
$gallery_str = am_get_annonce_meta( 'am_annonce_gallery' );
$gallery     = ! empty( $gallery_str ) ? array_filter( array_map( 'absint', explode( ',', $gallery_str ) ) ) : array();
?>

<main id="main-content" class="site-main single-property single-annonce">

    <?php while ( have_posts() ) : the_post(); ?>

    <!-- Header -->
    <section class="property-header">
        <div class="container">
            <?php am_breadcrumb(); ?>
            <div class="property-header-content">
                <div class="property-header-left">
                    <div class="property-header-badges">
                        <?php am_annonce_transaction_badge(); ?>
                        <span class="property-type-tag"><?php am_annonce_categorie_label(); ?></span>
                        <?php if ( $disponible === '1' ) : ?>
                            <span class="annonce-badge badge-disponible"><?php esc_html_e( 'Disponible', 'agence-murailles' ); ?></span>
                        <?php endif; ?>
                    </div>
                    <h1 class="property-title"><?php the_title(); ?></h1>
                    <?php if ( $adresse ) : ?>
                        <p class="property-address">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php echo esc_html( $adresse ); ?>
                        </p>
                    <?php endif; ?>
                    <?php if ( $ref ) : ?>
                        <span class="annonce-ref-detail"><?php esc_html_e( 'Référence:', 'agence-murailles' ); ?> <?php echo esc_html( $ref ); ?></span>
                    <?php endif; ?>
                </div>
                <div class="property-header-right">
                    <div class="property-price-large">
                        <?php echo esc_html( am_format_price( $prix ) ); ?>
                    </div>
                    <span class="annonce-publish-date">
                        <?php esc_html_e( 'Publiée le', 'agence-murailles' ); ?> <?php echo esc_html( get_the_date() ); ?>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
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
                        <?php foreach ( $gallery as $image_id ) :
                            $full_url  = wp_get_attachment_image_url( $image_id, 'property-hero' );
                            $thumb_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );
                            if ( $full_url ) :
                        ?>
                            <button class="gallery-thumb" data-full="<?php echo esc_url( $full_url ); ?>">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="" loading="lazy">
                            </button>
                        <?php endif; endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="property-content-section">
        <div class="container">
            <div class="property-layout">

                <div class="property-main">

                    <!-- Specs -->
                    <div class="property-detail-card">
                        <h2 class="detail-card-title"><?php esc_html_e( 'Détails de l\'annonce', 'agence-murailles' ); ?></h2>
                        <div class="detail-specs-grid">
                            <?php if ( $surface ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Surface', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $surface ); ?> m²</span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $chambres ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Chambres', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $chambres ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $sdb ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Salles de bain', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $sdb ); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $etage ) : ?>
                                <div class="detail-spec">
                                    <span class="detail-spec-label"><?php esc_html_e( 'Étage', 'agence-murailles' ); ?></span>
                                    <span class="detail-spec-value"><?php echo esc_html( $etage ); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="detail-spec">
                                <span class="detail-spec-label"><?php esc_html_e( 'Type', 'agence-murailles' ); ?></span>
                                <span class="detail-spec-value"><?php am_annonce_categorie_label(); ?></span>
                            </div>
                            <div class="detail-spec">
                                <span class="detail-spec-label"><?php esc_html_e( 'Ville', 'agence-murailles' ); ?></span>
                                <span class="detail-spec-value"><?php am_annonce_ville_label(); ?></span>
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

                    <!-- Equipements -->
                    <?php if ( ! empty( $equipements ) ) : ?>
                        <div class="property-detail-card">
                            <h2 class="detail-card-title"><?php esc_html_e( 'Équipements', 'agence-murailles' ); ?></h2>
                            <ul class="features-grid">
                                <?php foreach ( $equipements as $equip ) : ?>
                                    <li class="feature-tag">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20,6 9,17 4,12"/></svg>
                                        <?php echo esc_html( $equip ); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                </div>

                <!-- Sidebar -->
                <aside class="property-sidebar">

                    <!-- Contact annonceur -->
                    <div class="sidebar-card annonce-contact-card">
                        <h3><?php esc_html_e( 'Contacter l\'annonceur', 'agence-murailles' ); ?></h3>

                        <?php if ( $contact ) : ?>
                            <a href="tel:<?php echo esc_attr( $contact ); ?>" class="btn btn-primary btn-full annonce-action-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                                <?php echo esc_html( $contact ); ?>
                            </a>
                        <?php endif; ?>

                        <?php if ( $whatsapp ) : ?>
                            <a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp ) ); ?>?text=<?php echo urlencode( sprintf( __( 'Bonjour, je suis intéressé(e) par votre annonce: %s', 'agence-murailles' ), get_the_title() ) ); ?>" target="_blank" rel="noopener" class="btn btn-full annonce-action-btn btn-whatsapp">
                                WhatsApp
                            </a>
                        <?php endif; ?>

                        <?php if ( $email ) : ?>
                            <a href="mailto:<?php echo esc_attr( $email ); ?>?subject=<?php echo rawurlencode( sprintf( __( 'Annonce: %s', 'agence-murailles' ), get_the_title() ) ); ?>" class="btn btn-outline btn-full annonce-action-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                <?php esc_html_e( 'Envoyer un email', 'agence-murailles' ); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <!-- Share -->
                    <div class="sidebar-card">
                        <h3><?php esc_html_e( 'Partager cette annonce', 'agence-murailles' ); ?></h3>
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

    <!-- Similar Annonces -->
    <section class="section related-properties-section">
        <div class="container">
            <h2 class="section-title"><?php esc_html_e( 'Annonces similaires', 'agence-murailles' ); ?></h2>
            <div class="properties-grid">
                <?php
                $cat_terms = get_the_terms( get_the_ID(), 'annonce_categorie' );
                $cat_slugs = array();
                if ( $cat_terms && ! is_wp_error( $cat_terms ) ) {
                    $cat_slugs = wp_list_pluck( $cat_terms, 'slug' );
                }

                $similar_args = array(
                    'post_type'      => 'annonce',
                    'posts_per_page' => 3,
                    'post__not_in'   => array( get_the_ID() ),
                    'post_status'    => 'publish',
                );

                if ( ! empty( $cat_slugs ) ) {
                    $similar_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'annonce_categorie',
                            'field'    => 'slug',
                            'terms'    => $cat_slugs,
                        ),
                    );
                }

                $similar = new WP_Query( $similar_args );
                if ( $similar->have_posts() ) :
                    while ( $similar->have_posts() ) : $similar->the_post();
                        get_template_part( 'template-parts/content-annonce-card' );
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
