<?php
/**
 * Template Part: Testimonial Card
 *
 * @package AgenceMurailles
 */

$rating   = get_post_meta( get_the_ID(), 'am_testimonial_rating', true );
$location = get_post_meta( get_the_ID(), 'am_testimonial_location', true );
?>

<div class="testimonial-card">
    <div class="testimonial-quote">
        <svg class="quote-icon" width="32" height="32" viewBox="0 0 24 24" fill="currentColor" opacity="0.15">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151C7.563 6.068 6 8.789 6 11h4.017v10H0z"/>
        </svg>
        <div class="testimonial-content">
            <?php the_content(); ?>
        </div>
    </div>

    <?php if ( $rating ) : ?>
        <?php am_display_rating( $rating ); ?>
    <?php endif; ?>

    <div class="testimonial-author">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="testimonial-avatar">
                <?php the_post_thumbnail( 'testimonial-avatar' ); ?>
            </div>
        <?php endif; ?>
        <div class="testimonial-author-info">
            <strong class="testimonial-name"><?php the_title(); ?></strong>
            <?php if ( $location ) : ?>
                <span class="testimonial-location"><?php echo esc_html( $location ); ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>
