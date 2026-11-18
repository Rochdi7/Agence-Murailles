<?php
/**
 * Default Archive Template.
 *
 * @package Agence_Murailles
 */

get_header();
?>

<section class="bg-main pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                <h2 class="ipt-title text-light"><?php the_archive_title(); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-light"><?php esc_html_e( 'Home', 'agence-murailles' ); ?></a></li>
                        <li class="breadcrumb-item text-light active"><?php the_archive_title(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="gray-simple">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <?php if ( the_archive_description() ) : ?>
                    <div class="archive-description mb-4"><?php the_archive_description(); ?></div>
                <?php endif; ?>

                <div class="row g-4">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-6 col-md-6">
                                <?php get_template_part( 'template-parts/content', 'blog-card' ); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="col-12">
                            <div class="alert alert-warning"><?php esc_html_e( 'No posts found.', 'agence-murailles' ); ?></div>
                        </div>
                    <?php endif; ?>
                </div>

                <?php am_pagination(); ?>
            </div>

            <div class="col-lg-4 col-md-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
