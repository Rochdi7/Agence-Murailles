<?php
/**
 * Template Part: Agent Card
 *
 * @package Agence_Murailles
 */

$phone   = get_post_meta( get_the_ID(), 'am_agent_phone', true );
$email   = get_post_meta( get_the_ID(), 'am_agent_email', true );
$rating  = get_post_meta( get_the_ID(), 'am_agent_rating', true );

// Count properties assigned to this agent
$prop_count = new WP_Query( array(
    'post_type'      => 'property',
    'posts_per_page' => -1,
    'fields'         => 'ids',
    'meta_key'       => 'am_agent_id',
    'meta_value'     => get_the_ID(),
) );
$num_properties = $prop_count->found_posts;
wp_reset_postdata();
?>

<div class="card border-0 rounded-3 shadow-sm agent-card text-center p-4">
    <div class="agent-avatar mb-3">
        <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'am-agent-avatar', array(
                    'class' => 'rounded-circle mx-auto d-block',
                    'style' => 'width:120px;height:120px;object-fit:cover;',
                ) ); ?>
            <?php else : ?>
                <img src="<?php echo esc_url( AM_THEME_URI . '/assets/img/user-1.jpg' ); ?>"
                     class="rounded-circle mx-auto d-block"
                     style="width:120px;height:120px;object-fit:cover;"
                     alt="<?php the_title_attribute(); ?>">
            <?php endif; ?>
        </a>
    </div>

    <div class="agent-content">
        <h5 class="mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

        <?php if ( $rating ) : ?>
            <div class="mb-2"><?php echo am_star_rating( $rating ); ?></div>
        <?php endif; ?>

        <?php if ( has_excerpt() ) : ?>
            <p class="text-muted small mb-2"><?php echo esc_html( am_truncate( get_the_excerpt(), 80 ) ); ?></p>
        <?php endif; ?>

        <div class="agent-meta d-flex align-items-center justify-content-center gap-3 mb-3">
            <span class="badge bg-light text-dark"><?php echo esc_html( $num_properties ); ?> <?php esc_html_e( 'Listings', 'agence-murailles' ); ?></span>
        </div>

        <a href="<?php the_permalink(); ?>" class="btn btn-light-main btn-sm full-width">
            <?php esc_html_e( 'View Profile', 'agence-murailles' ); ?>
        </a>
    </div>
</div>
