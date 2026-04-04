<?php
/**
 * Custom Post Type: Annonce Immobilier (Real Estate Classifieds)
 *
 * Separate from Property — designed for classified-style listings
 * that can be submitted by visitors or agents from the front-end.
 *
 * @package AgenceMurailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ═══════════════════════════════════════════════════════════
// ANNONCE CPT
// ═══════════════════════════════════════════════════════════

/**
 * Register Annonce Immobilier post type.
 */
function am_register_annonce_cpt() {

    $labels = array(
        'name'                  => _x( 'Annonces', 'Post type general name', 'agence-murailles' ),
        'singular_name'         => _x( 'Annonce', 'Post type singular name', 'agence-murailles' ),
        'menu_name'             => _x( 'Annonces Immo', 'Admin Menu text', 'agence-murailles' ),
        'add_new'               => __( 'Ajouter une annonce', 'agence-murailles' ),
        'add_new_item'          => __( 'Ajouter une nouvelle annonce', 'agence-murailles' ),
        'edit_item'             => __( 'Modifier l\'annonce', 'agence-murailles' ),
        'new_item'              => __( 'Nouvelle annonce', 'agence-murailles' ),
        'view_item'             => __( 'Voir l\'annonce', 'agence-murailles' ),
        'search_items'          => __( 'Rechercher les annonces', 'agence-murailles' ),
        'not_found'             => __( 'Aucune annonce trouvée.', 'agence-murailles' ),
        'not_found_in_trash'    => __( 'Aucune annonce dans la corbeille.', 'agence-murailles' ),
        'all_items'             => __( 'Toutes les annonces', 'agence-murailles' ),
        'featured_image'        => __( 'Photo principale', 'agence-murailles' ),
        'set_featured_image'    => __( 'Définir la photo principale', 'agence-murailles' ),
        'remove_featured_image' => __( 'Retirer la photo principale', 'agence-murailles' ),
    );

    register_post_type( 'annonce', array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'annonces-immobilier', 'with_front' => false ),
        'menu_icon'          => 'dashicons-megaphone',
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true,
        'capability_type'    => 'post',
    ) );
}
add_action( 'init', 'am_register_annonce_cpt' );

// ═══════════════════════════════════════════════════════════
// ANNONCE TAXONOMIES
// ═══════════════════════════════════════════════════════════

/**
 * Register annonce-specific taxonomies.
 */
