<?php
/**
 * Template Name: Pricing Page
 */

get_header();
?>

<main id="primary" class="site-main pt-10 pb-20">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <header class="page-header text-center mb-12">
                <?php the_title( '<h1 class="page-title text-4xl font-bold mb-4">', '</h1>' ); ?>
                <div class="page-description text-xl text-gray-500 max-w-2xl mx-auto">
                    <?php the_content(); ?>
                </div>
            </header>
            
            <?php echo do_shortcode( '[meridian_pricing]' ); ?>
            
            <section class="faq-section mt-24">
                <?php get_template_part('template-parts/section', 'cta'); ?>
            </section>
            
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
