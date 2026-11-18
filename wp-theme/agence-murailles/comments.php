<?php
/**
 * Comments Template.
 *
 * @package Agence_Murailles
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h4 class="comments-title mb-4">
            <?php
            printf(
                esc_html( _nx( '%1$s Comment', '%1$s Comments', get_comments_number(), 'comments title', 'agence-murailles' ) ),
                number_format_i18n( get_comments_number() )
            );
            ?>
        </h4>

        <ol class="comment-list list-unstyled">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ) );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>
    <?php endif; ?>

    <?php
    comment_form( array(
        'class_form'    => 'comment-form mt-4',
        'class_submit'  => 'btn btn-main',
        'title_reply'   => esc_html__( 'Leave a Comment', 'agence-murailles' ),
    ) );
    ?>
</div>
