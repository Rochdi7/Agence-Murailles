<?php
/**
 * Template Name: Contact Page
 *
 * @package Agence_Murailles
 */

get_header();
?>

<section class="bg-main pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                <h2 class="ipt-title text-light"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="gray-simple">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card border-0 rounded-3 shadow-sm p-4 mb-4">
                    <h4 class="mb-4"><?php esc_html_e( 'Get In Touch', 'agence-murailles' ); ?></h4>
                    <?php
                    // If page has content (e.g., a contact form shortcode), show it
                    while ( have_posts() ) :
                        the_post();
                        if ( get_the_content() ) {
                            the_content();
                        } else {
                            // Default contact form
                    ?>
                    <form method="post" class="contact-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="c-name" placeholder="<?php esc_attr_e( 'Your Name', 'agence-murailles' ); ?>" required>
                                    <label for="c-name"><?php esc_html_e( 'Your Name', 'agence-murailles' ); ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="c-email" placeholder="<?php esc_attr_e( 'Your Email', 'agence-murailles' ); ?>" required>
                                    <label for="c-email"><?php esc_html_e( 'Your Email', 'agence-murailles' ); ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="c-subject" placeholder="<?php esc_attr_e( 'Subject', 'agence-murailles' ); ?>">
                                    <label for="c-subject"><?php esc_html_e( 'Subject', 'agence-murailles' ); ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="c-message" placeholder="<?php esc_attr_e( 'Your Message', 'agence-murailles' ); ?>" style="height:150px" required></textarea>
                                    <label for="c-message"><?php esc_html_e( 'Your Message', 'agence-murailles' ); ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-main btn-lg"><?php esc_html_e( 'Send Message', 'agence-murailles' ); ?></button>
                            </div>
                        </div>
                    </form>
                    <?php
                        }
                    endwhile;
                    ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card border-0 rounded-3 shadow-sm p-4 mb-4">
                    <h5 class="mb-3"><?php esc_html_e( 'Office Information', 'agence-murailles' ); ?></h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-geo-alt text-main me-2 fs-5"></i>
                            <strong><?php esc_html_e( 'Address', 'agence-murailles' ); ?></strong><br>
                            <span class="text-muted"><?php echo esc_html( get_theme_mod( 'am_address', 'Collins Street West, Victoria 8007, Australia.' ) ); ?></span>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-telephone text-main me-2 fs-5"></i>
                            <strong><?php esc_html_e( 'Phone', 'agence-murailles' ); ?></strong><br>
                            <span class="text-muted"><?php echo esc_html( get_theme_mod( 'am_phone', '+1 246-345-0695' ) ); ?></span>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-envelope text-main me-2 fs-5"></i>
                            <strong><?php esc_html_e( 'Email', 'agence-murailles' ); ?></strong><br>
                            <span class="text-muted"><?php echo esc_html( get_theme_mod( 'am_email', 'info@example.com' ) ); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
