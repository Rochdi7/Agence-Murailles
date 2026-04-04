<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content">
    <?php esc_html_e( 'Skip to content', 'agence-murailles' ); ?>
</a>

<header id="site-header" class="site-header<?php if ( is_front_page() ) echo ' header_transparent'; ?>">
    <!-- ── Top Bar ─────────────────────────────────────────────── -->
    <div class="header-top">
        <div class="container">
            <div class="header-top-content">
                <!-- Social icons LEFT -->
                <div class="header-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <!-- Contact info RIGHT -->
                <div class="header-contact-info">
                    <a href="#" class="header-info-item">
                        <i class="fas fa-heart"></i>
                        <?php esc_html_e( 'Favorites', 'agence-murailles' ); ?>
                    </a>
                    <a href="mailto:contact@agencemurailles.com" class="header-info-item">
                        <i class="fas fa-envelope"></i>
                        contact@agencemurailles.com
                    </a>
                    <a href="tel:+212500000000" class="header-info-item">
                        <i class="fas fa-phone-alt"></i>
                        +212 5XX-XXXXXX
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ── Main Navigation ─────────────────────────────────────── -->
    <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'agence-murailles' ); ?>">
        <div class="container">
            <div class="nav-content">
                <!-- Logo LEFT -->
                <div class="site-branding">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title-link">
                            <span class="site-title"><?php bloginfo( 'name' ); ?></span>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Hamburger (mobile) -->
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle Menu', 'agence-murailles' ); ?>">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>

                <!-- Menu CENTER -->
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => 'am_fallback_menu',
                ) );
                ?>

                <!-- Right side: phone + user + CTA -->
                <div class="header-right">
                    <span class="header-nav-phone">
                        <i class="fas fa-phone-alt"></i>
                        +212 5XX-XXXXXX
                    </span>
                    <a href="#" class="header-user-icon" aria-label="<?php esc_attr_e( 'My Account', 'agence-murailles' ); ?>">
                        <i class="far fa-user"></i>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/add-listing' ) ); ?>" class="header-cta">
                        <?php esc_html_e( 'Add Listing', 'agence-murailles' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php

/**
 * Fallback menu if no menu is assigned.
 */
function am_fallback_menu() {
    echo '<ul id="primary-menu" class="primary-menu">';
    echo '<li class="current-menu-item"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( get_post_type_archive_link( 'property' ) ) . '">' . esc_html__( 'Properties', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">' . esc_html__( 'About', 'agence-murailles' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">' . esc_html__( 'Contact', 'agence-murailles' ) . '</a></li>';
    echo '</ul>';
}
