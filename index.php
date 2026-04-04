<?php
/**
 * The main template file (fallback)
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">
    <div class="container">

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
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
