<?php
/**
 * Template Part: Hero Section for Homepage
 *
 * @package AgenceMurailles
 */
?>

<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <?php esc_html_e( 'Find Your Perfect', 'agence-murailles' ); ?>
                <span class="hero-highlight"><?php esc_html_e( 'Property in Morocco', 'agence-murailles' ); ?></span>
            </h1>
            <p class="hero-description">
                <?php esc_html_e( 'Discover luxury villas, modern apartments, and prime commercial spaces with Agence Murailles — your trusted Moroccan real estate partner.', 'agence-murailles' ); ?>
            </p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>" class="btn btn-primary btn-lg">
                    <?php esc_html_e( 'Explore Properties', 'agence-murailles' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline-white btn-lg">
                    <?php esc_html_e( 'Get In Touch', 'agence-murailles' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>
