<?php
/**
 * Template Name: About Page
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">

    <!-- Page Hero -->
    <section class="page-hero page-hero-small">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'About Agence Murailles', 'agence-murailles' ); ?></h1>
            <p class="page-subtitle"><?php esc_html_e( 'Your trusted partner in Moroccan real estate since 2010', 'agence-murailles' ); ?></p>
        </div>
    </section>

    <!-- About Content -->
    <section class="section about-content-section">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>

                    <?php if ( empty( get_the_content() ) ) : ?>
                        <p><?php esc_html_e( 'Agence Murailles is a leading real estate agency based in Morocco, specializing in residential and commercial properties. With over 15 years of experience, we have helped hundreds of clients find their dream homes and make smart investments.', 'agence-murailles' ); ?></p>
                        <p><?php esc_html_e( 'Our team of expert agents provides personalized service, guiding you through every step of the buying, selling, or renting process. We pride ourselves on transparency, integrity, and a deep knowledge of the Moroccan real estate market.', 'agence-murailles' ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="about-image">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large', array( 'class' => 'about-img' ) ); ?>
                    <?php else : ?>
                        <div class="about-img-placeholder">
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 22V12h6v10"/><line x1="9" y1="6" x2="9.01" y2="6"/><line x1="15" y1="6" x2="15.01" y2="6"/></svg>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card stat-card-lg">
                    <span class="stat-number">500+</span>
                    <span class="stat-label"><?php esc_html_e( 'Properties Sold', 'agence-murailles' ); ?></span>
                </div>
                <div class="stat-card stat-card-lg">
                    <span class="stat-number">15+</span>
                    <span class="stat-label"><?php esc_html_e( 'Years Experience', 'agence-murailles' ); ?></span>
                </div>
                <div class="stat-card stat-card-lg">
                    <span class="stat-number">50+</span>
                    <span class="stat-label"><?php esc_html_e( 'Team Members', 'agence-murailles' ); ?></span>
                </div>
                <div class="stat-card stat-card-lg">
                    <span class="stat-number">10+</span>
                    <span class="stat-label"><?php esc_html_e( 'Cities Covered', 'agence-murailles' ); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="section agents-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php esc_html_e( 'Our Team', 'agence-murailles' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Meet Our Expert Agents', 'agence-murailles' ); ?></h2>
            </div>

            <div class="agents-grid">
                <?php
                $agents = new WP_Query( array(
                    'post_type'      => 'agent',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                ) );

                if ( $agents->have_posts() ) :
                    while ( $agents->have_posts() ) : $agents->the_post();
                        get_template_part( 'template-parts/content-agent-card' );
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="no-results">' . esc_html__( 'Team members coming soon.', 'agence-murailles' ) . '</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section testimonials-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle"><?php esc_html_e( 'Client Reviews', 'agence-murailles' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'What Our Clients Say', 'agence-murailles' ); ?></h2>
            </div>

            <div class="testimonials-grid">
                <?php
                $testimonials = new WP_Query( array(
                    'post_type'      => 'testimonial',
                    'posts_per_page' => 6,
                    'post_status'    => 'publish',
                ) );

                if ( $testimonials->have_posts() ) :
                    while ( $testimonials->have_posts() ) : $testimonials->the_post();
                        get_template_part( 'template-parts/content-testimonial' );
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
