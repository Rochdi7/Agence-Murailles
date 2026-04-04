<?php
/**
 * Blog Helper Functions
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Get estimated reading time for a post.
 */
function am_reading_time( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $content    = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( wp_strip_all_tags( $content ) );
    $minutes    = max( 1, ceil( $word_count / 200 ) );

    return sprintf(
        _n( '%d min read', '%d min read', $minutes, 'agence-murailles' ),
        $minutes
    );
}

/**
 * Get recent blog posts.
 */
function am_get_recent_posts( $count = 3 ) {
    return new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ) );
}

/**
 * Get recent annonces.
 */
function am_get_recent_annonces( $count = 3 ) {
    return new WP_Query( array(
        'post_type'      => 'annonce',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ) );
}

/**
 * Display blog post date in French-friendly format.
 */
function am_post_date( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    echo '<time datetime="' . esc_attr( get_the_date( 'c', $post_id ) ) . '">' . esc_html( get_the_date( '', $post_id ) ) . '</time>';
}

/**
 * Get post categories as comma-separated links.
 */
function am_post_categories( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $categories = get_the_category( $post_id );
    if ( empty( $categories ) ) {
        return;
    }

    $links = array();
    foreach ( $categories as $cat ) {
        $links[] = '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
    }
    echo implode( ', ', $links );
}

/**
 * Display post author info box.
 */
function am_author_box() {
    $author_id    = get_the_author_meta( 'ID' );
    $author_name  = get_the_author();
    $author_bio   = get_the_author_meta( 'description' );
    $author_url   = get_author_posts_url( $author_id );
    $avatar       = get_avatar( $author_id, 80 );

    if ( empty( $author_bio ) ) {
        return;
    }
    ?>
    <div class="author-box">
        <div class="author-avatar">
            <?php echo $avatar; ?>
        </div>
        <div class="author-info">
            <h4 class="author-name">
                <a href="<?php echo esc_url( $author_url ); ?>"><?php echo esc_html( $author_name ); ?></a>
            </h4>
            <p class="author-bio"><?php echo esc_html( $author_bio ); ?></p>
        </div>
    </div>
    <?php
}

/**
 * Display related blog posts (same category).
 */
function am_related_posts( $count = 3 ) {
    $categories = get_the_category();
    if ( empty( $categories ) ) {
        return;
    }

    $cat_ids = wp_list_pluck( $categories, 'term_id' );

    $related = new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => $count,
        'post__not_in'   => array( get_the_ID() ),
        'category__in'   => $cat_ids,
        'post_status'    => 'publish',
    ) );

    if ( ! $related->have_posts() ) {
        return;
    }
    ?>
    <div class="related-posts">
        <h3><?php esc_html_e( 'Articles similaires', 'agence-murailles' ); ?></h3>
        <div class="posts-grid posts-grid-related">
            <?php
            while ( $related->have_posts() ) {
                $related->the_post();
                get_template_part( 'template-parts/content-post-card' );
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <?php
}

/**
 * Display blog breadcrumb.
 */
function am_breadcrumb() {
    if ( is_front_page() ) {
        return;
    }

    echo '<nav class="breadcrumb" aria-label="' . esc_attr__( 'Breadcrumb', 'agence-murailles' ) . '">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Accueil', 'agence-murailles' ) . '</a>';
    echo '<span class="breadcrumb-sep"> / </span>';

    if ( is_singular( 'post' ) ) {
        $cats = get_the_category();
        if ( $cats ) {
            echo '<a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_html( $cats[0]->name ) . '</a>';
            echo '<span class="breadcrumb-sep"> / </span>';
        }
        echo '<span class="breadcrumb-current">' . esc_html( get_the_title() ) . '</span>';
    } elseif ( is_singular( 'annonce' ) ) {
        echo '<a href="' . esc_url( get_post_type_archive_link( 'annonce' ) ) . '">' . esc_html__( 'Annonces', 'agence-murailles' ) . '</a>';
        echo '<span class="breadcrumb-sep"> / </span>';
        echo '<span class="breadcrumb-current">' . esc_html( get_the_title() ) . '</span>';
    } elseif ( is_singular( 'property' ) ) {
        echo '<a href="' . esc_url( get_post_type_archive_link( 'property' ) ) . '">' . esc_html__( 'Properties', 'agence-murailles' ) . '</a>';
        echo '<span class="breadcrumb-sep"> / </span>';
        echo '<span class="breadcrumb-current">' . esc_html( get_the_title() ) . '</span>';
    } elseif ( is_category() ) {
        echo '<span class="breadcrumb-current">' . esc_html( single_cat_title( '', false ) ) . '</span>';
    } elseif ( is_post_type_archive( 'annonce' ) ) {
        echo '<span class="breadcrumb-current">' . esc_html__( 'Annonces Immobilier', 'agence-murailles' ) . '</span>';
    } elseif ( is_page() ) {
        echo '<span class="breadcrumb-current">' . esc_html( get_the_title() ) . '</span>';
    } elseif ( is_search() ) {
        echo '<span class="breadcrumb-current">' . esc_html__( 'Recherche', 'agence-murailles' ) . '</span>';
    }

    echo '</nav>';
}

/**
 * Social share buttons for blog posts.
 */
function am_blog_share_buttons() {
    $url   = urlencode( get_the_permalink() );
    $title = urlencode( get_the_title() );
    ?>
    <div class="blog-share">
        <span class="share-label"><?php esc_html_e( 'Partager:', 'agence-murailles' ); ?></span>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank" rel="noopener" class="share-btn share-facebook">Facebook</a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>&text=<?php echo $title; ?>" target="_blank" rel="noopener" class="share-btn share-twitter">Twitter</a>
        <a href="https://wa.me/?text=<?php echo $title; ?>%20<?php echo $url; ?>" target="_blank" rel="noopener" class="share-btn share-whatsapp">WhatsApp</a>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url; ?>" target="_blank" rel="noopener" class="share-btn share-linkedin">LinkedIn</a>
    </div>
    <?php
}
