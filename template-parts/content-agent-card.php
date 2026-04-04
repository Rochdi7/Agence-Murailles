<?php
/**
 * Template Part: Agent Card
 *
 * @package AgenceMurailles
 */

$position  = get_post_meta( get_the_ID(), 'am_agent_position', true );
$phone     = get_post_meta( get_the_ID(), 'am_agent_phone', true );
$email     = get_post_meta( get_the_ID(), 'am_agent_email', true );
$facebook  = get_post_meta( get_the_ID(), 'am_agent_facebook', true );
$instagram = get_post_meta( get_the_ID(), 'am_agent_instagram', true );
$linkedin  = get_post_meta( get_the_ID(), 'am_agent_linkedin', true );
$whatsapp  = get_post_meta( get_the_ID(), 'am_agent_whatsapp', true );
?>

<div class="agent-card">
    <div class="agent-card-image">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'agent-avatar', array( 'class' => 'agent-avatar' ) ); ?>
        <?php else : ?>
            <div class="agent-avatar-placeholder">
                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
        <?php endif; ?>
    </div>

    <div class="agent-card-body">
        <h3 class="agent-name"><?php the_title(); ?></h3>
        <?php if ( $position ) : ?>
            <span class="agent-position"><?php echo esc_html( $position ); ?></span>
        <?php endif; ?>

        <?php if ( has_excerpt() ) : ?>
            <p class="agent-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
        <?php endif; ?>

        <div class="agent-contact-info">
            <?php if ( $phone ) : ?>
                <a href="tel:<?php echo esc_attr( $phone ); ?>" class="agent-contact-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    <?php echo esc_html( $phone ); ?>
                </a>
            <?php endif; ?>
            <?php if ( $email ) : ?>
                <a href="mailto:<?php echo esc_attr( $email ); ?>" class="agent-contact-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <?php echo esc_html( $email ); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="agent-social">
            <?php if ( $facebook ) : ?>
                <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener" aria-label="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                </a>
            <?php endif; ?>
            <?php if ( $instagram ) : ?>
                <a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener" aria-label="Instagram">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/></svg>
                </a>
            <?php endif; ?>
            <?php if ( $linkedin ) : ?>
                <a href="<?php echo esc_url( $linkedin ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2zM4 6a2 2 0 100-4 2 2 0 000 4z"/></svg>
                </a>
            <?php endif; ?>
            <?php if ( $whatsapp ) : ?>
                <a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp ) ); ?>" target="_blank" rel="noopener" aria-label="WhatsApp" class="whatsapp-link">
                    WhatsApp
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
