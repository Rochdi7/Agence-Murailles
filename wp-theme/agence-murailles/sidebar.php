<?php
/**
 * Sidebar Template.
 *
 * @package Agence_Murailles
 */

$sidebar_id = 'sidebar-blog';
if ( is_singular( 'property' ) || is_post_type_archive( 'property' ) ) {
    $sidebar_id = 'sidebar-property';
}
?>

<div class="sidebar-widgets">
    <?php if ( is_active_sidebar( $sidebar_id ) ) : ?>
        <?php dynamic_sidebar( $sidebar_id ); ?>
    <?php else : ?>
        <!-- Default sidebar content -->
        <div class="sidebar-widget">
            <h4 class="widget-title"><?php esc_html_e( 'Search', 'agence-murailles' ); ?></h4>
            <?php get_search_form(); ?>
        </div>

        <?php if ( ! is_singular( 'property' ) ) : ?>
        <div class="sidebar-widget">
            <h4 class="widget-title"><?php esc_html_e( 'Recent Posts', 'agence-murailles' ); ?></h4>
            <ul class="list-unstyled">
                <?php
                $recent = new WP_Query( array( 'posts_per_page' => 5 ) );
                while ( $recent->have_posts() ) :
                    $recent->the_post();
                ?>
                    <li class="mb-2">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <small class="d-block text-muted"><?php echo get_the_date(); ?></small>
                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
        </div>

        <div class="sidebar-widget">
            <h4 class="widget-title"><?php esc_html_e( 'Categories', 'agence-murailles' ); ?></h4>
            <ul class="list-unstyled">
                <?php wp_list_categories( array( 'title_li' => '', 'show_count' => true ) ); ?>
            </ul>
        </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
