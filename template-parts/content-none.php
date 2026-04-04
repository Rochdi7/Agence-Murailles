<?php
/**
 * Template Part: No Results / Content None
 *
 * @package AgenceMurailles
 */
?>

<div class="no-results-container">
    <div class="no-results-icon">
        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <circle cx="11" cy="11" r="8"/>
            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            <line x1="8" y1="11" x2="14" y2="11"/>
        </svg>
    </div>
    <h2><?php esc_html_e( 'No Results Found', 'agence-murailles' ); ?></h2>
    <p><?php esc_html_e( 'Sorry, no results matched your search criteria. Please try adjusting your filters or search terms.', 'agence-murailles' ); ?></p>
    <a href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>" class="btn btn-primary">
        <?php esc_html_e( 'View All Properties', 'agence-murailles' ); ?>
    </a>
</div>
