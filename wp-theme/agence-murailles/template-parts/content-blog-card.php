<?php
/**
 * Template Part: Blog Card
 *
 * @package Agence_Murailles
 */
?>

<div class="card border-0 rounded-3 shadow-sm blog-card">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="card-img-top overflow-hidden rounded-top-3">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'am-blog-card', array( 'class' => 'img-fluid' ) ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="card-body p-4">
        <div class="post-meta d-flex align-items-center gap-3 mb-2">
            <span class="text-muted small"><i class="bi bi-calendar me-1"></i><?php echo get_the_date(); ?></span>
            <?php if ( has_category() ) : ?>
                <span class="text-muted small"><i class="bi bi-folder me-1"></i><?php the_category( ', ' ); ?></span>
            <?php endif; ?>
        </div>

        <h5 class="card-title mb-2">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h5>

        <?php if ( has_excerpt() || get_the_content() ) : ?>
            <p class="card-text text-muted"><?php echo esc_html( am_truncate( get_the_excerpt(), 120 ) ); ?></p>
        <?php endif; ?>

        <a href="<?php the_permalink(); ?>" class="btn btn-light-main btn-sm">
            <?php esc_html_e( 'Read More', 'agence-murailles' ); ?> <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>
</div>
