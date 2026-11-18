<?php
/**
 * Template Part: Property Card (Sidebar / Compact)
 *
 * @package Agence_Murailles
 */

$price    = am_get_property_price();
$location = am_get_property_location();
?>

<div class="sides_list_property p-2">
    <div class="sides_list_property_thumb">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid' ) ); ?>
            </a>
        <?php else : ?>
            <img src="<?php echo esc_url( AM_THEME_URI . '/assets/img/p-1.jpg' ); ?>" class="img-fluid" alt="">
        <?php endif; ?>
    </div>
    <div class="sides_list_property_detail">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php if ( $location ) : ?>
            <span class="text-muted-2"><i class="fa-solid fa-location-dot"></i><?php echo esc_html( $location ); ?></span>
        <?php endif; ?>
        <div class="lists_property_price">
            <div class="lists_property_types">
                <?php echo am_get_property_status_badge(); ?>
            </div>
            <div class="lists_property_price_value">
                <h4 class="text-main"><?php echo $price; ?></h4>
            </div>
        </div>
    </div>
</div>
