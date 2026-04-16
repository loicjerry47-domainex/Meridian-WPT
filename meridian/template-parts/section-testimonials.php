<?php
/**
 * Testimonials Section
 */
?>
<section class="section-testimonials">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php esc_html_e( 'Loved by teams worldwide', 'meridian' ); ?></h2>
            <p><?php esc_html_e( 'Don\'t just take our word for it.', 'meridian' ); ?></p>
        </div>
        <?php echo do_shortcode( '[meridian_testimonials count="6"]' ); ?>
    </div>
</section>
