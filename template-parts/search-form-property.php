<?php
/**
 * Template Part: Property Search/Filter Form
 *
 * @package AgenceMurailles
 */
?>

<form id="property-search-form" class="property-search-form" method="GET" action="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>">

    <div class="search-form-grid">

        <div class="form-group">
            <label for="search-keyword"><?php esc_html_e( 'Keyword', 'agence-murailles' ); ?></label>
            <input type="text" id="search-keyword" name="keyword" placeholder="<?php esc_attr_e( 'Search properties...', 'agence-murailles' ); ?>" value="<?php echo isset( $_GET['keyword'] ) ? esc_attr( $_GET['keyword'] ) : ''; ?>">
        </div>

        <div class="form-group">
            <label for="search-type"><?php esc_html_e( 'Property Type', 'agence-murailles' ); ?></label>
            <select id="search-type" name="property_type">
                <option value=""><?php esc_html_e( 'All Types', 'agence-murailles' ); ?></option>
                <?php
                $types = get_terms( array( 'taxonomy' => 'property_type', 'hide_empty' => false ) );
                if ( $types && ! is_wp_error( $types ) ) :
                    foreach ( $types as $type ) :
                        $selected = ( isset( $_GET['property_type'] ) && $_GET['property_type'] === $type->slug ) ? 'selected' : '';
                        echo '<option value="' . esc_attr( $type->slug ) . '" ' . $selected . '>' . esc_html( $type->name ) . '</option>';
                    endforeach;
                endif;
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="search-city"><?php esc_html_e( 'City', 'agence-murailles' ); ?></label>
            <select id="search-city" name="property_city">
                <option value=""><?php esc_html_e( 'All Cities', 'agence-murailles' ); ?></option>
                <?php
                $cities = get_terms( array( 'taxonomy' => 'property_city', 'hide_empty' => false ) );
                if ( $cities && ! is_wp_error( $cities ) ) :
                    foreach ( $cities as $city ) :
                        $selected = ( isset( $_GET['property_city'] ) && $_GET['property_city'] === $city->slug ) ? 'selected' : '';
                        echo '<option value="' . esc_attr( $city->slug ) . '" ' . $selected . '>' . esc_html( $city->name ) . '</option>';
                    endforeach;
                endif;
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="search-status"><?php esc_html_e( 'Status', 'agence-murailles' ); ?></label>
            <select id="search-status" name="property_status">
                <option value=""><?php esc_html_e( 'All', 'agence-murailles' ); ?></option>
                <?php
                $statuses = get_terms( array( 'taxonomy' => 'property_status', 'hide_empty' => false ) );
                if ( $statuses && ! is_wp_error( $statuses ) ) :
                    foreach ( $statuses as $status ) :
                        $selected = ( isset( $_GET['property_status'] ) && $_GET['property_status'] === $status->slug ) ? 'selected' : '';
                        echo '<option value="' . esc_attr( $status->slug ) . '" ' . $selected . '>' . esc_html( $status->name ) . '</option>';
                    endforeach;
                endif;
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="search-bedrooms"><?php esc_html_e( 'Bedrooms', 'agence-murailles' ); ?></label>
            <select id="search-bedrooms" name="bedrooms">
                <option value=""><?php esc_html_e( 'Any', 'agence-murailles' ); ?></option>
                <option value="1" <?php selected( isset( $_GET['bedrooms'] ) ? $_GET['bedrooms'] : '', '1' ); ?>>1+</option>
                <option value="2" <?php selected( isset( $_GET['bedrooms'] ) ? $_GET['bedrooms'] : '', '2' ); ?>>2+</option>
                <option value="3" <?php selected( isset( $_GET['bedrooms'] ) ? $_GET['bedrooms'] : '', '3' ); ?>>3+</option>
                <option value="4" <?php selected( isset( $_GET['bedrooms'] ) ? $_GET['bedrooms'] : '', '4' ); ?>>4+</option>
                <option value="5" <?php selected( isset( $_GET['bedrooms'] ) ? $_GET['bedrooms'] : '', '5' ); ?>>5+</option>
            </select>
        </div>

        <div class="form-group">
            <label for="search-min-price"><?php esc_html_e( 'Min Price', 'agence-murailles' ); ?></label>
            <input type="number" id="search-min-price" name="min_price" placeholder="<?php esc_attr_e( 'Min', 'agence-murailles' ); ?>" value="<?php echo isset( $_GET['min_price'] ) ? esc_attr( $_GET['min_price'] ) : ''; ?>">
        </div>

        <div class="form-group">
            <label for="search-max-price"><?php esc_html_e( 'Max Price', 'agence-murailles' ); ?></label>
            <input type="number" id="search-max-price" name="max_price" placeholder="<?php esc_attr_e( 'Max', 'agence-murailles' ); ?>" value="<?php echo isset( $_GET['max_price'] ) ? esc_attr( $_GET['max_price'] ) : ''; ?>">
        </div>

        <div class="form-group form-group-submit">
            <button type="submit" class="btn btn-primary btn-search">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <?php esc_html_e( 'Search', 'agence-murailles' ); ?>
            </button>
        </div>

    </div>

</form>
