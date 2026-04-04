<footer id="site-footer" class="site-footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">

                <div class="footer-col footer-about">
                    <h3 class="footer-title"><?php bloginfo( 'name' ); ?></h3>
                    <p class="footer-description">
                        <?php esc_html_e( 'Your trusted partner in Moroccan real estate. We help you find the perfect property — whether buying, selling, or renting.', 'agence-murailles' ); ?>
                    </p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                        <a href="#" aria-label="Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                        <a href="#" aria-label="LinkedIn"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2zM4 6a2 2 0 100-4 2 2 0 000 4z"/></svg></a>
                    </div>
                </div>

                <div class="footer-col footer-links">
                    <h4 class="footer-title"><?php esc_html_e( 'Quick Links', 'agence-murailles' ); ?></h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'depth'          => 1,
                        'fallback_cb'    => 'am_fallback_footer_menu',
                    ) );
                    ?>
                </div>

                <div class="footer-col footer-property-types">
                    <h4 class="footer-title"><?php esc_html_e( 'Property Types', 'agence-murailles' ); ?></h4>
                    <ul class="footer-menu">
                        <?php
                        $types = get_terms( array(
                            'taxonomy'   => 'property_type',
                            'hide_empty' => false,
                            'number'     => 6,
                        ) );
                        if ( $types && ! is_wp_error( $types ) ) {
                            foreach ( $types as $type ) {
                                echo '<li><a href="' . esc_url( get_term_link( $type ) ) . '">' . esc_html( $type->name ) . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>

                <div class="footer-col footer-contact">
                    <h4 class="footer-title"><?php esc_html_e( 'Contact Us', 'agence-murailles' ); ?></h4>
                    <ul class="footer-contact-list">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php esc_html_e( 'Marrakech, Morocco', 'agence-murailles' ); ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                            +212 5XX-XXXXXX
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            contact@agencemurailles.com
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'agence-murailles' ); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
<?php

/**
 * Fallback footer menu.
 */
function am_fallback_footer_menu() {
    echo '<ul class="footer-menu">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( get_post_type_archive_link( 'property' ) ) . '">' . esc_html__( 'Properties', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">' . esc_html__( 'About', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/blog' ) ) . '">' . esc_html__( 'Blog', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">' . esc_html__( 'Contact', 'agence-murailles' ) . '</a></li>';
    echo '</ul>';
}
