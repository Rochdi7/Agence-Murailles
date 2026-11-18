<?php
/**
 * Template Name: User Dashboard
 *
 * @package Agence_Murailles
 */

if ( ! is_user_logged_in() ) {
    wp_redirect( wp_login_url( get_permalink() ) );
    exit;
}

get_header();

$current_user = wp_get_current_user();
?>

<section class="bg-main pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                <h2 class="ipt-title text-light"><?php esc_html_e( 'Dashboard', 'agence-murailles' ); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="gray-simple">
    <div class="container">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-lg-3 col-md-4">
                <div class="card border-0 rounded-3 shadow-sm p-3">
                    <div class="text-center mb-3">
                        <?php echo get_avatar( $current_user->ID, 80, '', '', array( 'class' => 'rounded-circle' ) ); ?>
                        <h6 class="mt-2 mb-0"><?php echo esc_html( $current_user->display_name ); ?></h6>
                        <small class="text-muted"><?php echo esc_html( $current_user->user_email ); ?></small>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>"><i class="bi bi-speedometer2 me-2"></i><?php esc_html_e( 'Dashboard', 'agence-murailles' ); ?></a></li>
                        <li class="list-group-item"><a href="<?php echo esc_url( home_url( '/my-profile/' ) ); ?>"><i class="bi bi-person me-2"></i><?php esc_html_e( 'My Profile', 'agence-murailles' ); ?></a></li>
                        <li class="list-group-item"><a href="<?php echo esc_url( home_url( '/my-property/' ) ); ?>"><i class="bi bi-building me-2"></i><?php esc_html_e( 'My Properties', 'agence-murailles' ); ?></a></li>
                        <li class="list-group-item"><a href="<?php echo esc_url( home_url( '/bookmark-list/' ) ); ?>"><i class="bi bi-heart me-2"></i><?php esc_html_e( 'Favorites', 'agence-murailles' ); ?></a></li>
                        <li class="list-group-item"><a href="<?php echo esc_url( home_url( '/submit-property/' ) ); ?>"><i class="bi bi-plus-circle me-2"></i><?php esc_html_e( 'Submit Property', 'agence-murailles' ); ?></a></li>
                        <li class="list-group-item"><a href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>"><i class="bi bi-box-arrow-right me-2"></i><?php esc_html_e( 'Logout', 'agence-murailles' ); ?></a></li>
                    </ul>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="col-lg-9 col-md-8">
                <div class="card border-0 rounded-3 shadow-sm p-4">
                    <h4 class="mb-4"><?php printf( esc_html__( 'Welcome, %s!', 'agence-murailles' ), esc_html( $current_user->display_name ) ); ?></h4>

                    <div class="row g-4 mb-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="card bg-light p-3 text-center border-0">
                                <h3 class="text-main mb-0">
                                    <?php
                                    $my_props = new WP_Query( array( 'post_type' => 'property', 'author' => $current_user->ID, 'fields' => 'ids' ) );
                                    echo esc_html( $my_props->found_posts );
                                    wp_reset_postdata();
                                    ?>
                                </h3>
                                <small class="text-muted"><?php esc_html_e( 'Active Listings', 'agence-murailles' ); ?></small>
                            </div>
                        </div>
                    </div>

                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
