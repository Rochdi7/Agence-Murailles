<?php
/**
 * Sidebar Template
 *
 * @package AgenceMurailles
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
    // Default sidebar content if no widgets are assigned
    ?>
    <div class="widget">
        <h3 class="widget-title"><?php esc_html_e( 'Search', 'agence-murailles' ); ?></h3>
        <?php get_search_form(); ?>
    </div>

    <div class="widget">
        <h3 class="widget-title"><?php esc_html_e( 'Recent Posts', 'agence-murailles' ); ?></h3>
        <ul class="widget-list">
            <?php
            $recent = new WP_Query( array(
                'posts_per_page' => 5,
                'post_status'    => 'publish',
            ) );
            while ( $recent->have_posts() ) : $recent->the_post();
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <span class="widget-date"><?php echo esc_html( get_the_date() ); ?></span>
                </li>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>
    </div>

    <div class="widget">
        <h3 class="widget-title"><?php esc_html_e( 'Categories', 'agence-murailles' ); ?></h3>
        <ul class="widget-list">
            <?php
            wp_list_categories( array(
                'title_li' => '',
                'show_count' => true,
            ) );
            ?>
        </ul>
    </div>

    <div class="widget widget-cta">
        <h3 class="widget-title"><?php esc_html_e( 'Looking for a Property?', 'agence-murailles' ); ?></h3>
        <p><?php esc_html_e( 'Browse our latest listings and find your perfect home.', 'agence-murailles' ); ?></p>
        <a href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>" class="btn btn-primary btn-sm">
            <?php esc_html_e( 'View Properties', 'agence-murailles' ); ?>
        </a>
    </div>
    <?php
    return;
}

dynamic_sidebar( 'sidebar-blog' );
