<?php
/**
 * Single Agency Template.
 *
 * @package Agence_Murailles
 */

get_header();

while ( have_posts() ) :
    the_post();

    $phone   = get_post_meta( get_the_ID(), 'am_agency_phone', true );
    $email   = get_post_meta( get_the_ID(), 'am_agency_email', true );
    $website = get_post_meta( get_the_ID(), 'am_agency_website', true );
    $address = get_post_meta( get_the_ID(), 'am_agency_address', true );
?>

<section class="bg-main pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                <h2 class="ipt-title text-light"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="gray-simple">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card border-0 rounded-3 shadow-sm p-4 text-center">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid rounded-3 mb-3' ) ); ?>
                    <?php endif; ?>
                    <h4><?php the_title(); ?></h4>
                    <ul class="list-unstyled text-start mt-3">
                        <?php if ( $address ) : ?>
                            <li class="mb-2"><i class="bi bi-geo-alt text-main me-2"></i><?php echo esc_html( $address ); ?></li>
                        <?php endif; ?>
                        <?php if ( $phone ) : ?>
                            <li class="mb-2"><i class="bi bi-telephone text-main me-2"></i><a href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></li>
                        <?php endif; ?>
                        <?php if ( $email ) : ?>
                            <li class="mb-2"><i class="bi bi-envelope text-main me-2"></i><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></li>
                        <?php endif; ?>
                        <?php if ( $website ) : ?>
                            <li class="mb-2"><i class="bi bi-globe text-main me-2"></i><a href="<?php echo esc_url( $website ); ?>" target="_blank"><?php echo esc_html( $website ); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="card border-0 rounded-3 shadow-sm p-4 mb-4">
                    <h4><?php esc_html_e( 'About', 'agence-murailles' ); ?></h4>
                    <?php the_content(); ?>
                </div>

                <!-- Agency Agents -->
                <?php
                $agents = new WP_Query( array(
                    'post_type'      => 'agent',
                    'posts_per_page' => 8,
                    'meta_key'       => 'am_agent_agency',
                    'meta_value'     => get_the_ID(),
                ) );

                if ( $agents->have_posts() ) :
                ?>
                <h4 class="mb-3"><?php esc_html_e( 'Our Agents', 'agence-murailles' ); ?></h4>
                <div class="row g-4">
                    <?php while ( $agents->have_posts() ) : $agents->the_post(); ?>
                        <div class="col-lg-4 col-md-6">
                            <?php get_template_part( 'template-parts/content-agent-card' ); ?>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
endwhile;
get_footer();
?>
