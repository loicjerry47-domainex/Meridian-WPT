<?php
/**
 * Template Name: Full Width
 */

get_header();
?>

<main id="primary" class="site-main pt-10 pb-20">
    <div class="container-fluid px-0">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
