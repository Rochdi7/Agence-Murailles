<?php
/**
 * 404 Page Template
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">
    <section class="section error-404-section">
        <div class="container">
            <div class="error-404-content">
                <h1 class="error-404-title">404</h1>
                <h2><?php esc_html_e( 'Page Not Found', 'agence-murailles' ); ?></h2>
                <p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'agence-murailles' ); ?></p>
                <div class="error-404-actions">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                        <?php esc_html_e( 'Go Home', 'agence-murailles' ); ?>
                    </a>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>" class="btn btn-outline">
                        <?php esc_html_e( 'Browse Properties', 'agence-murailles' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
