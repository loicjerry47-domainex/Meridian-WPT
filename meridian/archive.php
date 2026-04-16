<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header>

            <div class="post-grid">
                <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/card', 'blog' );
                endwhile;
                ?>
            </div>

            <?php the_posts_navigation(); ?>

        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
    </div>
</main>

<?php
get_sidebar();
get_footer();
