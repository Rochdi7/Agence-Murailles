<?php
/**
 * Custom Widgets
 *
 * @package Agence_Murailles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Featured Properties Widget.
 */
class AM_Featured_Properties_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'am_featured_properties',
            __( 'AM: Featured Properties', 'agence-murailles' ),
            array( 'description' => __( 'Displays featured property listings.', 'agence-murailles' ) )
        );
    }

    public function widget( $args, $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Featured Properties', 'agence-murailles' );
        $count = ! empty( $instance['count'] ) ? absint( $instance['count'] ) : 4;

        echo $args['before_widget'];
        echo $args['before_title'] . esc_html( $title ) . $args['after_title'];

        $query = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => $count,
            'meta_key'       => 'am_featured',
            'meta_value'     => '1',
        ) );

        if ( $query->have_posts() ) {
            echo '<div class="sidebar_featured_property">';
            while ( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'template-parts/content-property-card', 'sidebar' );
            }
            echo '</div>';
            wp_reset_postdata();
        } else {
            echo '<p>' . esc_html__( 'No featured properties found.', 'agence-murailles' ) . '</p>';
        }

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : __( 'Featured Properties', 'agence-murailles' );
        $count = isset( $instance['count'] ) ? absint( $instance['count'] ) : 4;
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'agence-murailles' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"><?php esc_html_e( 'Number of properties:', 'agence-murailles' ); ?></label>
            <input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>" value="<?php echo esc_attr( $count ); ?>" type="number" min="1" max="10">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['count'] = absint( $new_instance['count'] );
        return $instance;
    }
}

function am_register_widgets() {
    register_widget( 'AM_Featured_Properties_Widget' );
}
add_action( 'widgets_init', 'am_register_widgets' );
