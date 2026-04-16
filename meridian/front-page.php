<?php
/**
 * The front page template file
 */

get_header();
?>

<main id="primary" class="site-main front-page-main">

    <?php get_template_part( 'template-parts/hero', 'saas' ); ?>
    
    <?php get_template_part( 'template-parts/section', 'clients' ); ?>
    
    <?php get_template_part( 'template-parts/section', 'features' ); ?>
    
    <section class="section-social-proof">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item"><span class="stat-num" data-target="10000">0</span>+ <span class="stat-label"><?php esc_html_e( 'Users', 'meridian' ); ?></span></div>
                <div class="stat-item"><span class="stat-num">99.9</span>% <span class="stat-label"><?php esc_html_e( 'Uptime', 'meridian' ); ?></span></div>
                <div class="stat-item"><span class="stat-num">4.9</span>/5 <span class="stat-label"><?php esc_html_e( 'Rating', 'meridian' ); ?></span></div>
                <div class="stat-item"><span class="stat-icon">24/7</span> <span class="stat-label"><?php esc_html_e( 'Support', 'meridian' ); ?></span></div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/section', 'pricing' ); ?>
    
    <?php get_template_part( 'template-parts/section', 'testimonials' ); ?>
    
    <?php get_template_part( 'template-parts/section', 'cta' ); ?>

    <section class="section-recent-posts">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php esc_html_e( 'Latest Insights', 'meridian' ); ?></h2>
                <p><?php esc_html_e( 'Read our latest blog posts and updates.', 'meridian' ); ?></p>
            </div>
            <div class="post-grid">
                <?php
                $recent_posts = new WP_Query( array(
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ) );
                
                if ( $recent_posts->have_posts() ) :
                    while ( $recent_posts->have_posts() ) :
                        $recent_posts->the_post();
                        get_template_part( 'template-parts/card', 'blog' );
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>' . esc_html__( 'No posts found.', 'meridian' ) . '</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
