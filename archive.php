<?php
/**
 * Blog Archive Template
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">

    <section class="page-hero page-hero-small">
        <div class="container">
            <h1 class="page-title">
                <?php
                if ( is_category() ) {
                    single_cat_title();
                } elseif ( is_tag() ) {
                    single_tag_title();
                } elseif ( is_author() ) {
                    the_author();
                } else {
                    esc_html_e( 'Blog & News', 'agence-murailles' );
                }
                ?>
            </h1>
            <?php if ( is_category() || is_tag() ) : ?>
                <p class="page-subtitle"><?php echo esc_html( term_description() ); ?></p>
            <?php else : ?>
                <p class="page-subtitle"><?php esc_html_e( 'Real estate insights, market trends, and tips for buyers and sellers.', 'agence-murailles' ); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <section class="section blog-archive-section">
        <div class="container">
            <div class="blog-layout">

                <div class="blog-main">
                    <?php if ( have_posts() ) : ?>
                        <div class="posts-grid">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php get_template_part( 'template-parts/content-post-card' ); ?>
                            <?php endwhile; ?>
                        </div>

                        <div class="pagination">
                            <?php
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => '&laquo; ' . esc_html__( 'Previous', 'agence-murailles' ),
                                'next_text' => esc_html__( 'Next', 'agence-murailles' ) . ' &raquo;',
                            ) );
                            ?>
                        </div>
                    <?php else : ?>
                        <p class="no-results"><?php esc_html_e( 'No posts found.', 'agence-murailles' ); ?></p>
                    <?php endif; ?>
                </div>

                <aside class="blog-sidebar">
                    <?php get_sidebar(); ?>
                </aside>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
