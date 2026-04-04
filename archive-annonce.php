<?php
/**
 * Annonce Immobilier Archive (Listing Page)
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">

    <!-- Page Header -->
    <section class="page-hero page-hero-small">
        <div class="container">
            <?php am_breadcrumb(); ?>
            <h1 class="page-title"><?php esc_html_e( 'Annonces Immobilier', 'agence-murailles' ); ?></h1>
            <p class="page-subtitle"><?php esc_html_e( 'Parcourez toutes nos annonces immobilières au Maroc', 'agence-murailles' ); ?></p>
        </div>
    </section>

    <!-- Search & Filter -->
    <section class="section filter-section">
        <div class="container">
            <form id="annonce-search-form" class="property-search-form">

                <div class="search-form-grid">

                    <div class="form-group">
                        <label for="annonce-keyword"><?php esc_html_e( 'Mot-clé', 'agence-murailles' ); ?></label>
                        <input type="text" id="annonce-keyword" name="keyword" placeholder="<?php esc_attr_e( 'Rechercher...', 'agence-murailles' ); ?>">
                    </div>

                    <div class="form-group">
                        <label for="annonce-transaction"><?php esc_html_e( 'Transaction', 'agence-murailles' ); ?></label>
                        <select id="annonce-transaction" name="annonce_transaction">
                            <option value=""><?php esc_html_e( 'Tout', 'agence-murailles' ); ?></option>
                            <?php
                            $transactions = get_terms( array( 'taxonomy' => 'annonce_transaction', 'hide_empty' => false ) );
                            if ( $transactions && ! is_wp_error( $transactions ) ) :
                                foreach ( $transactions as $t ) :
                                    echo '<option value="' . esc_attr( $t->slug ) . '">' . esc_html( $t->name ) . '</option>';
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="annonce-categorie"><?php esc_html_e( 'Catégorie', 'agence-murailles' ); ?></label>
                        <select id="annonce-categorie" name="annonce_categorie">
                            <option value=""><?php esc_html_e( 'Tout', 'agence-murailles' ); ?></option>
                            <?php
                            $categories = get_terms( array( 'taxonomy' => 'annonce_categorie', 'hide_empty' => false ) );
                            if ( $categories && ! is_wp_error( $categories ) ) :
                                foreach ( $categories as $c ) :
                                    echo '<option value="' . esc_attr( $c->slug ) . '">' . esc_html( $c->name ) . '</option>';
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="annonce-ville"><?php esc_html_e( 'Ville', 'agence-murailles' ); ?></label>
                        <select id="annonce-ville" name="annonce_ville">
                            <option value=""><?php esc_html_e( 'Toutes', 'agence-murailles' ); ?></option>
                            <?php
                            $villes = get_terms( array( 'taxonomy' => 'annonce_ville', 'hide_empty' => false ) );
                            if ( $villes && ! is_wp_error( $villes ) ) :
                                foreach ( $villes as $v ) :
                                    echo '<option value="' . esc_attr( $v->slug ) . '">' . esc_html( $v->name ) . '</option>';
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="annonce-chambres"><?php esc_html_e( 'Chambres', 'agence-murailles' ); ?></label>
                        <select id="annonce-chambres" name="chambres">
                            <option value=""><?php esc_html_e( 'Tout', 'agence-murailles' ); ?></option>
                            <option value="1">1+</option>
                            <option value="2">2+</option>
                            <option value="3">3+</option>
                            <option value="4">4+</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="annonce-min-price"><?php esc_html_e( 'Prix min', 'agence-murailles' ); ?></label>
                        <input type="number" id="annonce-min-price" name="min_price" placeholder="<?php esc_attr_e( 'Min', 'agence-murailles' ); ?>">
                    </div>

                    <div class="form-group">
                        <label for="annonce-max-price"><?php esc_html_e( 'Prix max', 'agence-murailles' ); ?></label>
                        <input type="number" id="annonce-max-price" name="max_price" placeholder="<?php esc_attr_e( 'Max', 'agence-murailles' ); ?>">
                    </div>

                    <div class="form-group form-group-submit">
                        <button type="submit" class="btn btn-primary btn-search">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            <?php esc_html_e( 'Rechercher', 'agence-murailles' ); ?>
                        </button>
                    </div>

                </div>
            </form>

            <div class="filter-toolbar">
                <div class="results-count">
                    <span id="annonce-results-count">
                        <?php
                        global $wp_query;
                        printf(
                            esc_html( _n( '%d annonce trouvée', '%d annonces trouvées', $wp_query->found_posts, 'agence-murailles' ) ),
                            $wp_query->found_posts
                        );
                        ?>
                    </span>
                </div>
                <div class="sort-options">
                    <label for="annonce-sort"><?php esc_html_e( 'Trier par:', 'agence-murailles' ); ?></label>
                    <select id="annonce-sort" name="sort">
                        <option value="date_desc"><?php esc_html_e( 'Plus récentes', 'agence-murailles' ); ?></option>
                        <option value="date_asc"><?php esc_html_e( 'Plus anciennes', 'agence-murailles' ); ?></option>
                        <option value="price_asc"><?php esc_html_e( 'Prix croissant', 'agence-murailles' ); ?></option>
                        <option value="price_desc"><?php esc_html_e( 'Prix décroissant', 'agence-murailles' ); ?></option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Annonces Grid -->
    <section class="section properties-list-section">
        <div class="container">
            <div id="annonces-results" class="properties-grid">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-annonce-card' );
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </div>

            <div class="pagination" id="annonces-pagination">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '&laquo; ' . esc_html__( 'Précédent', 'agence-murailles' ),
                    'next_text' => esc_html__( 'Suivant', 'agence-murailles' ) . ' &raquo;',
                ) );
                ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
