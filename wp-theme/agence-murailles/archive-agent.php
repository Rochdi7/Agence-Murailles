<?php
/**
 * Agent Archive Template.
 *
 * @package Agence_Murailles
 */

get_header();
?>

<section class="bg-main pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                <h2 class="ipt-title text-light"><?php esc_html_e( 'Our Agents', 'agence-murailles' ); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="gray-simple">
    <div class="container">
        <div class="row g-4">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <?php get_template_part( 'template-parts/content-agent-card' ); ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-12 text-center">
                    <div class="alert alert-warning"><?php esc_html_e( 'No agents found.', 'agence-murailles' ); ?></div>
                </div>
            <?php endif; ?>
        </div>
        <?php am_pagination(); ?>
    </div>
</section>

<?php get_footer(); ?>
