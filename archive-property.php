<?php
/**
 * Property Archive (Listing Page)
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">

    <!-- Page Header -->
    <section class="page-hero page-hero-small">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Our Properties', 'agence-murailles' ); ?></h1>
            <p class="page-subtitle"><?php esc_html_e( 'Browse our selection of premium properties across Morocco', 'agence-murailles' ); ?></p>
        </div>
    </section>

    <!-- Search & Filter -->
    <section class="section filter-section">
        <div class="container">
            <?php get_template_part( 'template-parts/search-form-property' ); ?>

            <div class="filter-toolbar">
                <div class="results-count">
                    <span id="results-count-text">
                        <?php
                        global $wp_query;
                        printf(
                            esc_html( _n( '%d Property Found', '%d Properties Found', $wp_query->found_posts, 'agence-murailles' ) ),
                            $wp_query->found_posts
                        );
                        ?>
                    </span>
                </div>
                <div class="sort-options">
                    <label for="sort-select"><?php esc_html_e( 'Sort by:', 'agence-murailles' ); ?></label>
                    <select id="sort-select" name="sort">
                        <option value="date_desc"><?php esc_html_e( 'Newest First', 'agence-murailles' ); ?></option>
                        <option value="date_asc"><?php esc_html_e( 'Oldest First', 'agence-murailles' ); ?></option>
                        <option value="price_asc"><?php esc_html_e( 'Price: Low to High', 'agence-murailles' ); ?></option>
                        <option value="price_desc"><?php esc_html_e( 'Price: High to Low', 'agence-murailles' ); ?></option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Grid -->
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

            <div class="pagination" id="properties-pagination">
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
