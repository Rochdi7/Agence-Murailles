<?php
/**
 * Taxonomy Archive: Properties by City
 * Also used for property_type and property_status taxonomies via WordPress hierarchy.
 *
 * @package AgenceMurailles
 */

get_header();

$term = get_queried_object();
?>

<main id="main-content" class="site-main">

    <section class="page-hero page-hero-small">
        <div class="container">
            <h1 class="page-title">
                <?php printf( esc_html__( 'Properties in %s', 'agence-murailles' ), esc_html( $term->name ) ); ?>
            </h1>
            <?php if ( $term->description ) : ?>
                <p class="page-subtitle"><?php echo esc_html( $term->description ); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <section class="section filter-section">
        <div class="container">
            <?php get_template_part( 'template-parts/search-form-property' ); ?>
        </div>
    </section>

    <section class="section properties-list-section">
        <div class="container">
            <div id="properties-results" class="properties-grid">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-property-card' );
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
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
        </div>
    </section>

</main>

<?php
get_footer();
