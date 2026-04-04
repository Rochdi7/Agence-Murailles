<?php
/**
 * Single Blog Post Template
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>

    <section class="page-hero page-hero-small">
        <div class="container">
            <div class="single-post-meta">
                <span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
                <?php
                $cats = get_the_category();
                if ( $cats ) :
                ?>
                    <span class="post-category">
                        <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"><?php echo esc_html( $cats[0]->name ); ?></a>
                    </span>
                <?php endif; ?>
            </div>
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section single-post-section">
        <div class="container">
            <div class="blog-layout">

                <article class="blog-main single-post-content">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="single-post-thumbnail">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'post-featured-img' ) ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'agence-murailles' ),
                        'after'  => '</div>',
                    ) );
                    ?>

                    <div class="post-tags">
                        <?php the_tags( '<span class="tags-label">' . esc_html__( 'Tags:', 'agence-murailles' ) . '</span> ', ', ' ); ?>
                    </div>

                    <!-- Post Navigation -->
                    <nav class="post-navigation">
                        <div class="nav-links">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            <?php if ( $prev_post ) : ?>
                                <div class="nav-previous">
                                    <span class="nav-label"><?php esc_html_e( 'Previous', 'agence-murailles' ); ?></span>
                                    <a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>"><?php echo esc_html( $prev_post->post_title ); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if ( $next_post ) : ?>
                                <div class="nav-next">
                                    <span class="nav-label"><?php esc_html_e( 'Next', 'agence-murailles' ); ?></span>
                                    <a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>"><?php echo esc_html( $next_post->post_title ); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </nav>

                    <!-- Comments -->
                    <?php if ( comments_open() || get_comments_number() ) : ?>
                        <div class="comments-section">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; ?>
                </article>

                <aside class="blog-sidebar">
                    <?php get_sidebar(); ?>
                </aside>

            </div>
        </div>
    </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();
