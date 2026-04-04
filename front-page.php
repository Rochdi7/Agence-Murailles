<?php
/**
 * Homepage Template
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">

    <!-- ══ HERO SECTION ══════════════════════════════════ -->
    <?php get_template_part( 'template-parts/hero-section' ); ?>

    <!-- ══ PROPERTY SEARCH ═══════════════════════════════ -->
    <section class="section search-section">
        <div class="container">
            <?php get_template_part( 'template-parts/search-form-property' ); ?>
        </div>
    </section>

    <!-- ══ FEATURED PROPERTIES ═══════════════════════════ -->
    <section class="section featured-properties-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php esc_html_e( 'Our Selection', 'agence-murailles' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Featured Properties', 'agence-murailles' ); ?></h2>
                <p class="section-description"><?php esc_html_e( 'Discover our hand-picked properties in the best locations across Morocco.', 'agence-murailles' ); ?></p>
            </div>

            <div class="properties-grid">
                <?php
                $featured_query = new WP_Query( array(
                    'post_type'      => 'property',
                    'posts_per_page' => 6,
                    'meta_key'       => 'am_featured',
                    'meta_value'     => '1',
                    'post_status'    => 'publish',
                ) );

                if ( $featured_query->have_posts() ) :
                    while ( $featured_query->have_posts() ) : $featured_query->the_post();
                        get_template_part( 'template-parts/content-property-card' );
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Fallback: show latest properties if no featured ones
                    $latest_query = new WP_Query( array(
                        'post_type'      => 'property',
                        'posts_per_page' => 6,
                        'post_status'    => 'publish',
                    ) );
                    if ( $latest_query->have_posts() ) :
                        while ( $latest_query->have_posts() ) : $latest_query->the_post();
                            get_template_part( 'template-parts/content-property-card' );
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p class="no-results">' . esc_html__( 'No properties available yet. Add properties from the WordPress admin.', 'agence-murailles' ) . '</p>';
                    endif;
                endif;
                ?>
            </div>

            <div class="section-cta">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>" class="btn btn-outline">
                    <?php esc_html_e( 'View All Properties', 'agence-murailles' ); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- ══ PROPERTY TYPES ════════════════════════════════ -->
    <section class="section property-types-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php esc_html_e( 'Browse By', 'agence-murailles' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Property Types', 'agence-murailles' ); ?></h2>
            </div>

            <div class="types-grid">
                <?php
                $property_types = get_terms( array(
                    'taxonomy'   => 'property_type',
                    'hide_empty' => false,
                ) );

                $type_icons = array(
                    'apartment'  => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="9" y1="6" x2="9" y2="6.01"/><line x1="15" y1="6" x2="15" y2="6.01"/><line x1="9" y1="10" x2="9" y2="10.01"/><line x1="15" y1="10" x2="15" y2="10.01"/><line x1="9" y1="14" x2="9" y2="14.01"/><line x1="15" y1="14" x2="15" y2="14.01"/><path d="M10 22v-4h4v4"/></svg>',
                    'villa'      => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-6h6v6"/></svg>',
                    'house'      => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>',
                    'land'       => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 22L12 2l10 20H2z"/><path d="M12 18v-8"/></svg>',
                    'commercial' => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>',
                );

                if ( $property_types && ! is_wp_error( $property_types ) ) :
                    foreach ( $property_types as $type ) :
                        $slug  = $type->slug;
                        $icon  = isset( $type_icons[ $slug ] ) ? $type_icons[ $slug ] : $type_icons['house'];
                        $count = $type->count;
                        ?>
                        <a href="<?php echo esc_url( get_term_link( $type ) ); ?>" class="type-card">
                            <div class="type-icon"><?php echo $icon; ?></div>
                            <h3 class="type-name"><?php echo esc_html( $type->name ); ?></h3>
                            <span class="type-count">
                                <?php printf( esc_html( _n( '%d Property', '%d Properties', $count, 'agence-murailles' ) ), $count ); ?>
                            </span>
                        </a>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- ══ ABOUT / WHY US ════════════════════════════════ -->
    <section class="section about-preview-section">
        <div class="container">
            <div class="about-preview-grid">
                <div class="about-preview-content">
                    <span class="section-subtitle"><?php esc_html_e( 'Why Choose Us', 'agence-murailles' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Your Trusted Real Estate Partner in Morocco', 'agence-murailles' ); ?></h2>
                    <p><?php esc_html_e( 'With years of experience in the Moroccan real estate market, Agence Murailles offers personalized service and expert guidance to help you find your dream property.', 'agence-murailles' ); ?></p>

                    <div class="features-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                            </div>
                            <div>
                                <h4><?php esc_html_e( 'Verified Properties', 'agence-murailles' ); ?></h4>
                                <p><?php esc_html_e( 'Every property is personally verified by our team.', 'agence-murailles' ); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                            </div>
                            <div>
                                <h4><?php esc_html_e( 'Expert Agents', 'agence-murailles' ); ?></h4>
                                <p><?php esc_html_e( 'Our experienced team knows every neighborhood.', 'agence-murailles' ); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                            </div>
                            <div>
                                <h4><?php esc_html_e( 'Transparent Pricing', 'agence-murailles' ); ?></h4>
                                <p><?php esc_html_e( 'No hidden fees, no surprises. Clear and honest dealings.', 'agence-murailles' ); ?></p>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-primary">
                        <?php esc_html_e( 'Learn More About Us', 'agence-murailles' ); ?>
                    </a>
                </div>
                <div class="about-preview-stats">
                    <div class="stat-card">
                        <span class="stat-number">500+</span>
                        <span class="stat-label"><?php esc_html_e( 'Properties Sold', 'agence-murailles' ); ?></span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">15+</span>
                        <span class="stat-label"><?php esc_html_e( 'Years Experience', 'agence-murailles' ); ?></span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">50+</span>
                        <span class="stat-label"><?php esc_html_e( 'Expert Agents', 'agence-murailles' ); ?></span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">98%</span>
                        <span class="stat-label"><?php esc_html_e( 'Happy Clients', 'agence-murailles' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ OUR AGENTS ════════════════════════════════════ -->
    <section class="section agents-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php esc_html_e( 'Meet The Team', 'agence-murailles' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Our Expert Agents', 'agence-murailles' ); ?></h2>
            </div>

            <div class="agents-grid">
                <?php
                $agents_query = new WP_Query( array(
                    'post_type'      => 'agent',
                    'posts_per_page' => 4,
                    'post_status'    => 'publish',
                ) );

                if ( $agents_query->have_posts() ) :
                    while ( $agents_query->have_posts() ) : $agents_query->the_post();
                        get_template_part( 'template-parts/content-agent-card' );
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="no-results">' . esc_html__( 'No agents added yet. Add team members from the WordPress admin.', 'agence-murailles' ) . '</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- ══ TESTIMONIALS ══════════════════════════════════ -->
    <section class="section testimonials-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php esc_html_e( 'Client Reviews', 'agence-murailles' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'What Our Clients Say', 'agence-murailles' ); ?></h2>
            </div>

            <div class="testimonials-grid">
                <?php
                $testimonials_query = new WP_Query( array(
                    'post_type'      => 'testimonial',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ) );

                if ( $testimonials_query->have_posts() ) :
                    while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                        get_template_part( 'template-parts/content-testimonial' );
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="no-results">' . esc_html__( 'No testimonials yet. Add client reviews from the WordPress admin.', 'agence-murailles' ) . '</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- ══ LATEST BLOG POSTS ═════════════════════════════ -->
    <section class="section blog-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php esc_html_e( 'News & Insights', 'agence-murailles' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Latest From Our Blog', 'agence-murailles' ); ?></h2>
            </div>

            <div class="posts-grid">
                <?php
                $blog_query = new WP_Query( array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ) );

                if ( $blog_query->have_posts() ) :
                    while ( $blog_query->have_posts() ) : $blog_query->the_post();
                        get_template_part( 'template-parts/content-post-card' );
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="no-results">' . esc_html__( 'No blog posts yet. Start writing from the WordPress admin.', 'agence-murailles' ) . '</p>';
                endif;
                ?>
            </div>

            <div class="section-cta">
                <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-outline">
                    <?php esc_html_e( 'Read All Articles', 'agence-murailles' ); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- ══ CTA SECTION ═══════════════════════════════════ -->
    <section class="section cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php esc_html_e( 'Ready to Find Your Dream Property?', 'agence-murailles' ); ?></h2>
                <p><?php esc_html_e( 'Contact us today and let our experts help you find the perfect property in Morocco.', 'agence-murailles' ); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-white"><?php esc_html_e( 'Contact Us', 'agence-murailles' ); ?></a>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>" class="btn btn-outline-white"><?php esc_html_e( 'Browse Properties', 'agence-murailles' ); ?></a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
