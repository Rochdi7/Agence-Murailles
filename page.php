<?php
/**
 * Generic Page Template
 *
 * @package AgenceMurailles
 */

get_header();
?>

<main id="main-content" class="site-main">
    <section class="page-hero page-hero-small">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="page-content entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php
get_footer();
