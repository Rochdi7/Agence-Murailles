<?php
/**
 * Template Name: Contact Page
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">

    <section class="page-hero page-hero-small">
        <div class="container">
            <h1 class="page-title"><?php esc_html_e( 'Contact Us', 'agence-murailles' ); ?></h1>
            <p class="page-subtitle"><?php esc_html_e( 'Get in touch with our team — we\'re here to help', 'agence-murailles' ); ?></p>
        </div>
    </section>

    <section class="section contact-section">
        <div class="container">
            <div class="contact-grid">

                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2><?php esc_html_e( 'Send Us a Message', 'agence-murailles' ); ?></h2>
                    <form id="contact-form" class="contact-form">
                        <input type="hidden" name="action" value="am_submit_contact">
                        <input type="hidden" name="nonce" value="<?php echo esc_attr( wp_create_nonce( 'am_filter_nonce' ) ); ?>">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name"><?php esc_html_e( 'Full Name *', 'agence-murailles' ); ?></label>
                                <input type="text" id="contact-name" name="contact_name" required>
                            </div>
                            <div class="form-group">
                                <label for="contact-email"><?php esc_html_e( 'Email Address *', 'agence-murailles' ); ?></label>
                                <input type="email" id="contact-email" name="contact_email" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-phone"><?php esc_html_e( 'Phone Number', 'agence-murailles' ); ?></label>
                                <input type="tel" id="contact-phone" name="contact_phone">
                            </div>
                            <div class="form-group">
                                <label for="contact-subject"><?php esc_html_e( 'Subject', 'agence-murailles' ); ?></label>
                                <input type="text" id="contact-subject" name="contact_subject">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-message"><?php esc_html_e( 'Message *', 'agence-murailles' ); ?></label>
                            <textarea id="contact-message" name="contact_message" rows="6" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">
                            <?php esc_html_e( 'Send Message', 'agence-murailles' ); ?>
                        </button>

                        <div class="form-message" id="contact-form-message"></div>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info-wrapper">
                    <h2><?php esc_html_e( 'Get In Touch', 'agence-murailles' ); ?></h2>

                    <div class="contact-info-cards">
                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <h4><?php esc_html_e( 'Our Office', 'agence-murailles' ); ?></h4>
                                <p><?php esc_html_e( 'Avenue Mohammed V, Marrakech, Morocco', 'agence-murailles' ); ?></p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                            </div>
                            <div>
                                <h4><?php esc_html_e( 'Phone', 'agence-murailles' ); ?></h4>
                                <p>+212 5XX-XXXXXX</p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <h4><?php esc_html_e( 'Email', 'agence-murailles' ); ?></h4>
                                <p>contact@agencemurailles.com</p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
                            </div>
                            <div>
                                <h4><?php esc_html_e( 'Working Hours', 'agence-murailles' ); ?></h4>
                                <p><?php esc_html_e( 'Mon - Fri: 9:00 AM - 6:00 PM', 'agence-murailles' ); ?></p>
                                <p><?php esc_html_e( 'Sat: 9:00 AM - 1:00 PM', 'agence-murailles' ); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="contact-map">
                        <iframe
                            width="100%"
                            height="300"
                            frameborder="0"
                            style="border:0; border-radius: 8px;"
                            src="https://www.google.com/maps?q=Marrakech,Morocco&output=embed"
                            allowfullscreen
                            loading="lazy"
                        ></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
