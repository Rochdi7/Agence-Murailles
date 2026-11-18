<?php
/**
 * Default Page Template.
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
                <h2 class="ipt-title text-light"><?php the_title(); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-light"><?php esc_html_e( 'Home', 'agence-murailles' ); ?></a></li>
                        <li class="breadcrumb-item text-light active"><?php the_title(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
