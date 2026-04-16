<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="error-404 not-found container text-center">
        <header class="page-header">
            <h1 class="page-title huge-404">404</h1>
            <h2 class="sub-404"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'meridian' ); ?></h2>
        </header>

        <div class="page-content">
            <p><?php esc_html_e( 'Looks like this page took a vacation. Maybe try a search?', 'meridian' ); ?></p>
            <?php get_search_form(); ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary mt-4" style="display:inline-block; margin-top:20px;"><?php esc_html_e( 'Back to Home', 'meridian' ); ?></a>
        </div>
    </section>
</main>

<?php
get_footer();