function am_register_annonce_taxonomies() {

    // Transaction Type: Vente, Location, Vacances
    register_taxonomy( 'annonce_transaction', 'annonce', array(
        'labels' => array(
            'name'              => _x( 'Type de transaction', 'taxonomy general name', 'agence-murailles' ),
            'singular_name'     => _x( 'Transaction', 'taxonomy singular name', 'agence-murailles' ),
            'search_items'      => __( 'Rechercher', 'agence-murailles' ),
            'all_items'         => __( 'Toutes les transactions', 'agence-murailles' ),
            'edit_item'         => __( 'Modifier', 'agence-murailles' ),
            'update_item'       => __( 'Mettre à jour', 'agence-murailles' ),
            'add_new_item'      => __( 'Ajouter un type', 'agence-murailles' ),
            'new_item_name'     => __( 'Nouveau type', 'agence-murailles' ),
            'menu_name'         => __( 'Transaction', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'transaction' ),
    ) );

    // Annonce Category: Appartement, Villa, Terrain, Bureau, Riad, etc.
    register_taxonomy( 'annonce_categorie', 'annonce', array(
        'labels' => array(
            'name'              => _x( 'Catégorie Bien', 'taxonomy general name', 'agence-murailles' ),
            'singular_name'     => _x( 'Catégorie', 'taxonomy singular name', 'agence-murailles' ),
            'search_items'      => __( 'Rechercher', 'agence-murailles' ),
            'all_items'         => __( 'Toutes les catégories', 'agence-murailles' ),
            'edit_item'         => __( 'Modifier', 'agence-murailles' ),
            'update_item'       => __( 'Mettre à jour', 'agence-murailles' ),
            'add_new_item'      => __( 'Ajouter une catégorie', 'agence-murailles' ),
            'new_item_name'     => __( 'Nouvelle catégorie', 'agence-murailles' ),
            'menu_name'         => __( 'Catégorie Bien', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'categorie-bien' ),
    ) );

    // Annonce Ville
    register_taxonomy( 'annonce_ville', 'annonce', array(
        'labels' => array(
            'name'              => _x( 'Villes', 'taxonomy general name', 'agence-murailles' ),
            'singular_name'     => _x( 'Ville', 'taxonomy singular name', 'agence-murailles' ),
            'search_items'      => __( 'Rechercher', 'agence-murailles' ),
            'all_items'         => __( 'Toutes les villes', 'agence-murailles' ),
            'edit_item'         => __( 'Modifier', 'agence-murailles' ),
            'update_item'       => __( 'Mettre à jour', 'agence-murailles' ),
            'add_new_item'      => __( 'Ajouter une ville', 'agence-murailles' ),
            'new_item_name'     => __( 'Nouvelle ville', 'agence-murailles' ),
            'menu_name'         => __( 'Villes', 'agence-murailles' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'ville' ),
    ) );
}
add_action( 'init', 'am_register_annonce_taxonomies' );

// ═══════════════════════════════════════════════════════════
// ANNONCE META BOX
// ═══════════════════════════════════════════════════════════

/**
 * Register annonce meta box.
 */
function am_annonce_meta_boxes() {
    add_meta_box(
        'am_annonce_details',
        __( 'Détails de l\'annonce', 'agence-murailles' ),
        'am_annonce_details_callback',
        'annonce',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'am_annonce_meta_boxes' );

/**
 * Annonce meta box callback.
 */
function am_annonce_details_callback( $post ) {
    wp_nonce_field( 'am_annonce_details_nonce', 'am_annonce_nonce' );

    $fields = array(
        'am_annonce_prix'       => array( 'label' => __( 'Prix (MAD)', 'agence-murailles' ),           'type' => 'number' ),
        'am_annonce_surface'    => array( 'label' => __( 'Surface (m²)', 'agence-murailles' ),         'type' => 'number' ),
        'am_annonce_chambres'   => array( 'label' => __( 'Chambres', 'agence-murailles' ),             'type' => 'number' ),
        'am_annonce_sdb'        => array( 'label' => __( 'Salles de bain', 'agence-murailles' ),       'type' => 'number' ),
        'am_annonce_etage'      => array( 'label' => __( 'Étage', 'agence-murailles' ),                'type' => 'text' ),
        'am_annonce_adresse'    => array( 'label' => __( 'Adresse', 'agence-murailles' ),              'type' => 'text' ),
        'am_annonce_contact'    => array( 'label' => __( 'Téléphone contact', 'agence-murailles' ),    'type' => 'text' ),
        'am_annonce_email'      => array( 'label' => __( 'Email contact', 'agence-murailles' ),        'type' => 'email' ),
        'am_annonce_whatsapp'   => array( 'label' => __( 'WhatsApp', 'agence-murailles' ),             'type' => 'text' ),
        'am_annonce_ref'        => array( 'label' => __( 'Référence annonce', 'agence-murailles' ),    'type' => 'text' ),
        'am_annonce_disponible' => array( 'label' => __( 'Disponible immédiatement', 'agence-murailles' ), 'type' => 'checkbox' ),
    );

    echo '<div class="am-meta-grid">';
    foreach ( $fields as $key => $field ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<div class="am-meta-field">';
        echo '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] ) . '</label>';

        if ( 'checkbox' === $field['type'] ) {
            echo '<input type="checkbox" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="1" ' . checked( $value, '1', false ) . '>';
        } else {
            echo '<input type="' . esc_attr( $field['type'] ) . '" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" class="widefat">';
        }

        echo '</div>';
    }
    echo '</div>';

    // Équipements
    $equipements = get_post_meta( $post->ID, 'am_annonce_equipements', true );
    echo '<div class="am-meta-field am-meta-full">';
    echo '<label for="am_annonce_equipements">' . esc_html__( 'Équipements (séparés par virgule: Piscine, Garage, Ascenseur, Climatisation, Meublé, etc.)', 'agence-murailles' ) . '</label>';
    echo '<textarea id="am_annonce_equipements" name="am_annonce_equipements" class="widefat" rows="3">' . esc_textarea( $equipements ) . '</textarea>';
    echo '</div>';

    // Gallery
    $gallery = get_post_meta( $post->ID, 'am_annonce_gallery', true );
    echo '<div class="am-meta-field am-meta-full">';
    echo '<label for="am_annonce_gallery">' . esc_html__( 'Galerie photos (IDs séparés par virgule)', 'agence-murailles' ) . '</label>';
    echo '<input type="text" id="am_annonce_gallery" name="am_annonce_gallery" value="' . esc_attr( $gallery ) . '" class="widefat" placeholder="12,34,56,78">';
    echo '</div>';
}

/**
 * Save annonce meta data.
 */
function am_save_annonce_meta( $post_id ) {
    if ( ! isset( $_POST['am_annonce_nonce'] ) || ! wp_verify_nonce( $_POST['am_annonce_nonce'], 'am_annonce_details_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Numeric fields
    $numeric = array( 'am_annonce_prix', 'am_annonce_surface', 'am_annonce_chambres', 'am_annonce_sdb' );
    foreach ( $numeric as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }

    // Text fields
    $text = array( 'am_annonce_etage', 'am_annonce_adresse', 'am_annonce_contact', 'am_annonce_whatsapp', 'am_annonce_ref', 'am_annonce_gallery' );
    foreach ( $text as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }

    // Email
    if ( isset( $_POST['am_annonce_email'] ) ) {
        update_post_meta( $post_id, 'am_annonce_email', sanitize_email( $_POST['am_annonce_email'] ) );
    }

    // Checkbox
    $disponible = isset( $_POST['am_annonce_disponible'] ) ? '1' : '0';
    update_post_meta( $post_id, 'am_annonce_disponible', $disponible );

    // Textarea
    if ( isset( $_POST['am_annonce_equipements'] ) ) {
        update_post_meta( $post_id, 'am_annonce_equipements', sanitize_textarea_field( $_POST['am_annonce_equipements'] ) );
    }
}
add_action( 'save_post_annonce', 'am_save_annonce_meta' );

// ═══════════════════════════════════════════════════════════
// ANNONCE AJAX FILTER
// ═══════════════════════════════════════════════════════════

/**
 * Handle AJAX annonce filter.
 */
function am_filter_annonces() {
    check_ajax_referer( 'am_filter_nonce', 'nonce' );

    $paged = isset( $_POST['paged'] ) ? absint( $_POST['paged'] ) : 1;

    $args = array(
        'post_type'      => 'annonce',
        'posts_per_page' => 9,
        'paged'          => $paged,
        'post_status'    => 'publish',
    );

    if ( ! empty( $_POST['keyword'] ) ) {
        $args['s'] = sanitize_text_field( $_POST['keyword'] );
    }

    $tax_query = array();

    if ( ! empty( $_POST['annonce_transaction'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'annonce_transaction',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['annonce_transaction'] ),
        );
    }

    if ( ! empty( $_POST['annonce_categorie'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'annonce_categorie',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['annonce_categorie'] ),
        );
    }

    if ( ! empty( $_POST['annonce_ville'] ) ) {
        $tax_query[] = array(
            'taxonomy' => 'annonce_ville',
            'field'    => 'slug',
            'terms'    => sanitize_text_field( $_POST['annonce_ville'] ),
        );
    }

    if ( ! empty( $tax_query ) ) {
        $tax_query['relation'] = 'AND';
        $args['tax_query']     = $tax_query;
    }

    $meta_query = array();

    if ( ! empty( $_POST['min_price'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_annonce_prix',
            'value'   => absint( $_POST['min_price'] ),
            'compare' => '>=',
            'type'    => 'NUMERIC',
        );
    }

    if ( ! empty( $_POST['max_price'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_annonce_prix',
            'value'   => absint( $_POST['max_price'] ),
            'compare' => '<=',
            'type'    => 'NUMERIC',
        );
    }

    if ( ! empty( $_POST['chambres'] ) ) {
        $meta_query[] = array(
            'key'     => 'am_annonce_chambres',
            'value'   => absint( $_POST['chambres'] ),
            'compare' => '>=',
            'type'    => 'NUMERIC',
        );
    }

    if ( ! empty( $meta_query ) ) {
        $meta_query['relation'] = 'AND';
        $args['meta_query']     = $meta_query;
    }

    // Sort
    if ( ! empty( $_POST['sort'] ) ) {
        switch ( $_POST['sort'] ) {
            case 'price_asc':
                $args['meta_key'] = 'am_annonce_prix';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'ASC';
                break;
            case 'price_desc':
                $args['meta_key'] = 'am_annonce_prix';
                $args['orderby']  = 'meta_value_num';
                $args['order']    = 'DESC';
                break;
            case 'date_desc':
                $args['orderby'] = 'date';
                $args['order']   = 'DESC';
                break;
            case 'date_asc':
                $args['orderby'] = 'date';
                $args['order']   = 'ASC';
                break;
        }
    }

    $query = new WP_Query( $args );

    ob_start();

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'template-parts/content-annonce-card' );
        }
    } else {
        get_template_part( 'template-parts/content', 'none' );
    }

    $html = ob_get_clean();
    wp_reset_postdata();

    wp_send_json_success( array(
        'html'      => $html,
        'max_pages' => $query->max_num_pages,
        'found'     => $query->found_posts,
        'paged'     => $paged,
    ) );
}
add_action( 'wp_ajax_am_filter_annonces', 'am_filter_annonces' );
add_action( 'wp_ajax_nopriv_am_filter_annonces', 'am_filter_annonces' );

// ═══════════════════════════════════════════════════════════
// ANNONCE HELPER FUNCTIONS
// ═══════════════════════════════════════════════════════════

/**
 * Get annonce meta value.
 */
function am_get_annonce_meta( $key, $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    return get_post_meta( $post_id, $key, true );
}

/**
 * Display annonce transaction badge.
 */
function am_annonce_transaction_badge( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $transactions = get_the_terms( $post_id, 'annonce_transaction' );
    if ( $transactions && ! is_wp_error( $transactions ) ) {
        foreach ( $transactions as $transaction ) {
            $class = sanitize_html_class( $transaction->slug );
            echo '<span class="annonce-badge badge-' . esc_attr( $class ) . '">' . esc_html( $transaction->name ) . '</span>';
        }
    }
}

/**
 * Display annonce categorie label.
 */
function am_annonce_categorie_label( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $cats = get_the_terms( $post_id, 'annonce_categorie' );
    if ( $cats && ! is_wp_error( $cats ) ) {
        echo esc_html( $cats[0]->name );
    }
}

/**
 * Display annonce ville label.
 */
function am_annonce_ville_label( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $villes = get_the_terms( $post_id, 'annonce_ville' );
    if ( $villes && ! is_wp_error( $villes ) ) {
        echo esc_html( $villes[0]->name );
    }
}

/**
 * Display annonce quick specs.
 */
function am_annonce_quick_specs( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    $chambres = am_get_annonce_meta( 'am_annonce_chambres', $post_id );
    $sdb      = am_get_annonce_meta( 'am_annonce_sdb', $post_id );
    $surface  = am_get_annonce_meta( 'am_annonce_surface', $post_id );

    echo '<div class="property-specs">';
    if ( $chambres ) {
        echo '<span class="spec"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7v11a2 2 0 002 2h14a2 2 0 002-2V7"/><path d="M21 7V5a2 2 0 00-2-2H5a2 2 0 00-2 2v2"/><path d="M3 11h18"/></svg> ' . esc_html( $chambres ) . ' ' . esc_html__( 'Ch.', 'agence-murailles' ) . '</span>';
    }
    if ( $sdb ) {
        echo '<span class="spec"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12h16a1 1 0 011 1v3a4 4 0 01-4 4H7a4 4 0 01-4-4v-3a1 1 0 011-1z"/><path d="M6 12V5a2 2 0 012-2h3v2.25"/></svg> ' . esc_html( $sdb ) . ' ' . esc_html__( 'SdB', 'agence-murailles' ) . '</span>';
    }
    if ( $surface ) {
        echo '<span class="spec"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 3v18"/></svg> ' . esc_html( $surface ) . ' m²</span>';
    }
    echo '</div>';
}

/**
 * Get annonce equipements as array.
 */
function am_get_annonce_equipements( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $equipements = get_post_meta( $post_id, 'am_annonce_equipements', true );
    if ( empty( $equipements ) ) {
        return array();
    }
    return array_map( 'trim', explode( ',', $equipements ) );
}
