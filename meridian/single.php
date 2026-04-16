<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container single-post-container">
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'meridian' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'meridian' ) . '</span> <span class="nav-title">%title</span>',
                )
            );

            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
