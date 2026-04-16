<?php
/**
 * The template for displaying search results pages
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'meridian' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
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
