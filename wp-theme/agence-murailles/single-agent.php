<?php
/**
 * Single Agent Template.
 *
 * @package Agence_Murailles
 */

get_header();

while ( have_posts() ) :
    the_post();

    $phone    = get_post_meta( get_the_ID(), 'am_agent_phone', true );
    $email    = get_post_meta( get_the_ID(), 'am_agent_email', true );
    $website  = get_post_meta( get_the_ID(), 'am_agent_website', true );
    $facebook = get_post_meta( get_the_ID(), 'am_agent_facebook', true );
    $twitter  = get_post_meta( get_the_ID(), 'am_agent_twitter', true );
    $linkedin = get_post_meta( get_the_ID(), 'am_agent_linkedin', true );
    $rating   = get_post_meta( get_the_ID(), 'am_agent_rating', true );
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
                        <?php the_post_thumbnail( 'am-agent-avatar', array(
                            'class' => 'rounded-circle mx-auto d-block mb-3',
                            'style' => 'width:150px;height:150px;object-fit:cover;',
                        ) ); ?>
                    <?php endif; ?>

                    <h4><?php the_title(); ?></h4>
                    <?php if ( $rating ) : ?>
                        <div class="mb-2"><?php echo am_star_rating( $rating ); ?></div>
                    <?php endif; ?>

                    <ul class="list-unstyled text-start mt-3">
                        <?php if ( $phone ) : ?>
                            <li class="mb-2"><i class="bi bi-telephone text-main me-2"></i><a href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></li>
                        <?php endif; ?>
                        <?php if ( $email ) : ?>
                            <li class="mb-2"><i class="bi bi-envelope text-main me-2"></i><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></li>
                        <?php endif; ?>
                        <?php if ( $website ) : ?>
                            <li class="mb-2"><i class="bi bi-globe text-main me-2"></i><a href="<?php echo esc_url( $website ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $website ); ?></a></li>
                        <?php endif; ?>
                    </ul>

                    <div class="d-flex justify-content-center gap-2 mt-3">
                        <?php if ( $facebook ) : ?>
                            <a href="<?php echo esc_url( $facebook ); ?>" class="btn btn-sm btn-outline-primary" target="_blank"><i class="bi bi-facebook"></i></a>
                        <?php endif; ?>
                        <?php if ( $twitter ) : ?>
                            <a href="<?php echo esc_url( $twitter ); ?>" class="btn btn-sm btn-outline-info" target="_blank"><i class="bi bi-twitter"></i></a>
                        <?php endif; ?>
                        <?php if ( $linkedin ) : ?>
                            <a href="<?php echo esc_url( $linkedin ); ?>" class="btn btn-sm btn-outline-primary" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="card border-0 rounded-3 shadow-sm p-4 mb-4">
                    <h4><?php esc_html_e( 'About', 'agence-murailles' ); ?></h4>
                    <?php the_content(); ?>
                </div>

                <!-- Agent's Properties -->
                <?php
                $props = new WP_Query( array(
                    'post_type'      => 'property',
                    'posts_per_page' => 6,
                    'meta_key'       => 'am_agent_id',
                    'meta_value'     => get_the_ID(),
                ) );

                if ( $props->have_posts() ) :
                ?>
                <h4 class="mb-3"><?php esc_html_e( 'My Listings', 'agence-murailles' ); ?></h4>
                <div class="row g-4">
                    <?php while ( $props->have_posts() ) : $props->the_post(); ?>
                        <div class="col-lg-6 col-md-6">
                            <?php get_template_part( 'template-parts/content-property-card' ); ?>
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
