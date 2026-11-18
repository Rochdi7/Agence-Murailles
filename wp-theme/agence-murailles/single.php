<?php
/**
 * Single Blog Post Template.
 *
 * @package Agence_Murailles
 */

get_header();
?>

<!-- Page Title -->
<section class="bg-main pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12 text-center">
                <h2 class="ipt-title text-light"><?php the_title(); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-light"><?php esc_html_e( 'Home', 'agence-murailles' ); ?></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="text-light"><?php esc_html_e( 'Blog', 'agence-murailles' ); ?></a></li>
                        <li class="breadcrumb-item text-light active"><?php the_title(); ?></li>
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
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="article-detail">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-detail-img mb-4">
                                <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-3' ) ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-meta d-flex align-items-center gap-3 mb-3">
                            <span class="text-muted"><i class="bi bi-calendar me-1"></i><?php echo get_the_date(); ?></span>
                            <span class="text-muted"><i class="bi bi-person me-1"></i><?php the_author(); ?></span>
                            <?php if ( has_category() ) : ?>
                                <span class="text-muted"><i class="bi bi-folder me-1"></i><?php the_category( ', ' ); ?></span>
                            <?php endif; ?>
                            <span class="text-muted"><i class="bi bi-chat me-1"></i><?php comments_number( '0', '1', '%' ); ?> <?php esc_html_e( 'Comments', 'agence-murailles' ); ?></span>
                        </div>

                        <div class="article-content">
                            <?php the_content(); ?>
                        </div>

                        <?php if ( has_tag() ) : ?>
                            <div class="article-tags mt-4">
                                <strong><?php esc_html_e( 'Tags:', 'agence-murailles' ); ?></strong>
                                <?php the_tags( ' ', ', ', '' ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="post-navigation d-flex justify-content-between mt-4 pt-4 border-top">
                            <div><?php previous_post_link( '%link', '<i class="bi bi-arrow-left"></i> %title' ); ?></div>
                            <div><?php next_post_link( '%link', '%title <i class="bi bi-arrow-right"></i>' ); ?></div>
                        </div>

                        <?php if ( comments_open() || get_comments_number() ) : ?>
                            <div class="comments-area mt-5">
                                <?php comments_template(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="col-lg-4 col-md-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
