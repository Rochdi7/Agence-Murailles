<?php
/**
 * Template Part: Blog Post Card
 *
 * @package AgenceMurailles
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-card-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'property-card', array( 'loading' => 'lazy' ) ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="post-card-body">
        <div class="post-card-meta">
            <span class="post-date">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <?php echo esc_html( get_the_date() ); ?>
            </span>
            <?php
            $categories = get_the_category();
            if ( $categories ) :
            ?>
                <span class="post-category">
                    <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
                        <?php echo esc_html( $categories[0]->name ); ?>
                    </a>
                </span>
            <?php endif; ?>
        </div>

        <h3 class="post-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <p class="post-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>

        <a href="<?php the_permalink(); ?>" class="read-more-link">
            <?php esc_html_e( 'Read More', 'agence-murailles' ); ?>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12,5 19,12 12,19"/></svg>
        </a>
    </div>
</article>
