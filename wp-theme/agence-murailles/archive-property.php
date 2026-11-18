<?php
/**
 * Property Archive Template (Grid with Sidebar).
 * Based on grid-layout-with-sidebar.html
 *
 * @package Agence_Murailles
 */

get_header();
?>

<!-- Page Title -->
<section class="bg-main pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                <h2 class="ipt-title text-light"><?php esc_html_e( 'Properties', 'agence-murailles' ); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-light"><?php esc_html_e( 'Home', 'agence-murailles' ); ?></a></li>
                        <li class="breadcrumb-item text-light active"><?php esc_html_e( 'Properties', 'agence-murailles' ); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="gray-simple">
    <div class="container">
        <div class="row">

            <!-- Filter Sidebar -->
            <div class="col-lg-4 col-md-12">
                <div class="simple-sidebar sm-sidebar" id="filter-sidebar">

                    <div class="sidebar-widget">
                        <h4 class="widget-title"><?php esc_html_e( 'Search', 'agence-murailles' ); ?></h4>
                        <form method="get" action="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>" id="property-filter-form">
                            <div class="mb-3">
                                <input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search keyword...', 'agence-murailles' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
                                <input type="hidden" name="post_type" value="property">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php esc_html_e( 'Property Type', 'agence-murailles' ); ?></label>
                                <select name="property_type" class="form-control">
                                    <option value=""><?php esc_html_e( 'All Types', 'agence-murailles' ); ?></option>
                                    <?php
                                    $types = get_terms( array( 'taxonomy' => 'property_type', 'hide_empty' => false ) );
                                    if ( ! is_wp_error( $types ) ) {
                                        foreach ( $types as $type ) {
                                            $selected = ( isset( $_GET['property_type'] ) && $_GET['property_type'] === $type->slug ) ? 'selected' : '';
                                            echo '<option value="' . esc_attr( $type->slug ) . '" ' . $selected . '>' . esc_html( $type->name ) . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php esc_html_e( 'Status', 'agence-murailles' ); ?></label>
                                <select name="property_status" class="form-control">
                                    <option value=""><?php esc_html_e( 'All Status', 'agence-murailles' ); ?></option>
                                    <?php
                                    $statuses = get_terms( array( 'taxonomy' => 'property_status', 'hide_empty' => false ) );
                                    if ( ! is_wp_error( $statuses ) ) {
                                        foreach ( $statuses as $status ) {
                                            $selected = ( isset( $_GET['property_status'] ) && $_GET['property_status'] === $status->slug ) ? 'selected' : '';
                                            echo '<option value="' . esc_attr( $status->slug ) . '" ' . $selected . '>' . esc_html( $status->name ) . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php esc_html_e( 'City', 'agence-murailles' ); ?></label>
                                <select name="property_city" class="form-control">
                                    <option value=""><?php esc_html_e( 'All Cities', 'agence-murailles' ); ?></option>
                                    <?php
                                    $cities = get_terms( array( 'taxonomy' => 'property_city', 'hide_empty' => false ) );
                                    if ( ! is_wp_error( $cities ) ) {
                                        foreach ( $cities as $city ) {
                                            $selected = ( isset( $_GET['property_city'] ) && $_GET['property_city'] === $city->slug ) ? 'selected' : '';
                                            echo '<option value="' . esc_attr( $city->slug ) . '" ' . $selected . '>' . esc_html( $city->name ) . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label"><?php esc_html_e( 'Bedrooms', 'agence-murailles' ); ?></label>
                                    <select name="bedrooms" class="form-control">
                                        <option value=""><?php esc_html_e( 'Any', 'agence-murailles' ); ?></option>
                                        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                                            <option value="<?php echo $i; ?>" <?php selected( isset( $_GET['bedrooms'] ) ? $_GET['bedrooms'] : '', $i ); ?>><?php echo $i; ?>+</option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label"><?php esc_html_e( 'Bathrooms', 'agence-murailles' ); ?></label>
                                    <select name="bathrooms" class="form-control">
                                        <option value=""><?php esc_html_e( 'Any', 'agence-murailles' ); ?></option>
                                        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                                            <option value="<?php echo $i; ?>" <?php selected( isset( $_GET['bathrooms'] ) ? $_GET['bathrooms'] : '', $i ); ?>><?php echo $i; ?>+</option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-main full-width"><?php esc_html_e( 'Search', 'agence-murailles' ); ?></button>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Property Grid -->
            <div class="col-lg-8 col-md-12">

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div>
                        <h5 class="mb-0">
                            <?php
                            printf(
                                /* translators: %d: number of properties */
                                esc_html( _n( '%d Property Found', '%d Properties Found', $wp_query->found_posts, 'agence-murailles' ) ),
                                $wp_query->found_posts
                            );
                            ?>
                        </h5>
                    </div>
                    <div class="shorting_pagination_lalf">
                        <div class="shorting_pagination">
                            <div class="grid-list-view">
                                <ul>
                                    <li class="active"><a href="#"><i class="bi bi-grid"></i></a></li>
                                    <li><a href="#"><i class="bi bi-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4" id="property-results">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <?php get_template_part( 'template-parts/content-property-card' ); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="col-12">
                            <div class="alert alert-warning text-center">
                                <?php esc_html_e( 'No properties found matching your criteria.', 'agence-murailles' ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <?php am_pagination(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
