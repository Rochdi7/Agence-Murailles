<?php
/**
 * Custom Search Form.
 *
 * @package Agence_Murailles
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" class="form-control" placeholder="<?php esc_attr_e( 'Search...', 'agence-murailles' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
        <button class="btn btn-main" type="submit"><i class="bi bi-search"></i></button>
    </div>
</form>
