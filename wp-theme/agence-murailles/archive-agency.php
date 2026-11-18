<?php
/**
 * Agency Archive Template.
 *
 * @package Agence_Murailles
 */

get_header();
?>

<section class="bg-main pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                <h2 class="ipt-title text-light"><?php esc_html_e( 'Our Agencies', 'agence-murailles' ); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="gray-simple">
    <div class="container">
        <div class="row g-4">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card border-0 rounded-3 shadow-sm p-4 text-center">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid rounded-3 mb-3', 'style' => 'max-height:150px;object-fit:contain;' ) ); ?>
                                </a>
                            <?php endif; ?>
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <?php if ( has_excerpt() ) : ?>
                                <p class="text-muted small"><?php echo esc_html( am_truncate( get_the_excerpt(), 100 ) ); ?></p>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-light-main btn-sm"><?php esc_html_e( 'View Agency', 'agence-murailles' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-12 text-center">
                    <div class="alert alert-warning"><?php esc_html_e( 'No agencies found.', 'agence-murailles' ); ?></div>
                </div>
            <?php endif; ?>
        </div>
        <?php am_pagination(); ?>
    </div>
</section>

<?php get_footer(); ?>
